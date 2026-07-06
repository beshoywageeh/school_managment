# Contract: Button

**Component**: `x-ui.button` (Blade-only)

**File**: `resources/views/components/ui/button.blade.php`

## Interface

**Props**:
- `variant: 'primary'|'secondary'|'danger'` (default `'primary'`)
- `icon: ?string` — optional icon CSS class
- `size: 'sm'|'md'|'lg'` (default `'md'`)
- All standard button attributes merged via `$attributes`

**Variants**:

| Variant | Classes |
|---------|---------|
| primary | `bg-brand text-white hover:bg-brand-600` |
| secondary | `bg-white text-slate-700 border border-slate-300 hover:bg-slate-50` |
| danger | `bg-red-50 text-red-600 hover:bg-red-100` |

**Sizes**:

| Size | Padding + Font |
|------|----------------|
| sm | `px-3 py-1.5 text-xs` |
| md | `px-4 py-2 text-sm` |
| lg | `px-6 py-3 text-base` |

**Slots**: Default — button label text

**States**: Default / Hover / Disabled (`opacity-50 cursor-not-allowed` via attribute)
