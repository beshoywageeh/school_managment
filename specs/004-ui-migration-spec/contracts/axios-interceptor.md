# Axios HTTP Client Contract

**Version**: 1.0  
**File**: `resources/js/app.js`

## Instance Configuration

```js
const http = axios.create({
    baseURL: '/api',
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'Accept': 'application/json',
    },
});
```

## Interceptors

### Request Interceptor

- Read CSRF token from `meta[name="csrf-token"]` content attribute
- Attach as `X-CSRF-TOKEN` header on every request
- If token missing, log warning to console

### Response Interceptor (success)

- Return `response.data` for 2xx responses (unwraps Axios wrapper)
- Table endpoints: data table component handles the full response envelope

### Response Interceptor (error)

| Status | Action |
|--------|--------|
| 401 | Show toast "انتهت الجلسة" → redirect `/login` after 2s |
| 419 | Show toast "انتهت الجلسة" → redirect `/login` after 2s |
| 422 | Reject with `{errors}` object (caller renders inline field errors) |
| 500+ | Show toast "حدث خطأ في النظام" |
| Network error | Show toast "حدث خطأ في الاتصال" |

**Toast configuration**: 5-second auto-dismiss, top-center position, fade-out animation.

## Usage in Data Table

```js
// data-table component fetches:
const response = await http.get(endpoint, { params: { page, per_page, sort, direction, filter } });
this.rows = response.data;
this.currentPage = response.current_page;
this.lastPage = response.last_page;
// ...
```
