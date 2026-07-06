# Data Model: UI Component Hierarchy & Page Templates

## Component Tree

```
Page Layout (app.blade.php)
├── Sidebar (Livewire full-stack)
│   └── NavigationGroup (collapsible)
│       └── NavigationItem (active state via route)
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
    <livewire:dashboard.chart-widget type="donut" endpoint="..." />
    <livewire:dashboard.chart-widget type="line" endpoint="..." />
  </div>
  <livewire:table.data-table :endpoint="..." :columns="[...]" />
@endsection
```
- Data source: Livewire properties + ApexCharts API fetches
- State: Loading/loaded/error per widget
- Interactivity: Charts render on init, table supports sort/filter/page

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
  <livewire:table.data-table :endpoint="route('api.module.index')"
    :columns="[['key'=>'name','label'=>'الاسم'], ...]" />
  <x-ui.modal id="create" title="إضافة">
    <livewire:forms.create-{{ $module }} />
  </x-ui.modal>
@endsection
```
- Data source: Livewire DataTable component fetches via model query
- State: sort key/dir, page, filters, loading, rows[], pagination meta
- Interactivity: Sort column, next/prev page, apply filters, row actions

### Type 4: Detail / Record
```
@extends('layouts.app')
@section('content')
  <div class="bg-white rounded-card shadow-card p-4 mb-4
              flex items-center justify-between">
    <div>
      <div class="text-2xl font-bold">{{ $record->balance }}</div>
      <div class="text-sm text-slate-500">{{ $record->name }}</div>
    </div>
    <div class="flex items-center gap-2">
      <x-ui.status-badge :status="$record->status" />
      <x-ui.button variant="secondary">تعديل</x-ui.button>
      <x-ui.button variant="danger">حذف</x-ui.button>
    </div>
  </div>
  <livewire:ui.tabs :tabs="[
    'statement' => 'كشف حساب',
    'transfers' => 'التحويلات',
    'activity'  => 'سجل النشاطات',
  ]" :record-id="$record->id" />
@endsection
```
- Data source: Controller passes $record; tabs use Livewire with record-id
- State: active tab, each tab's table state independent
- Interactivity: Tab switch triggers on-demand data fetch, inline row actions

## Component States

Each Livewire component with async data MUST handle these states:

| State | Visual | Trigger |
|-------|--------|---------|
| Loading | Skeleton/spinner or "جاري التحميل..." | Initial mount, refresh, sort/page change |
| Loaded | Data rendered normally | Successful response |
| Empty | "لا توجد بيانات" centered message | Zero records returned |
| Error | "حدث خطأ في التحميل" + retry button | Failed request/exception |
| Session Expired | Toast notification → redirect to /login | 401/419 from server |

## Design Tokens (Tailwind @theme additions)

Add to existing `resources/css/app.css` @theme block:

```css
@theme {
    /* Existing tokens already present */
    --color-primary: #2563eb;
    /* ... */

    /* ERP-specific tokens to add */
    --color-brand: #0f6db8;
    --color-brand-pink: #c2185b;
    --color-brand-50: #eef7fd;
    --color-brand-100: #d9edf9;
    --color-brand-500: #0f6db8;
    --color-brand-600: #0c5a97;
    --color-status-active: #22c55e;
    --color-status-excluded: #ef4444;
    --color-status-neutral: #94a3b8;
    --color-status-primary: #2563eb;
    --color-surface-sidebar: #ffffff;
    --radius-card: 0.75rem;
    --shadow-card: 0 1px 3px rgba(16,24,40,0.08), 0 1px 2px rgba(16,24,40,0.04);
    --shadow-card-hover: 0 4px 10px rgba(16,24,40,0.10);
}
```
