# Implementation Plan: Fix smart-table.blade.php Component

**Feature Branch**: `003-fix-smart-table`
**Created**: 2026-07-04
**Source Spec**: `spec.md`

## Prerequisites

- Working directory: `/data/projects/laravel_projects/school_managment/app`
- Target file: `resources/views/components/smart-table.blade.php`
- Lang files: `lang/ar/general.php` and `lang/en/general.php`
- No backend changes needed

## Step-by-Step Instructions

### Step 1 — Read Current Files

Read these 3 files in parallel:

1. `resources/views/components/smart-table.blade.php` (the component to fix)
2. `lang/en/general.php` (add `all_options` key)
3. `lang/ar/general.php` (add `all_options` key)

### Step 2 — Apply All 8 Fixes to `smart-table.blade.php`

Make edits in this order using the exact old/new strings shown below.

#### Fix 2 (do first — it restructures the props/initialization block)

**Old** (lines 1-5):
```
@props([
    'columns' => [],
    'initialItems' => [],
    'apiUrl' => '',
])
```

**New**:
```
@props([
    'columns' => [],
    'initialItems' => null,
    'apiUrl' => '',
])

@php
    use Illuminate\Pagination\LengthAwarePaginator;
    $paginator = $initialItems instanceof LengthAwarePaginator
        ? $initialItems
        : new LengthAwarePaginator([], 0, 10);
@endphp
```

Then replace every `$initialItems` in the x-data block with `$paginator`.

**Old** (line 9):
```
items: {{ json_encode($initialItems->items()) }},
```

**New**:
```
items: {{ json_encode($paginator->items()) }},
```

**Old** (lines 20-23):
```
    pagination: {
        current: {{ $initialItems->currentPage() }},
        last: {{ $initialItems->lastPage() }}
    },
```

**New**:
```
    pagination: {
        current: {{ $paginator->currentPage() }},
        last: {{ $paginator->lastPage() }}
    },
```

#### Fix 7 — Safe `getNestedValue` (add null guard)

**Old** (lines 34-36):
```
    getNestedValue(obj, path) {
        return path.split('.').reduce((acc, part) => acc && acc[part], obj);
    },
```

**New**:
```
    getNestedValue(obj, path) {
        return path.split('.').reduce((acc, part) => {
            if (acc === null || acc === undefined) return null;
            return acc[part];
        }, obj) ?? '-';
    },
```

#### Add Alpine reactive properties (`loading`, `error`)

Add these after the `sort` object (after the closing `},` on the sort block).

**Old** (after line 18 `order: 'desc'`):
```
    pagination: {
```

**New** (insert between `sort` and `pagination`):
```
    loading: false,
    error: null,

    pagination: {
```

#### Fix 4/6 — Update `fetchData` with loading/error handling

**Old** (lines 49-70):
```
    fetchData(page = 1) {
        this.pagination.current = page;

        // تجهيز الـ Parameters الأساسية (الصفحة والترتيب)
        let params = {
            page: page,
            sort_by: this.sort.by,
            sort_order: this.sort.order
        };

        // دمج الفلاتر النشطة فقط في الطلب
        Object.keys(this.filters).forEach(key => {
            params[key] = this.filters[key];
        });

        axios.get('{{ $apiUrl }}', { params: params })
            .then(response => {
                this.items = response.data.items;
                this.pagination.last = response.data.pagination.last_page;
            })
            .catch(error => console.error('Error fetching data:', error));
    }
```

**New**:
```
    fetchData(page = 1) {
        this.pagination.current = page;
        this.loading = true;
        this.error = null;

        let params = {
            page: page,
            sort_by: this.sort.by,
            sort_order: this.sort.order
        };

        Object.keys(this.filters).forEach(key => {
            params[key] = this.filters[key];
        });

        axios.get('{{ $apiUrl }}', { params: params })
            .then(response => {
                this.items = response.data.items;
                this.pagination.last = response.data.pagination.last_page;
            })
            .catch(error => {
                this.error = '{{ trans("general.error_fetching") }}';
                console.error('Error fetching data:', error);
            })
            .finally(() => {
                this.loading = false;
            });
    }
```

NOTE: `general.error_fetching` must be added to both `lang/ar/general.php` and `lang/en/general.php` (see spec FR-006b for exact values).

#### Fix 3 — Replace hardcoded Arabic strings with translations

**Old** (line 81):
```
placeholder="ابحث هنا..."
```

**New**:
```
placeholder="{{ trans('general.search') }}"
```

**Old** (line 88):
```
<option value="">كل الخيارات</option>
```

**New**:
```
<option value="">{{ trans('general.all_options') }}</option>
```

#### Fix 8 — Add debounce to select filter

**Old** (line 86):
```
<select x-model="filters['{{ $col['filter_key'] }}']" @change="fetchData(1)"
```

**New**:
```
<select x-model="filters['{{ $col['filter_key'] }}']" @change.debounce.300ms="fetchData(1)"
```

#### Fix 1 — Replace fragile `${$col['key']}` actions slot

**Old** (lines 130-135):
```
                                    <template x-if="col.key === 'actions'">
                                        <div class="flex items-center gap-2">
                                            {{-- هنا سيتم حقن الأزرار ديناميكياً من الصفحة الخارجية --}}
                                            {!! ${$col['key']} ?? '' !!}
                                        </div>
                                    </template>
```

**New**:
```
                                    <template x-if="col.key === 'actions'">
                                        <td class="px-6 py-4 text-gray-900">
                                            <div class="flex items-center gap-2">
                                                {{ $actions ?? '' }}
                                            </div>
                                        </td>
                                    </template>
```

#### Add loading state row in `<tbody>`

Insert after `<tbody class="divide-y divide-gray-200 bg-white">` (line 124).

**New** (insert after line 124):
```
                    <template x-if="loading">
                        <tr>
                            <td :colspan="columns.length" class="text-center py-8 text-gray-500">
                                {{ trans('general.loading') }}
                            </td>
                        </tr>
                    </template>
```

#### Add error state row in `<tbody>`

Insert after the loading row (just added above).

**New**:
```
                    <template x-if="error">
                        <tr>
                            <td :colspan="columns.length" class="text-center py-8 text-red-500" x-text="error"></td>
                        </tr>
                    </template>
```

#### Add empty state row in `<tbody>`

Insert after the `x-for` template for items and before `</tbody>`.

Insert this right before `</tbody>` (the closing tag of the table body):

**New**:
```
                    <template x-if="!loading && items.length === 0">
                        <tr>
                            <td :colspan="columns.length" class="text-center py-12 text-gray-400">
                                {{ trans('general.no_data') }}
                            </td>
                        </tr>
                    </template>
```

#### Fix — Disable pagination buttons during loading

**Old** (line 151):
```
<button @click="fetchData(pagination.current - 1)" :disabled="pagination.current === 1"
```

**New**:
```
<button @click="fetchData(pagination.current - 1)" :disabled="pagination.current === 1 || loading"
```

**Old** (line 162):
```
<button @click="fetchData(pagination.current + 1)" :disabled="pagination.current === pagination.last"
```

**New**:
```
<button @click="fetchData(pagination.current + 1)" :disabled="pagination.current === pagination.last || loading"
```

### Step 3 — Add `all_options` Translation Key

**Add to `lang/ar/general.php`** (insert in alphabetical order, e.g., after `all`):
```
    'all_options' => 'كل الخيارات',
```

**Add to `lang/en/general.php`** (insert in alphabetical order, e.g., after `all`):
```
    'all_options' => 'All Options',
```

### Step 4 — Run Pint to Fix Code Style

```bash
vendor/bin/pint --format agent
```

### Step 5 — Visual Verification

Open the app in a browser and verify:

1. `students.index` — loads all rows with working action dropdowns
2. Click actions on row 3 — verify link URL contains the correct student ID
3. `fee_invoices.index` — loads without errors
4. Type a search filter that matches nothing — see "no data" message
5. Open browser DevTools → Network → throttle to "Slow 3G" → toggle filter — loading indicator appears
6. DevTools → Network → check "Offline" → trigger filter — red error message appears
7. Pagination buttons are disabled during loading

### Step 6 — Verify Final File

Read the modified `smart-table.blade.php` and confirm:
- No remaining `${$col['key']}` variable variable
- No remaining hardcoded Arabic strings (`ابحث هنا`, `كل الخيارات`)
- Alpine has `loading`, `error` properties
- `fetchData` sets/clears `loading` and `error`
- Loading, error, and empty-state rows exist in `<tbody>`
- `getNestedValue` has null guard
- Select filter has `.debounce.300ms`
- Pagination buttons have `|| loading`

## Rollback Instructions

If verification fails, restore the original file:
```bash
git checkout -- resources/views/components/smart-table.blade.php
git checkout -- lang/ar/general.php
git checkout -- lang/en/general.php
```
