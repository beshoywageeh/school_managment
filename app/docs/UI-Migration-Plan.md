# UI Redesign & Migration Plan
### Target: Convert current system UI to the reference design (Daftra-style ERP layout)
### Stack constraint: **Tailwind CSS + Alpine.js + Axios only** (no Livewire, no Bootstrap, no jQuery)

This document is written so that an AI coding agent (or a developer) can follow it step‑by‑step,
in order, without needing extra clarification. Each phase has a clear goal, a checklist, and
concrete code conventions to copy.

---

## 0. Reference Design Summary (extracted from screenshots)

The target UI is a classic **RTL Arabic admin/ERP layout** with 4 recurring screen types:

1. **Settings / module hub page** — grid of clickable cards, each with an icon + label
   (e.g. "إعدادات التصنيع" screen). One card can be visually "active/selected" (green border).
2. **Dashboard page** — KPI summary bar, a donut chart + a line/area chart side by side,
   a "latest records" table below.
3. **List / index page** — colored top header bar with page title + primary action buttons
   (e.g. "إضافة خزينة" / "إضافة حساب بنكي"), a collapsible filter/search panel, and a
   data table with status dot-badges ("نشط", "مستبعد", "لم تطابق").
4. **Detail / record page** — record header (name, balance, status, action toolbar:
   تعديل / تعطيل / التحويل / حذف), tabs (التفاصيل / معاملات النظام / التحويلات / سجل النشاطات /
   كشف حساب البنك), and below the tabs a filterable, sortable data table with per-row
   action buttons (e.g. "مطابقة").

### Recurring visual/UX elements to standardize as components
- **Right-side vertical navigation** (RTL: nav is on the right), collapsible groups (chevron),
  active item highlighted with a colored left-border + tinted background.
- **Top header bar** — solid brand color, breadcrumbs/page title on the right, primary action
  button(s) on the left, plus a small utility cluster (help, notifications, account switcher).
- **Card component** — white bg, rounded corners, soft shadow, icon on top, label centered/below,
  hover elevation, optional "selected" state (colored border + subtle background tint).
- **Status badge** — colored dot + label text (green = active/matched, red = excluded/unmatched,
  gray = neutral), no pill background, just dot + text.
- **Data table** — sticky header row, right-aligned Arabic text, sortable column headers (icon),
  zebra-free flat rows with bottom border, row actions in a "..." kebab menu + one primary
  inline button (e.g. "مطابقة").
- **Filter panel** — togglable ("اخفاء" / show), grid of select/search inputs, "بحث" + "اعاده تعين"
  buttons.
- **KPI/chart cards** — white rounded card, small label, big number, colored accent.

---

## 1. Goals & Non-Goals

**Goals**
- Replace old Bootstrap-based views with Tailwind CSS utility classes.
- Replace jQuery/vanilla DOM scripting with Alpine.js components (`x-data`, `x-show`, `x-for`, etc.).
- Replace server-rendered/form-submit interactions with Axios calls to existing (or lightly
  adapted) API/controller JSON endpoints, updating the DOM reactively via Alpine state.
- Produce a small reusable **Blade component library** matching the reference visuals, so every
  page is built by composing components, not duplicating markup.
- Keep RTL Arabic layout correct throughout.

**Non-Goals**
- No Livewire, no Vue/React, no Bootstrap.
- No backend architecture rewrite — only add/adjust endpoints where the UI now needs JSON
  instead of full page reloads.
- No pixel-perfect cloning of the reference product's brand (colors are configurable via
  Tailwind theme, not literally copied brand assets).

---

## 2. Phase Overview (do these in order)

| Phase | Deliverable |
|---|---|
| 1 | Tailwind + Alpine + Axios project setup, design tokens |
| 2 | Base layout shell (sidebar + topbar + content slot) |
| 3 | Shared component library (cards, badges, buttons, tables, filters, modals) |
| 4 | Settings/hub grid pages |
| 5 | Dashboard page (KPIs + charts) |
| 6 | List/index pages (treasuries, customers, etc.) |
| 7 | Detail/record pages (tabs + statement table) |
| 8 | Axios data layer + endpoint contract |
| 9 | QA pass: RTL, responsiveness, accessibility, loading/error states |
| 10 | Cleanup: remove old Bootstrap/jQuery assets |

Each phase below has its own checklist. **Do not skip ahead** — later phases assume the
components from earlier phases exist.

---

## 3. Phase 1 — Project Setup & Design Tokens

### 3.1 Install/verify dependencies
```bash
npm install -D tailwindcss postcss autoprefixer
npm install alpinejs axios
npx tailwindcss init -p
```

### 3.2 `tailwind.config.js` — design tokens extracted from the reference UI
```js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          DEFAULT: '#0f6db8',   // main header blue (image 1)
          pink:    '#c2185b',   // alt header pink (images 2 & 3)
          50:  '#eef7fd',
          100: '#d9edf9',
          500: '#0f6db8',
          600: '#0c5a97',
        },
        status: {
          active:   '#22c55e', // green dot
          excluded: '#ef4444', // red dot
          neutral:  '#94a3b8', // gray dot
          primary:  '#2563eb', // blue dot ("رئيسي")
        },
        surface: {
          DEFAULT: '#ffffff',
          muted:   '#f4f6f9',
          sidebar: '#ffffff',
        },
      },
      borderRadius: {
        card: '0.75rem',
      },
      boxShadow: {
        card: '0 1px 3px rgba(16,24,40,0.08), 0 1px 2px rgba(16,24,40,0.04)',
        'card-hover': '0 4px 10px rgba(16,24,40,0.10)',
      },
    },
  },
  plugins: [],
}
```

### 3.3 RTL base setup
```html
<html lang="ar" dir="rtl">
```
```css
/* resources/css/app.css */
@tailwind base;
@tailwind components;
@tailwind utilities;

body { font-family: 'Cairo', 'Tajawal', sans-serif; }
```
Use a proper Arabic web font (Cairo/Tajawal/IBM Plex Sans Arabic) — load via Google Fonts or
self-host.

### 3.4 Alpine + Axios bootstrap
```js
// resources/js/app.js
import Alpine from 'alpinejs'
import axios from 'axios'

window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
window.axios.defaults.headers.common['X-CSRF-TOKEN'] =
  document.querySelector('meta[name="csrf-token"]').content

window.Alpine = Alpine
Alpine.start()
```

### Checklist
- [ ] Tailwind builds with no purge issues on Blade files
- [ ] Arabic font renders correctly, `dir="rtl"` applied globally
- [ ] Axios sends CSRF token automatically on every request
- [ ] Old Bootstrap CSS/JS `<link>`/`<script>` tags removed from the base layout

---

## 4. Phase 2 — Base Layout Shell

Create `resources/views/layouts/app.blade.php` with 3 regions: **topbar**, **sidebar**, **content**.

```blade
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', config('app.name'))</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-surface-muted text-slate-700 antialiased" x-data="{ sidebarOpen: true }">

  <div class="flex h-screen overflow-hidden">

    {{-- Sidebar (right side in RTL) --}}
    @include('layouts.partials.sidebar')

    <div class="flex-1 flex flex-col min-w-0">
      {{-- Topbar --}}
      @include('layouts.partials.topbar')

      {{-- Page content --}}
      <main class="flex-1 overflow-y-auto p-4 md:p-6">
        @yield('content')
      </main>
    </div>
  </div>

</body>
</html>
```

### Sidebar partial — collapsible nav groups, active state
```blade
{{-- resources/views/layouts/partials/sidebar.blade.php --}}
<aside class="w-64 shrink-0 bg-surface-sidebar border-l border-slate-200 overflow-y-auto"
       x-data="{ open: {} }">
  <nav class="py-4">
    @foreach($navGroups as $group)
      <div class="px-2">
        <button
          @click="open['{{ $group['key'] }}'] = !open['{{ $group['key'] }}']"
          class="w-full flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:bg-slate-50">
          <span class="flex items-center gap-2">
            <i class="{{ $group['icon'] }} w-4 h-4"></i>
            {{ $group['label'] }}
          </span>
          <svg :class="open['{{ $group['key'] }}'] ? 'rotate-180' : ''" class="w-4 h-4 transition-transform" ...></svg>
        </button>

        <ul x-show="open['{{ $group['key'] }}']" x-collapse class="mt-1 space-y-1">
          @foreach($group['items'] as $item)
            <li>
              <a href="{{ $item['url'] }}"
                 class="flex items-center gap-2 px-4 py-2 text-sm rounded-lg
                        {{ request()->routeIs($item['route'])
                            ? 'bg-brand-50 text-brand-600 border-r-2 border-brand-500 font-semibold'
                            : 'text-slate-600 hover:bg-slate-50' }}">
                {{ $item['label'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </nav>
</aside>
```
> Note: `x-collapse` requires the official Alpine "collapse" plugin
> (`npm i @alpinejs/collapse`, then `Alpine.plugin(collapse)`), or replace with a simple
> `x-show="..." x-transition` if you don't want the extra plugin.

### Topbar partial
```blade
<header class="h-14 flex items-center justify-between px-4 md:px-6 shadow-sm"
        style="background-color: var(--brand-color, #0f6db8)">
  <div class="flex items-center gap-3 text-white">
    <span class="font-semibold">{{ auth()->user()->name }}</span>
    <span class="text-xs opacity-80">{{ $branchName ?? '' }}</span>
  </div>
  <div class="flex items-center gap-4 text-white">
    <button class="opacity-90 hover:opacity-100"><i class="icon-bell"></i></button>
    <button class="opacity-90 hover:opacity-100">المساعدة</button>
    <button class="bg-white/20 rounded-full px-3 py-1 text-sm">اختصارك</button>
  </div>
</header>
```

### Checklist
- [ ] Layout works with long sidebar (scrolls independently of content)
- [ ] Active route highlighting works via `request()->routeIs()`
- [ ] Topbar color is a CSS variable/Tailwind class you can theme per module
- [ ] Mobile: sidebar collapses to an off-canvas drawer (`x-show="sidebarOpen"` + backdrop)

---

## 5. Phase 3 — Shared Component Library

Build these as Blade components (`resources/views/components/ui/*.blade.php`), each accepting
props, so every later page just composes them.

### 5.1 `<x-ui.card>` — settings hub tile
```blade
{{-- components/ui/card.blade.php --}}
@props(['icon', 'label', 'href' => '#', 'active' => false])
<a href="{{ $href }}"
   class="flex flex-col items-center justify-center gap-3 rounded-card bg-white p-8
          shadow-card hover:shadow-card-hover transition
          {{ $active ? 'border-2 border-emerald-500' : 'border border-transparent' }}">
  <i class="{{ $icon }} text-2xl text-slate-700"></i>
  <span class="text-sm font-medium text-slate-700 text-center">{{ $label }}</span>
</a>
```

### 5.2 `<x-ui.status-badge>`
```blade
@props(['status' => 'neutral', 'label'])
@php
$dot = ['active'=>'bg-status-active','excluded'=>'bg-status-excluded',
        'neutral'=>'bg-status-neutral','primary'=>'bg-status-primary'][$status] ?? 'bg-status-neutral';
@endphp
<span class="inline-flex items-center gap-1.5 text-sm text-slate-600">
  <span class="w-2 h-2 rounded-full {{ $dot }}"></span>
  {{ $label }}
</span>
```

### 5.3 `<x-ui.button>` (primary / secondary / danger)
```blade
@props(['variant' => 'primary', 'icon' => null])
@php
$variants = [
  'primary'   => 'bg-brand text-white hover:bg-brand-600',
  'secondary' => 'bg-white text-slate-700 border border-slate-300 hover:bg-slate-50',
  'danger'    => 'bg-red-50 text-red-600 hover:bg-red-100',
];
@endphp
<button {{ $attributes->merge(['class' =>
  "inline-flex items-center gap-2 rounded-lg px-4 py-2 text-sm font-medium transition {$variants[$variant]}"]) }}>
  @if($icon)<i class="{{ $icon }}"></i>@endif
  {{ $slot }}
</button>
```

### 5.4 `<x-ui.data-table>` — Alpine-driven, Axios-fed
This is the core reusable table used for both index pages and detail-page statement tables.
It owns: loading state, pagination, sort, and row actions — all via Alpine, fetching data
via Axios from a JSON endpoint you pass in.

```blade
{{-- components/ui/data-table.blade.php --}}
@props(['endpoint', 'columns', 'rowActions' => null])
<div
  x-data="dataTable('{{ $endpoint }}')"
  x-init="fetchData()"
  class="bg-white rounded-card shadow-card overflow-hidden">

  {{-- Filter slot --}}
  <div class="p-4 border-b border-slate-100">
    {{ $filters ?? '' }}
  </div>

  <table class="w-full text-sm">
    <thead class="bg-slate-50 text-slate-500">
      <tr>
        @foreach($columns as $col)
          <th class="px-4 py-3 text-right font-medium cursor-pointer select-none"
              @click="sortBy('{{ $col['key'] }}')">
            {{ $col['label'] }}
            <span x-show="sort.key === '{{ $col['key'] }}'"
                  x-text="sort.dir === 'asc' ? '↑' : '↓'"></span>
          </th>
        @endforeach
        <th class="px-4 py-3"></th>
      </tr>
    </thead>
    <tbody>
      <template x-if="loading">
        <tr><td :colspan="{{ count($columns) + 1 }}" class="text-center py-8 text-slate-400">
          جاري التحميل...
        </td></tr>
      </template>

      <template x-if="!loading && rows.length === 0">
        <tr><td :colspan="{{ count($columns) + 1 }}" class="text-center py-8 text-slate-400">
          لا توجد بيانات
        </td></tr>
      </template>

      <template x-for="row in rows" :key="row.id">
        <tr class="border-b border-slate-100 hover:bg-slate-50">
          @foreach($columns as $col)
            <td class="px-4 py-3" x-text="row['{{ $col['key'] }}']"></td>
          @endforeach
          <td class="px-4 py-3 text-left">
            {{ $rowActions ?? '' }}
          </td>
        </tr>
      </template>
    </tbody>
  </table>

  {{-- Pagination --}}
  <div class="flex items-center justify-between p-4 text-sm text-slate-500">
    <span x-text="`${from}-${to} من ${total}`"></span>
    <div class="flex gap-2">
      <button @click="prevPage()" :disabled="page === 1" class="disabled:opacity-40">‹</button>
      <button @click="nextPage()" :disabled="page === lastPage" class="disabled:opacity-40">›</button>
    </div>
  </div>
</div>
```

```js
// resources/js/components/dataTable.js
export default function dataTable(endpoint) {
  return {
    endpoint,
    rows: [],
    loading: false,
    page: 1,
    lastPage: 1,
    total: 0,
    from: 0,
    to: 0,
    sort: { key: null, dir: 'asc' },
    filters: {},

    fetchData() {
      this.loading = true
      axios.get(this.endpoint, {
        params: { page: this.page, sort: this.sort.key, dir: this.sort.dir, ...this.filters }
      }).then(({ data }) => {
        this.rows = data.data
        this.lastPage = data.last_page
        this.total = data.total
        this.from = data.from
        this.to = data.to
      }).catch(() => {
        this.rows = []
      }).finally(() => { this.loading = false })
    },
    sortBy(key) {
      this.sort.dir = this.sort.key === key && this.sort.dir === 'asc' ? 'desc' : 'asc'
      this.sort.key = key
      this.fetchData()
    },
    nextPage() { if (this.page < this.lastPage) { this.page++; this.fetchData() } },
    prevPage() { if (this.page > 1) { this.page--; this.fetchData() } },
    applyFilters(filters) { this.filters = filters; this.page = 1; this.fetchData() },
  }
}
```
Register it globally:
```js
// resources/js/app.js (add)
import dataTable from './components/dataTable'
window.dataTable = dataTable
```

### 5.5 `<x-ui.modal>` (for "إضافة خزينة" / "إضافة حساب بنكي" forms)
```blade
@props(['id', 'title'])
<div
  x-data="{ open: false }"
  x-on:open-modal-{{ $id }}.window="open = true"
  x-show="open"
  x-cloak
  class="fixed inset-0 z-50 flex items-center justify-center bg-black/40">
  <div @click.outside="open = false"
       class="bg-white rounded-card shadow-card-hover w-full max-w-lg p-6">
    <div class="flex items-center justify-between mb-4">
      <h3 class="font-semibold text-lg">{{ $title }}</h3>
      <button @click="open = false" class="text-slate-400 hover:text-slate-600">✕</button>
    </div>
    {{ $slot }}
  </div>
</div>
```
Trigger from anywhere: `<button @click="$dispatch('open-modal-treasury')">إضافة خزينة</button>`

### 5.6 `<x-ui.tabs>` (detail-page tabs: التفاصيل / معاملات النظام / التحويلات / ...)
```blade
@props(['tabs', 'default' => null])
<div x-data="{ active: '{{ $default ?? array_key_first($tabs) }}' }">
  <div class="flex gap-6 border-b border-slate-200 mb-4">
    @foreach($tabs as $key => $label)
      <button @click="active = '{{ $key }}'"
        :class="active === '{{ $key }}' ? 'border-brand text-brand font-semibold' : 'border-transparent text-slate-500'"
        class="pb-3 border-b-2 text-sm">
        {{ $label }}
      </button>
    @endforeach
  </div>
  @foreach($tabs as $key => $label)
    <div x-show="active === '{{ $key }}'">
      {{ $slot->{$key} ?? '' }}
    </div>
  @endforeach
</div>
```
(In practice, pass tab content as named slots or separate Blade partials included conditionally.)

### Checklist
- [ ] All components accept props and render with no page-specific markup baked in
- [ ] `data-table` component handles loading / empty / error states
- [ ] Modal component works for both "add" and "edit" forms
- [ ] Status badge colors match: green=نشط/مطابق, red=مستبعد/لم تطابق, gray=neutral, blue=رئيسي

---

## 6. Phase 4 — Settings / Hub Grid Pages
(Matches image 1: "إعدادات التصنيع")

```blade
@extends('layouts.app')
@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
  @foreach($settingsCards as $card)
    <x-ui.card :icon="$card['icon']" :label="$card['label']" :href="$card['href']"
               :active="$card['active'] ?? false" />
  @endforeach
</div>
@endsection
```
Feed `$settingsCards` from the controller (plain array/config), so adding a new tile is a
one-line config change.

### Checklist
- [ ] Grid reflows: 1 col mobile → 2 col tablet → 3 col desktop
- [ ] Active/selected tile shows green border exactly like the reference (image 1's
      "الحقول الإضافية لأمر التصنيع" tile)

---

## 7. Phase 5 — Dashboard Page
(Matches image 2)

- KPI row: 3–4 `<x-ui.card>`-style stat tiles (custom variant, not the icon tile — a
  "stat card" variant: label + big number + small trend).
- Two chart cards side by side (`grid grid-cols-1 lg:grid-cols-2 gap-4`).
- Use a lightweight chart lib compatible with Alpine/vanilla JS (Chart.js is fine — it's just a
  JS dependency, not a framework, so it doesn't violate the "Tailwind+Alpine+Axios" UI-framework
  constraint). Wrap chart init in an Alpine component that fetches its data via Axios:

```blade
<div x-data="revenueChart('/api/dashboard/invoices-chart')" x-init="init()">
  <canvas x-ref="canvas"></canvas>
</div>
```
```js
export default function revenueChart(endpoint) {
  return {
    chart: null,
    init() {
      axios.get(endpoint).then(({ data }) => {
        this.chart = new Chart(this.$refs.canvas, {
          type: 'line',
          data: { labels: data.labels, datasets: data.datasets },
          options: { responsive: true, plugins: { legend: { rtl: true } } }
        })
      })
    }
  }
}
```

### Checklist
- [ ] Donut + line chart both fetch data via Axios, not embedded server-side arrays
- [ ] Charts render RTL-correct legends/labels
- [ ] "آخر الفواتير" (latest records) table below uses the shared `<x-ui.data-table>`

---

## 8. Phase 6 — List / Index Pages
(Matches images 1 & 3: e.g. "خزائن وحسابات بنكية")

```blade
@extends('layouts.app')
@section('content')

{{-- Header bar --}}
<div class="flex items-center justify-between mb-4">
  <h1 class="text-lg font-semibold">خزائن وحسابات بنكية</h1>
  <div class="flex gap-2">
    <x-ui.button variant="primary" icon="icon-plus"
      @click="$dispatch('open-modal-treasury')">إضافة خزينة</x-ui.button>
    <x-ui.button variant="secondary" icon="icon-plus"
      @click="$dispatch('open-modal-bank')">إضافة حساب بنكي</x-ui.button>
  </div>
</div>

<x-ui.data-table endpoint="/api/finance/accounts" :columns="[
    ['key'=>'name','label'=>'الاسم'],
    ['key'=>'description','label'=>'الوصف'],
    ['key'=>'balance','label'=>'المبلغ'],
    ['key'=>'status_label','label'=>'الحالة'],
  ]">
  <x-slot name="filters">
    {{-- search/select inputs, "بحث" + "اعاده تعين" buttons --}}
  </x-slot>
</x-ui.data-table>

<x-ui.modal id="treasury" title="إضافة خزينة">
  {{-- form, posts via axios.post('/api/finance/treasuries', ...) --}}
</x-ui.modal>
<x-ui.modal id="bank" title="إضافة حساب بنكي">
  {{-- form --}}
</x-ui.modal>

@endsection
```

### Checklist
- [ ] Header action buttons open modals (no full page navigation for "add" flows)
- [ ] Table status column uses `<x-ui.status-badge>` with correct color per value
- [ ] After successful Axios POST in modal form, close modal + refresh table
      (`this.$dispatch('table-refresh')` pattern or call the table's Alpine
      component method directly via `$refs`)

---

## 9. Phase 7 — Detail / Record Pages
(Matches image 4: bank account detail + statement table)

```blade
@extends('layouts.app')
@section('content')

{{-- Record header --}}
<div class="bg-white rounded-card shadow-card p-4 mb-4 flex items-center justify-between">
  <div>
    <div class="text-2xl font-bold">{{ number_format($account->balance) }} {{ $account->currency }}</div>
    <div class="text-sm text-slate-500">{{ $account->name }} — {{ $account->reference }}</div>
  </div>
  <div class="flex items-center gap-2">
    <x-ui.status-badge status="active" label="نشط" />
    <x-ui.button variant="secondary" icon="icon-edit">تعديل</x-ui.button>
    <x-ui.button variant="secondary" icon="icon-swap">التحويل</x-ui.button>
    <x-ui.button variant="secondary" icon="icon-pause">تعطيل</x-ui.button>
    <x-ui.button variant="danger" icon="icon-trash">حذف</x-ui.button>
  </div>
</div>

<x-ui.tabs :tabs="[
  'statement' => 'كشف حساب البنك',
  'transfers' => 'التحويلات',
  'activity'  => 'سجل النشاطات',
  'system'    => 'معاملات النظام',
  'details'   => 'التفاصيل',
]" default="statement">
  {{-- statement tab content --}}
  <x-ui.data-table endpoint="/api/finance/accounts/{{ $account->id }}/statement" :columns="[
      ['key'=>'date','label'=>'التاريخ'],
      ['key'=>'description','label'=>'الوصف'],
      ['key'=>'deposit','label'=>'إيداع'],
      ['key'=>'withdraw','label'=>'سحب'],
      ['key'=>'status_label','label'=>'الحالة'],
    ]">
    <x-slot name="rowActions">
      <x-ui.button variant="primary" class="text-xs">مطابقة</x-ui.button>
    </x-slot>
  </x-ui.data-table>
</x-ui.tabs>

@endsection
```

### Checklist
- [ ] Header balance/status/action toolbar matches reference layout & spacing
- [ ] Tabs lazily fetch their own table data only when first activated (avoid firing 5
      Axios calls on page load) — do this by guarding `fetchData()` with
      `x-init="if (active === 'statement') fetchData()"` per tab, or trigger fetch on tab click
- [ ] "مطابقة" row action posts to a reconciliation endpoint and updates just that row's
      status via Alpine state (no full table reload needed)

---

## 10. Phase 8 — Axios Data Layer / API Contract

Define one consistent JSON envelope for all list endpoints so `dataTable()` works everywhere
unmodified:

```json
{
  "data": [ { "id": 1, "name": "...", "...": "..." } ],
  "current_page": 1,
  "last_page": 6,
  "total": 58,
  "from": 1,
  "to": 10
}
```
This matches Laravel's default paginator JSON — if you return `->paginate(10)` from a
controller and `response()->json($paginator)`, no transformation is needed.

**Conventions**
- All list/table endpoints: `GET /api/{module}/{resource}?page=&sort=&dir=&filter[key]=value`
- All create/update actions from modals: `POST/PUT /api/{module}/{resource}`, validate server
  side, return `{ "success": true, "data": {...} }` or `{ "success": false, "errors": {...} }`
  (standard Laravel validation error shape works fine with an Alpine error-display helper).
- Status-changing row actions (مطابقة/تعطيل/etc.): `PATCH /api/{module}/{resource}/{id}/{action}`.
- Wrap every Axios call with a `.catch()` that sets a `this.error` string Alpine can show inline
  — never let a failed request fail silently.

### Checklist
- [ ] Every existing Bootstrap-form-post endpoint that now needs to be called via Axios has
      been (a) confirmed to already return usable JSON, or (b) given a small controller
      adjustment to return JSON when `request()->expectsJson()` / `wantsJson()`
- [ ] CSRF + auth guards still function for Axios (session cookie + `X-CSRF-TOKEN` header)
- [ ] 419/401 responses trigger a friendly Alpine toast + redirect to login, not a silent failure

---

## 11. Phase 9 — QA Pass

- [ ] Every page verified in RTL (padding/margin direction, icon mirroring, text alignment)
- [ ] Mobile breakpoint: sidebar becomes a drawer, tables scroll horizontally
      (`overflow-x-auto` wrapper) instead of squashing
- [ ] Keyboard accessibility: modals trap focus and close on `Escape`
      (`@keydown.escape.window="open = false"`)
- [ ] Color contrast of status dots/text meets WCAG AA
- [ ] Loading skeletons/spinners show on every Axios call, not just tables
- [ ] Empty states use consistent copy/style ("لا توجد بيانات")

---

## 12. Phase 10 — Cleanup

- [ ] Remove Bootstrap CSS/JS bundle references from `app.blade.php` and `vite.config.js`
- [ ] Remove jQuery plugin includes no longer used (datepickers, modals, etc.) — replace with
      Alpine-native or minimal vanilla equivalents
- [ ] Delete now-unused old Blade partials once every page referencing them is migrated
- [ ] Run `npm run build` and confirm final CSS bundle size drops after Bootstrap removal
- [ ] Visual regression pass against the 4 reference screenshots

---

## 13. Suggested File/Folder Structure After Migration

```
resources/
  css/
    app.css
  js/
    app.js
    components/
      dataTable.js
      revenueChart.js
  views/
    layouts/
      app.blade.php
      partials/
        sidebar.blade.php
        topbar.blade.php
    components/
      ui/
        card.blade.php
        button.blade.php
        status-badge.blade.php
        data-table.blade.php
        modal.blade.php
        tabs.blade.php
    finance/
      accounts/
        index.blade.php
        show.blade.php
    manufacturing/
      settings/
        index.blade.php
    dashboard/
      index.blade.php
```

---

## 14. Definition of Done

The migration is complete when:
1. No Bootstrap/jQuery assets remain in the build.
2. Every page listed in Phase 2–7 is rebuilt using only the `<x-ui.*>` component library.
3. All data on list/detail/dashboard pages is fetched via Axios against JSON endpoints — no
   full-page reloads for filtering, sorting, pagination, or status changes.
4. The 4 reference screens (settings hub, dashboard, treasury list, account statement) are
   visually and functionally equivalent to the screenshots, in RTL Arabic.
