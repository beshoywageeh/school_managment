<?php

namespace App\Livewire\Components\Navigation;

use App\Helpers\PermissionsHelper;
use App\Models\School;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public array $navGroups = [];

    public array $openGroups = [];

    public string $search = '';

    public function mount(): void
    {
        $this->navGroups = PermissionsHelper::getVisibleNavGroups();
    }

    public function isActiveRoute(string $routeName, ?array $params = null): bool
    {
        if ($params) {
            foreach ($params as $key => $value) {
                if (request($key) !== $value) {
                    return false;
                }
            }
        }

        return request()->routeIs($routeName) || request()->is(explode('.', $routeName)[0].'*');
    }

    public function isActiveSubgroup(string $routePrefix): bool
    {
        return request()->is('*'.$routePrefix.'*');
    }

    public function toggleGroup(string $group): void
    {
        if (in_array($group, $this->openGroups)) {
            $this->openGroups = array_values(array_filter($this->openGroups, fn ($g) => $g !== $group));
        } else {
            $this->openGroups[] = $group;
        }
    }

    public function isGroupOpen(string $group): bool
    {
        return in_array($group, $this->openGroups);
    }

    public function render()
    {
        $school = null;
        $schoolId = Auth::user()?->school_id;

        if ($schoolId) {
            $school = School::where('id', $schoolId)->with('image')->first();
        }

        return view('livewire.navigation.sidebar', [
            'school' => $school,
        ]);
    }
}
