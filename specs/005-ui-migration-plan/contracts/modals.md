# Contract: Modal

**Component**: `x-ui.modal` (Blade component with Alpine)

**File**: `resources/views/components/ui/modal.blade.php`

## Interface

**Props**:
- `id: string` — unique identifier for event dispatching
- `title: string` — modal header text
- `size: 'sm'|'md'|'lg'` (default `'md'`)

**Slots**:
- Default: form content

**State** (Alpine):
- `open: bool` — controlled by `x-on:open-modal-{id}.window`

**Events listened**:
- `open-modal-{id}` — sets open = true

**Events emitted**:
- `modal-closed-{id}` — after close for parent cleanup

**Behavior**:
- Close on outside click (`@click.outside`)
- Close on Escape (`@keydown.escape.window`)
- Close button (✕) in header
- Backdrop: `bg-black/40` overlay

**States**: Open / Closed / Loading (when form submitting)
