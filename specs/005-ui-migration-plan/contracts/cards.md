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

**Accessibility**:
- Link card: `<a role="link" aria-label="{$label}">` with `tabindex="0"`
- Icon container: `aria-hidden="true"` (decorative)
- Active card: `aria-current="page"` when linking to current page

## KpiCard (Livewire Component)

**Class**: `App\Livewire\Components\Dashboard\KpiCard.php`

**Props**:
- `label: string` — metric name
- `value: float|int`
- `trend: ?string` — optional trend text/icon
- `color: string` — accent color class

**States**: Static display (data passed as props, no async fetch); roles determine which KPIs render

**Role awareness**: Dashboard fetches KPI data per role — Admin sees all 4 stat cards,
Accountant sees 4 financial cards, Teacher sees 3 teaching cards
(per DashboardRedesignTest.php expectations).

**Accessibility**:
- KPI card: `<article>` with `aria-label="{$label}: {$value}"`
- Trend: `aria-label="اتجاه {$trendDirection} بنسبة {$trend}"`
- Value: `aria-live="polite"` for live-updating values
