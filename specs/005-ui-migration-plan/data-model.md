# Data Model: UI Component Hierarchy & Page Templates

## Component Tree

```
Page Layout (app.blade.php)
├── Sidebar (Livewire full-stack)
│   ├── (role-filtered nav groups based on auth()->user())
│   └── NavigationGroup (collapsible)
│       └── NavigationItem (active state via route, role-gated visibility)
├── Topbar (Livewire full-stack)
│   ├── PageTitle / Breadcrumbs
│   ├── PrimaryActionButtons
│   └── UtilityCluster (help, notifications, user)
└── Content Slot (@yield / Livewire component per page)
    │
    ├── Page Type: Settings Hub
    │   └── CardGrid (grid layout)
    │       └── x-ui.card × N (Blade-only, visual)
    │
    ├── Page Type: Dashboard
    │   ├── KpiRow
    │   │   └── KpiCard × 3-4 (Livewire, fetches stats)
    │   ├── ChartRow (grid cols-2)
    │   │   ├── ChartWidget — donut (Livewire + ApexCharts)
    │   │   └── ChartWidget — line/area (Livewire + ApexCharts)
    │   └── LatestRecordsTable (x-ui.data-table)
    │
    ├── Page Type: List / Index
    │   ├── PageHeader (title + action buttons)
    │   ├── FilterPanel (Alpine togglable)
    │   │   ├── SearchInput
    │   │   ├── SelectFilter × N
    │   │   └── ActionButtons (بحث / اعاده تعين)
    │   └── DataTable (Livewire full-stack)
    │       ├── ColumnHeaders (sortable)
    │       ├── Row × N (with x-ui.status-badge)
    │       ├── RowActions (kebab menu + primary button)
    │       ├── PaginationControls
    │       └── States: loading / empty / error
    │
    └── Page Type: Detail / Record
        ├── RecordHeader (name, balance, status, actions)
        │   ├── x-ui.status-badge
        │   └── x-ui.button × N (edit, transfer, disable, delete)
        └── TabSection (Livewire full-stack)
            ├── TabBar
            └── TabPanel × N (on-demand content)
                └── DataTable (nested) / Details / Activity
```

## Page Type Templates

### Type 1: Settings Hub Grid
```
@extends('layouts.app')
@section('content')
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($cards as $card)
      <x-ui.card :icon="$card['icon']" :label="$card['label']"
                 :href="$card['href']" :active="$card['active'] ?? false" />
    @endforeach
  </div>
@endsection
```
- Data source: Controller passes array/config
- State: None (static navigation)

### Type 2: Dashboard
```
@extends('layouts.app')
@section('content')
  <livewire:dashboard.kpi-row />
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <livewire:dashboard.chart-widget type="donut" />
    <livewire:dashboard.chart-widget type="line" />
  </div>
  {{-- DataTable with Livewire event-driven data --}}
  <x-ui.data-table :columns="$columns" :livewire-component="'dashboard.latest-records'" />
@endsection
```
- Data source: Livewire components query models directly; ApexCharts receives data via Livewire properties
- State: Loading/loaded/error per widget
- Interactivity: Charts render on init, table supports sort/filter/page via Livewire
- Role awareness: Different roles see different KPIs per DashboardRedesignTest.php expectations

### Type 3: List / Index
```
@extends('layouts.app')
@section('content')
  <div class="flex items-center justify-between mb-4">
    <h1 class="text-lg font-semibold">{{ $title }}</h1>
    <div class="flex gap-2">
      <x-ui.button variant="primary" @click="$dispatch('open-modal-...')">
        إضافة
      </x-ui.button>
    </div>
  </div>
  {{-- Hybrid DataTable: Alpine presentation + Livewire data --}}
  <x-ui.data-table :columns="$columns" :livewire-component="'module.list-data'" />
  <x-ui.modal id="create" title="إضافة">
    <livewire:forms.create-{{ $module }} />
  </x-ui.modal>
@endsection
```
- Data source: Livewire component queries model directly, emits data to Alpine DataTable
- State: sort key/dir, page, filters, loading, rows[], pagination meta (in Livewire)
- Interactivity: Sort column, next/prev page, apply filters, row actions via Livewire events
- Role awareness: Columns and row actions may differ by user role

### Type 4: Detail / Record
```
@extends('layouts.app')
@section('content')
  <x-ui.detail-header
    :title="$record->name"
    :status="$record->status"
    :status-label="__('statuses.' . $record->status)"
    :balance="$record->balance">
    <x-slot:actions>
      <x-ui.button variant="secondary">تعديل</x-ui.button>
      <x-ui.button variant="danger">حذف</x-ui.button>
    </x-slot:actions>
  </x-ui.detail-header>

  <x-ui.tabs :tabs="$tabs">
    @foreach ($tabs as $tab)
      <x-slot:{{ $tab['key'] }}>
        <x-ui.data-table :columns="$tab['columns']" :livewire-component="$tab['livewire']" />
      </x-slot:{{ $tab['key'] }}>
    @endforeach
  </x-ui.tabs>
@endsection
```
- Data source: Controller passes $record and tab config; tabs use Alpine with Livewire data
- State: active tab, each tab's table state independent via separate Livewire components
- Interactivity: Tab switch shows on-demand content (loaded only when tab first activated)

## Component States

Each Livewire component with async data MUST handle these states:

| State | Visual | Trigger | Accessibility |
|-------|--------|---------|---------------|
| Loading | Skeleton/spinner or "جاري التحميل..." | Initial mount, refresh, sort/page change | `aria-busy="true"`, spinner has `role="status"` |
| Loaded | Data rendered normally | Successful response | `aria-live="polite"` region announces row count |
| Empty | "لا توجد بيانات" centered message | Zero records returned | `role="status"` on empty message |
| Error | "حدث خطأ في التحميل" + retry button | Failed request/exception | `role="alert"`, error announced to screen readers |
| Session Expired | Toast notification → redirect to /login | 401/419 from server | `role="alert"` on toast, focus moved to notification |

## Design Tokens

Most tokens already exist in `resources/css/app.css` @theme block. See current state below and only add missing tokens:

### Already Present (app.css lines 7-30)

```css
--font-family-sans: "Cairo", "Nunito", sans-serif;
--color-primary: #2563eb;
--color-primary-dark: #1d4ed8;
--color-surface: #ffffff;
--color-surface-sidebar: #1e293b;     /* dark sidebar */
--color-muted: #f8fafc;
--color-border: #e2e8f0;
--color-text-primary: #0f172a;
--color-text-secondary: #64748b;
--color-success: #16a34a;
--color-danger: #dc2626;
--color-warning: #d97706;
--color-info: #0284c7;
--color-status-active: #16a34a;
--color-status-excluded: #dc2626;
--color-status-neutral: #64748b;
--color-status-primary: #2563eb;
--radius-card: 0.75rem;
--shadow-card: 0 1px 3px 0 rgb(0 0 0 / 0.1);
```

### To Add (if needed for components)

```css
--shadow-card-hover: 0 4px 10px rgba(16,24,40,0.10);
```
