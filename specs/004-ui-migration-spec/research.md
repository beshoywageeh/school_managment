# Research: UI Migration — Daftra-Style ERP Redesign

**Phase 0 Research Output** — Resolves unknowns from Technical Context.

## 1. Testing Strategy for Alpine.js Components in PHPUnit

**Decision**: Use Laravel feature tests (HTTP assertions on DOM output) for component rendering verification. Use Laravel Dusk only if deep Alpine.js interaction testing is needed.

**Rationale**:
- Laravel feature tests can render Blade components and assert on the HTML output using `$this->get()` + `->assertSee()` / `->assertSeeInOrder()`
- Alpine.js `x-data` attributes, `x-show` states, and `wire:key` values are present in the initial HTML and can be asserted
- JavaScript behavior (click handlers, async data fetching) is not testable in PHPUnit — Dusk would be needed for that
- The constitution specifies PHPUnit for testing; Dusk adds a Chrome dependency that violates the lightweight mandate
- Testing strategy: feature tests verify correct component structure, props render correctly, Alpine directives present; manual/browser testing for interactivity

**Alternatives Considered**:
- Laravel Dusk: Full browser testing but adds significant CI complexity
- Jest/Vitest: Unit testing Alpine.js in isolation but requires extracting JS from Blade context
- No testing: Rejected — constitution requires automated testing

## 2. Livewire 4 + Blade/Axios Coexistence Pattern

**Decision**: Non-Livewire pages use standard Blade layout inheritance from `layouts/app.blade.php`. Livewire pages use the `#[Layout]` attribute pointing to the same layout file. Alpine.js and Axios operate independently of Livewire's bundled Alpine instance.

**Rationale**:
- Livewire 4 bundles its own Alpine.js — do NOT add a separate Alpine CDN or npm instance (causes "Multiple instances of Alpine" error)
- For non-Livewire pages: Alpine.js is loaded via Vite-bundled `resources/js/app.js`, which imports Alpine, registers components, and starts it
- Livewire pages use Livewire's built-in Alpine — Livewire components that need custom Alpine interactivity use `@script` / `@endscript` directives or define data in `resources/js/`
- Both page types share the same `layouts/app.blade.php` which has `@livewireStyles`, `@livewireScripts`, and `@vite(['resources/js/app.js'])` — Livewire's Alpine skips if not on a Livewire page; Vite's Alpine activates only on non-Livewire pages
- Axios is loaded via `resources/js/app.js` in both contexts for API calls

**Key constraint**: Livewire pages that use Alpine must use `$wire` not `Alpine.$` to access Livewire state. Non-Livewire pages must NOT have `wire:` attributes.

**Alternatives Considered**:
- Separate layouts for Livewire vs non-Livewire: More maintenance overhead, violates DRY
- Convert all pages to Livewire: Massive scope increase, contradicts spec's Alpine/Axios direction

## 3. Vite Configuration for Blade Component Namespace

**Decision**: No special Vite configuration needed. Blade components under `resources/views/components/ui/` are auto-discovered by Laravel's component namespace convention.

**Rationale**:
- Laravel automatically discovers components in `resources/views/components/` as `x-{subdirectory}.{name}`
- A file at `resources/views/components/ui/card.blade.php` is automatically rendered as `<x-ui.card>`
- Vite is only responsible for bundling `resources/js/app.js` and `resources/css/app.css`
- The `tailwindcss` PostCSS plugin (configured via `postcss.config.js` or CSS `@import`) processes Tailwind classes in Blade files
- No additional Vite entry points, aliases, or plugins are needed for Blade components

**Alternatives Considered**:
- Class-based Blade components with `php artisan make:component`: Adds PHP class boilerplate, unnecessary for pure view components
- Separate npm package for UI components: Premature abstraction for a single-application codebase

## 4. Axios Global Configuration & Alert/Toast System

**Decision**: Create a single Axios instance in `resources/js/app.js` with interceptors for CSRF, error handling, and 401 redirect. Use a lightweight Alpine-based toast component for system notifications.

**Rationale**:
- Axios instance configured with `baseURL` from meta tag, `X-Requested-With: XMLHttpRequest` header
- Request interceptor reads CSRF token from `meta[name="csrf-token"]`
- Response interceptor handles:
  - 401/419: redirect to `/login` + toast "انتهت الجلسة" (session expired)
  - 422: return error data for inline field display (no toast)
  - 5xx: toast with generic error message
  - Network error: toast with "حدث خطأ في الاتصال" (connection error)
- Toast component: Alpine-based, renders in top-center, 5s auto-dismiss, fade-out animation
- Store toast state in a simple Alpine store: `Alpine.store('toast', { show: false, message: '', type: 'error' })`

**Alternatives Considered**:
- Livewire flash messages: Only works in Livewire context
- Laravel session flashes: Requires page reload, incompatible with Axios SPA-like pattern
- Third-party toast library (e.g., izitoast): Added JS dependency, unnecessary when Alpine can handle it

## 5. Data Table Component Architecture

**Decision**: Single reusable Alpine component `dataTable()` managing server-paginated, sortable, filterable table state. Blade wrapper component `x-ui.data-table` renders the shell and passes endpoint/column config.

**Rationale**:
- Alpine component `dataTable()` owns state: `rows`, `loading`, `currentPage`, `lastPage`, `total`, `from`, `to`, `sortField`, `sortDirection`, `filters`
- `init()` fetches first page on mount
- Methods: `fetchPage(url)`, `sort(field)`, `applyFilters()`, `refresh()`
- Blade component accepts: `endpoint` (URL), `columns` (array of `{key, label, sortable}`), optional `filters` slot, optional `actions` slot
- Server response format (FR-010): `{data[], current_page, last_page, total, from, to}`
- No virtual scrolling — standard pagination with prev/next buttons and "from-to of total" display

**Alternatives Considered**:
- Server-rendered table with Livewire: Rejected — spec explicitly chooses Alpine/Axios pattern
- Client-side sorting/filtering of all data: Infeasible for 10K rows
- Third-party table library (AG Grid, Tabulator): Added JS weight, less control over styling
