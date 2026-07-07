# API Contract: Dashboard Widgets

## Endpoint

```
GET /api/dashboard/widgets
```

**Name:** `dashboard.widgets`

## Authentication

Requires authenticated user (web auth middleware).

## Response

### Success (200 OK)

```json
{
  "statCards": [
    {
      "label": "Students",
      "value": 245,
      "icon": "graduation-cap",
      "color": "blue",
      "trend": "+12%",
      "trendDirection": "up",
      "sparklineData": [180, 195, 210, 220, 235, 245]
    },
    {
      "label": "Parents",
      "value": 180,
      "icon": "users",
      "color": "green",
      "trend": null,
      "trendDirection": "up",
      "sparklineData": null
    }
  ],
  "quickActions": [
    {
      "route": "students.create",
      "icon": "graduation-cap",
      "label": "Create Student",
      "perm": "Students-create"
    }
  ],
  "charts": {
    "studentChart": {
      "labels": ["Grade 1 - Class A", "Grade 1 - Class B"],
      "data": [25, 30]
    },
    "revenueTrend": {
      "labels": ["Jan 2026", "Feb 2026"],
      "data": [15000, 18000]
    }
  },
  "recentActivity": [
    {
      "icon": "graduation-cap",
      "description": "Student created: Ahmed Ali",
      "time": "2 hours ago"
    }
  ],
  "permissions": {
    "canViewStudents": true,
    "canViewParents": true,
    "canViewEmployees": false,
    "canViewFinancials": true
  }
}
```

### Error (401 Unauthorized)

```json
{
  "message": "Unauthenticated."
}
```

## Role-Based Behavior

| Role | Stat Cards | Quick Actions |
|------|-----------|---------------|
| **Admin** | Students, Parents, Employees, Pending Balance | All 6 actions |
| **Teacher** | Students (filtered), Parents (filtered), Class count | My Classes, Take Attendance, Grade Entry |
| **Accountant** | Fee stats, Payment parts, Exchange bonds | Fee Invoice, Receipts, Exchange Bonds |

## Frontend Integration

```javascript
// In dashboardWidgets() Alpine component:
fetchWidgets() {
    this.loading = true;
    axios.get(route('dashboard.widgets'))
        .then(response => {
            this.data = response.data;
        })
        .catch(() => {
            this.error = 'Error fetching dashboard data';
        })
        .finally(() => {
            this.loading = false;
        });
}
```

## Chart Resize Contract

When sidebar expands/collapses, dashboard must call `chart.resize()` on all ApexCharts instances:

```javascript
// Watcher in dashboard component
watch: {
    // This needs to observe sidebarExpanded from parent scope
    // and call this.studentChart?.resize() and this.revenueChart?.resize()
}
```
