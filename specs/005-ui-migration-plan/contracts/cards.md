# Contract: Card Components

## x-ui.card (Blade Component)

**File**: `resources/views/components/ui/card.blade.php`

**Props**:
- `icon: string` — CSS class for icon
- `label: string` — card title text (Arabic)
- `href: string` (default `#`)
- `active: bool` (default false) — green border + tint when true

**Slots**: None

**States**: Default / Active (green border) / Hover (elevated shadow)

## KpiCard (Livewire Component)

**Class**: `App\Http\Livewire\Components\Dashboard\KpiCard.php`

**Props**:
- `label: string` — metric name
- `value: float|int`
- `trend: ?string` — optional trend text/icon
- `color: string` — accent color class

**States**: Static display (data passed as props, no async fetch)
