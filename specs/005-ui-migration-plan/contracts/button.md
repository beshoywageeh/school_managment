# Contract: Button

**Component**: `x-ui.button` (Blade-only)

**File**: `resources/views/components/ui/button.blade.php`

## Interface

**Props**:
- `variant: 'primary'|'secondary'|'danger'` (default `'primary'`)
- `icon: ?string` — optional icon CSS class / Heroicon name
- `size: 'sm'|'md'|'lg'` (default `'md'`)
- `type: string` (default `'button'`)
- `disabled: bool` (default false)
- All standard button attributes merged via `$attributes`

**Variants**:

| Variant | Classes |
|---------|---------|
| primary | `bg-primary text-white hover:bg-primary-dark focus:ring-primary/50` |
| secondary | `bg-white text-gray-700 border border-gray-300 hover:bg-gray-50 focus:ring-gray-500/50` |
| danger | `bg-red-600 text-white hover:bg-red-700 focus:ring-red-500/50` |

**Sizes**:

| Size | Padding + Font |
|------|----------------|
| sm | `px-3 py-1.5 text-xs` |
| md | `px-4 py-2 text-sm` (default) |
| lg | `px-6 py-3 text-base` |

**Slots**: Default — button label text

**States**: Default / Hover / Focus (`focus:ring-2 focus:ring-offset-2`) / Disabled (`opacity-50 cursor-not-allowed`, `aria-disabled="true"`)

**Accessibility**:
- Native `<button>` element (never `<div>`)
- `aria-disabled="true"` when disabled (not just `disabled` attribute)
- `aria-label` from `$attributes` or slot content fallback
- Icon-only buttons: MUST provide `aria-label`
- Focus: visible `focus:outline-none focus:ring-2 focus:ring-offset-2` on all variants
- Minimum touch target: 44×44px on mobile
