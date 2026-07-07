# Data Table API Contract

## Standard Format (Laravel `->paginate()`)

### Request Parameters

Sent as query params via `axios.get()`:

| Param | Type | Required | Description |
|-------|------|----------|-------------|
| `page` | int | No (default 1) | Current page number |
| `sort_by` | string | No (default 'id') | Column key to sort by |
| `sort_order` | string | No (default 'desc') | Sort direction: `'asc'` or `'desc'` |
| `per_page` | int | No (default 10) | Rows per page |
| `search` | string | No | Global search term |
| `{filter_key}` | string | No | Per-filter value (one param per filter) |

### Response Shape

```json
{
    "data": [
        { "id": 1, "name": "..." },
        { "id": 2, "name": "..." }
    ],
    "current_page": 1,
    "last_page": 5,
    "per_page": 10,
    "total": 48,
    "from": 1,
    "to": 10
}
```

### Controller Usage

```php
// Controller — returns standard paginated JSON automatically
public function index(Request $request)
{
    $query = Model::query();

    if ($request->filled('search')) {
        $query->where('name', 'like', '%'.$request->search.'%');
    }

    // Apply filters
    if ($request->filled('grade_id')) {
        $query->where('grade_id', $request->grade_id);
    }

    // Sort
    $sortBy = $request->get('sort_by', 'id');
    $sortOrder = $request->get('sort_order', 'desc');
    $query->orderBy($sortBy, $sortOrder);

    return $query->paginate($request->get('per_page', 10));
}
```

## Legacy Format (Backward Compat Adapter)

### Response Shape

```json
{
    "items": [
        { "id": 1, "name": "..." },
        { "id": 2, "name": "..." }
    ],
    "pagination": {
        "current_page": 1,
        "last_page": 5
    }
}
```

### Detection Logic

```js
if (response.data.hasOwnProperty('items')) {
    // Legacy format
    console.warn('Deprecation: smart-table expects Laravel-standard paginated JSON. ' +
        'See contract at specs/002-smart-table-enhancements/contracts/data-table-api.md');
    items = response.data.items;
    pagination = {
        current: response.data.pagination.current_page,
        last: response.data.pagination.last_page,
        total: 0,
        from: 0,
        to: 0
    };
} else {
    // Standard format (Laravel paginate)
    items = response.data.data;
    pagination = {
        current: response.data.current_page,
        last: response.data.last_page,
        total: response.data.total,
        from: response.data.from,
        to: response.data.to
    };
}
```

## Export Endpoint Contract

### Request

GET to `exportUrl` with the same filter/search params as the list endpoint.

### Response

CSV file download with `Content-Type: text/csv` and `Content-Disposition: attachment`.

The export should include ALL matching rows (not just current page), respecting current filters.
