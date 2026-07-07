# Data Table JSON API Contract

**Version**: 1.0  
**Format**: Laravel-standard paginated JSON response

## Request

```http
GET /api/{resource}?page=1&per_page=15&sort=name&direction=asc&filter[status]=active
```

### Query Parameters

| Parameter | Type | Default | Description |
|-----------|------|---------|-------------|
| `page` | int | `1` | Page number (1-indexed) |
| `per_page` | int | `15` | Rows per page (max 100) |
| `sort` | string | `null` | Column key to sort by |
| `direction` | string | `asc` | Sort direction: `asc` or `desc` |
| `filter[key]` | string | `null` | Filter by field key=value |

## Successful Response (200)

```json
{
  "data": [
    {
      "id": 1,
      "name": "Example",
      "status": "active",
      "created_at": "2026-07-05T00:00:00.000000Z"
    }
  ],
  "current_page": 1,
  "last_page": 5,
  "per_page": 15,
  "total": 72,
  "from": 1,
  "to": 15,
  "sort": "name",
  "direction": "asc"
}
```

### Response Fields

| Field | Type | Description |
|-------|------|-------------|
| `data` | array | Array of row objects |
| `current_page` | int | Current page number |
| `last_page` | int | Total number of pages |
| `per_page` | int | Rows per page |
| `total` | int | Total record count |
| `from` | int | First record index on current page |
| `to` | int | Last record index on current page |
| `sort` | string|null | Echo back sort field |
| `direction` | string|null | Echo back sort direction |

## Error Responses

### Validation Error (422)

```json
{
  "message": "The given data was invalid.",
  "errors": {
    "name": ["The name field is required."]
  }
}
```

### Unauthenticated (401)

```json
{
  "message": "Unauthenticated."
}
```

### Session Expired (419)

```json
{
  "message": "CSRF token mismatch."
}
```

## Backend Implementation

```php
// In controller:
return Model::query()
    ->when($request->sort, fn($q) => $q->orderBy($request->sort, $request->direction ?? 'asc'))
    ->when($request->filter('status'), fn($q, $v) => $q->where('status', $v))
    ->paginate($request->per_page ?? 15)
    ->appends($request->only(['sort', 'direction', 'filter']));
```
