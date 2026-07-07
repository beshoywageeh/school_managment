<?php

namespace App\Livewire\Components\Table;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Livewire\Component;

class DataTable extends Component
{
    public string $modelClass;

    public array $columns = [];

    public array $filters = [];

    public int $perPage = 15;

    public string $sortKey = 'id';

    public string $sortDir = 'desc';

    public int $page = 1;

    public string $name = 'default';

    public function mount(string $modelClass, array $columns = [], string $name = 'default', int $perPage = 15): void
    {
        $this->modelClass = $modelClass;
        $this->columns = $columns;
        $this->name = str_replace(['.', ' ', '/', '\\'], '-', $name);
        $this->perPage = $perPage;
    }

    public function fetchData(): void
    {
        try {
            $model = app($this->modelClass);
            $query = $model->query();

            $relations = $this->extractRelations();
            if (! empty($relations)) {
                $query->with($relations);
            }

            foreach ($this->filters as $key => $value) {
                if ($value !== '' && $value !== null) {
                    $query->where($key, $value);
                }
            }

            if (Str::contains($this->sortKey, '.')) {
                $parts = explode('.', $this->sortKey);
                $relation = $parts[0];
                $field = $parts[1];
                $modelInstance = new $this->modelClass;
                $relatedModel = $modelInstance->{$relation}()->getRelated();
                $relatedTable = $relatedModel->getTable();
                $foreignKey = $modelInstance->{$relation}()->getForeignKeyName();
                $localKey = $modelInstance->{$relation}()->getLocalKeyName();

                $query
                    ->leftJoin(
                        $relatedTable,
                        $relatedTable.'.'.$localKey,
                        '=',
                        $modelInstance->getTable().'.'.$foreignKey
                    )
                    ->orderBy($relatedTable.'.'.$field, $this->sortDir)
                    ->select($modelInstance->getTable().'.*');
            } else {
                $query->orderBy($this->sortKey, $this->sortDir);
            }

            $paginator = $query->paginate($this->perPage, ['*'], 'page', $this->page);

            $visibleColumns = array_values(array_filter($this->columns, function ($column) {
                if (isset($column['permission']) && $column['permission']) {
                    return Gate::allows($column['permission']);
                }

                return true;
            }));

            $this->dispatch('table-data-'.$this->name, [
                'data' => $paginator->items(),
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
                'per_page' => $paginator->perPage(),
                'total' => $paginator->total(),
                'from' => $paginator->firstItem(),
                'to' => $paginator->lastItem(),
                'sort_key' => $this->sortKey,
                'sort_dir' => $this->sortDir,
                'columns' => $visibleColumns,
            ]);
        } catch (\Throwable $e) {
            $this->dispatch('table-data-'.$this->name, [
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function sortBy(string $key): void
    {
        if ($this->sortKey === $key) {
            $this->sortDir = $this->sortDir === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortKey = $key;
            $this->sortDir = 'asc';
        }

        $this->page = 1;
        $this->fetchData();
    }

    public function applyFilters(array $filters): void
    {
        $this->filters = $filters;
        $this->page = 1;
        $this->fetchData();
    }

    public function nextPage(): void
    {
        $this->page++;
        $this->fetchData();
    }

    public function prevPage(): void
    {
        $this->page = max(1, $this->page - 1);
        $this->fetchData();
    }

    public function goToPage(int $page): void
    {
        $this->page = max(1, $page);
        $this->fetchData();
    }

    public function updatedPerPage(): void
    {
        $this->page = 1;
        $this->fetchData();
    }

    public function performAction(int $id, string $action): void
    {
        try {
            $model = app($this->modelClass);
            $record = $model->findOrFail($id);

            if (! auth()->user()->can($action.'-'.$record->getTable())) {
                $this->dispatch('table-data-'.$this->name, [
                    'error' => __('general.unauthorized_action') ?? 'غير مصرح بهذا الإجراء',
                ]);

                return;
            }

            $result = match ($action) {
                'toggle-status' => $record->update(['status' => $record->status === 'active' ? 'inactive' : 'active']),
                default => method_exists($record, $action) ? $record->$action() : $record->update(['status' => $action]),
            };

            $record->refresh();
            $this->fetchData();

            $this->dispatch('action-completed-'.$this->name, [
                'row_id' => $id,
                'action' => $action,
                'success' => true,
                'message' => __('general.action_completed') ?? 'تم تنفيذ الإجراء بنجاح',
            ]);
        } catch (\Throwable $e) {
            $this->dispatch('action-completed-'.$this->name, [
                'row_id' => $id,
                'action' => $action,
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function render()
    {
        return view('livewire.components.table.data-table');
    }

    private function extractRelations(): array
    {
        $relations = [];

        foreach ($this->columns as $column) {
            $key = $column['key'] ?? '';

            if (Str::contains($key, '.')) {
                $parts = explode('.', $key);
                $relation = $parts[0];

                if (! in_array($relation, $relations)) {
                    $relations[] = $relation;
                }
            }
        }

        return $relations;
    }
}
