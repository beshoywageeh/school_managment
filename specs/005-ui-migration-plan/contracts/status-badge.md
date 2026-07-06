# Contract: StatusBadge

**Component**: `x-ui.status-badge` (Blade-only)

**File**: `resources/views/components/ui/status-badge.blade.php`

## Interface

**Props**:
- `status: 'active'|'inactive'|'excluded'|'neutral'|'primary'` (default `'active'`)
- `label: string` — Arabic text

**States**:

| Status | Dot Color | Background + Text | Usage |
|--------|-----------|-------------------|-------|
| active | `bg-green-500` | `bg-green-50 text-green-700` | نشط, مطابق |
| inactive | `bg-gray-400` | `bg-gray-50 text-gray-600` | غير نشط |
| excluded | `bg-red-500` | `bg-red-50 text-red-700` | مستبعد, لم تطابق |
| neutral | `bg-gray-400` | `bg-gray-50 text-gray-600` | Default |
| primary | `bg-blue-500` | `bg-blue-50 text-blue-700` | رئيسي |

**Visual**: Pill with dot (w-2 h-2 rounded-full) + label text, `rounded-full` container.

**Accessibility**:
- Container: `<span role="status" aria-label="{$label}">`
- Dot: `<span aria-hidden="true">` (decorative only)
- Color not sole indicator — label text provides meaning
