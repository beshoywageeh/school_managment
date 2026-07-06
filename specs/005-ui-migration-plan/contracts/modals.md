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
- `open-modal-{name}` — `$event.detail.name` matches `this.name`
- `close-modal` — if `$event.detail.name` matches or no name specified

**Events emitted**:
- `modal-closed` — after close for parent cleanup

**Behavior**:
- Close on outside click (`@click.outside` on panel)
- Close on Escape (`@keydown.escape.window="closeModal"`)
- Focus trap: `x-trap.noscroll="open"` (Alpine `noscroll` modifier)
- Close button (✕) in header with `aria-label="إغلاق"`
- Backdrop: `bg-black/50` overlay, click to close
- Restore focus to trigger element on close
- Body scroll lock when open

**States**: Open / Closed / Loading (when form submitting)

**Accessibility**:
- Dialog: `<div role="dialog" aria-modal="true" :aria-labelledby="'modal-title-' + name">`
- Header: `<h3 :id="'modal-title-' + name">` — referenced by `aria-labelledby`
- Close button: `aria-label="إغلاق"`
- Focus trap on open (Alpine `x-trap`)
- `aria-hidden="true"` on all sibling elements when modal open (via Alpine)
- Escape key closes modal
