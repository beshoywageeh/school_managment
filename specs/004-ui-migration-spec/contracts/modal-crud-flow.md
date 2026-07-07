# Modal CRUD Flow Contract

**Version**: 1.0  
**Pattern**: Axios POST/PUT → inline validation → table refresh

## Create Flow

1. User clicks "إضافة" button
2. `dispatchEvent(new CustomEvent('open-modal', { detail: { name: 'create-form' } }))` triggers modal open
3. Modal renders form with empty fields
4. User fills form, clicks "حفظ"
5. Axios POST to `/api/{resource}` with form data
6. On success (201):
   - Axios response interceptor returns data
   - Modal closes: `dispatchEvent(new CustomEvent('close-modal'))`
   - Toast shows "تم الحفظ بنجاح" (saved successfully)
   - Data table `refresh()` called
7. On validation error (422):
   - Form fields show inline error messages below each input
   - Modal stays open
   - No toast shown

## Update Flow

1. User clicks "تعديل" action on a table row
2. `open-modal` dispatched with record data pre-populated
3. Form fields set to current values
4. User edits, clicks "حفظ"
5. Axios PUT to `/api/{resource}/{id}` with form data
6. On success (200): same as create success
7. On 422: same as create validation errors

## Delete Flow (future consideration)

1. User clicks "حذف" action on a table row
2. Confirmation dialog shown (can use modal with confirm/cancel)
3. On confirm: Axios DELETE to `/api/{resource}/{id}`
4. On success (200): table refreshes, toast "تم الحذف بنجاح"

## Form Validation Display

```blade
{{-- Each form field follows this pattern --}}
<div class="mb-4">
    <label>{{ $label }}</label>
    <input type="text"
           x-model="form.{{ $field }}"
           :class="{ 'border-red-500': errors.{{ $field }} }">
    <template x-if="errors.{{ $field }}">
        <p class="text-red-500 text-sm" x-text="errors.{{ $field }}[0]"></p>
    </template>
</div>
```

Form errors state is Alpine-managed:

```js
{
  form: { name: '', email: '' },
  errors: {},           // Populated on 422 response
  saving: false,        // Submit loading state
  async submit(url, method = 'post') { ... }
}
```
