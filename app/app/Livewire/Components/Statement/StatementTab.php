<?php

namespace App\Livewire\Components\Statement;

use App\Models\FundAccount;
use Carbon\Carbon;
use Livewire\Component;

class StatementTab extends Component
{
    public ?string $dateFrom = null;

    public ?string $dateTo = null;

    public array $transactions = [];

    public int $total = 0;

    public function mount(): void
    {
        $this->loadTransactions();
    }

    public function updatedDateFrom(): void
    {
        $this->loadTransactions();
    }

    public function updatedDateTo(): void
    {
        $this->loadTransactions();
    }

    public function clearFilters(): void
    {
        $this->dateFrom = null;
        $this->dateTo = null;

        $this->loadTransactions();
    }

    public function loadTransactions(): void
    {
        $query = FundAccount::query()
            ->with(['receipts', 'exchange_bond', 'user'])
            ->orderBy('date', 'desc');

        if ($this->dateFrom) {
            $query->where('date', '>=', Carbon::parse($this->dateFrom));
        }

        if ($this->dateTo) {
            $query->where('date', '<=', Carbon::parse($this->dateTo));
        }

        $this->transactions = $query->get()->map(function (FundAccount $record) {
            return [
                'id' => $record->id,
                'date' => $record->date->format('Y-m-d'),
                'debit' => $record->Debit ? number_format($record->Debit, 2) : '—',
                'credit' => $record->Credit ? number_format($record->Credit, 2) : '—',
                'description' => $this->buildDescription($record),
                'user' => $record->user?->name ?? '—',
            ];
        })->toArray();

        $this->total = count($this->transactions);
    }

    public function render()
    {
        return view('livewire.components.statement.statement-tab');
    }

    private function buildDescription(FundAccount $record): string
    {
        if ($record->receipts) {
            return 'سند قبض #'.$record->receipt_id;
        }

        if ($record->exchange_bond) {
            return 'سند صرف #'.$record->exchange_bond_id;
        }

        return 'معاملة #'.$record->id;
    }
}
