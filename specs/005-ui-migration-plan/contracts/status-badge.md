# Contract: StatusBadge

**Component**: `x-ui.status-badge` (Blade-only)

**File**: `resources/views/components/ui/status-badge.blade.php`

## Interface

**Props**:
- `status: 'active'|'excluded'|'neutral'|'primary'` (default `'neutral'`)
- `label: string` — Arabic text

**States**:

| Status | Dot Color | Usage |
|--------|-----------|-------|
| active | `bg-status-active` (green #22c55e) | نشط, مطابق |
| excluded | `bg-status-excluded` (red #ef4444) | مستبعد, لم تطابق |
| neutral | `bg-status-neutral` (gray #94a3b8) | Default/inactive |
| primary | `bg-status-primary` (blue #2563eb) | رئيسي |

**Visual**: Dot (w-2 h-2 rounded-full) + label text with gap. No pill/background.
