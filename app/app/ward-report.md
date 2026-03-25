# Ward Security Report

**Project:**   
**Laravel:**   
**PHP:**   
**Duration:** 1.677s  
**Scanners:** env-scanner, config-scanner, dependency-scanner, rules-scanner  

## Summary

| Total | 16 |
|-------|---|
| 🟠 High | 11 |
| 🟡 Medium | 4 |
| 🔵 Info | 1 |

## Findings

### 🟠 High (11)

#### DEBUG-001 — dd() call left in code

- **File:** `Http/Controllers/Parents/MyParentsController.php:153`
- **Category:** Debug
- **Scanner:** rules-scanner

dd() (dump and die) stops execution and dumps variable contents to the browser. Left in production code, it breaks functionality and can expose sensitive data structures, database contents, or environment variables.


```
//  dd($request->file('file'));
```

**Remediation:**

Remove dd() calls before deploying:
  Use Laravel Telescope or logging for debugging in non-local environments.
  Log::debug('message', $context);


**References:**
- https://cwe.mitre.org/data/definitions/215.html

---

#### DEBUG-001 — dd() call left in code

- **File:** `Http/Controllers/Students/StudentsController.php:64`
- **Category:** Debug
- **Scanner:** rules-scanner

dd() (dump and die) stops execution and dumps variable contents to the browser. Left in production code, it breaks functionality and can expose sensitive data structures, database contents, or environment variables.


```
// dd($school_fee);
```

**Remediation:**

Remove dd() calls before deploying:
  Use Laravel Telescope or logging for debugging in non-local environments.
  Log::debug('message', $context);


**References:**
- https://cwe.mitre.org/data/definitions/215.html

---

#### DEBUG-001 — dd() call left in code

- **File:** `Http/Controllers/Students/StudentsController.php:336`
- **Category:** Debug
- **Scanner:** rules-scanner

dd() (dump and die) stops execution and dumps variable contents to the browser. Left in production code, it breaks functionality and can expose sensitive data structures, database contents, or environment variables.


```
// dd($school_fee);
```

**Remediation:**

Remove dd() calls before deploying:
  Use Laravel Telescope or logging for debugging in non-local environments.
  Log::debug('message', $context);


**References:**
- https://cwe.mitre.org/data/definitions/215.html

---

#### CONFIG-004 — Empty $guarded array on Eloquent model

- **File:** `Models/ExcptionFees.php:13`
- **Category:** Configuration
- **Scanner:** rules-scanner

Setting $guarded = [] makes every attribute mass-assignable. An attacker can inject unexpected fields (is_admin, role, email_verified_at) through mass assignment via create() or update().


```
protected $guarded = [];
```

**Remediation:**

Use $fillable to explicitly list allowed fields:
  protected $fillable = ['name', 'email', 'password'];
Or set $guarded to protect sensitive fields:
  protected $guarded = ['id', 'is_admin', 'role'];


**References:**
- https://owasp.org/Top10/A04_2021-Insecure_Design/
- https://cwe.mitre.org/data/definitions/915.html

---

#### CONFIG-004 — Empty $guarded array on Eloquent model

- **File:** `Models/Fee_invoice.php:16`
- **Category:** Configuration
- **Scanner:** rules-scanner

Setting $guarded = [] makes every attribute mass-assignable. An attacker can inject unexpected fields (is_admin, role, email_verified_at) through mass assignment via create() or update().


```
protected $guarded = [];
```

**Remediation:**

Use $fillable to explicitly list allowed fields:
  protected $fillable = ['name', 'email', 'password'];
Or set $guarded to protect sensitive fields:
  protected $guarded = ['id', 'is_admin', 'role'];


**References:**
- https://owasp.org/Top10/A04_2021-Insecure_Design/
- https://cwe.mitre.org/data/definitions/915.html

---

#### CONFIG-004 — Empty $guarded array on Eloquent model

- **File:** `Models/PaymentParts.php:14`
- **Category:** Configuration
- **Scanner:** rules-scanner

Setting $guarded = [] makes every attribute mass-assignable. An attacker can inject unexpected fields (is_admin, role, email_verified_at) through mass assignment via create() or update().


```
protected $guarded = [];
```

**Remediation:**

Use $fillable to explicitly list allowed fields:
  protected $fillable = ['name', 'email', 'password'];
Or set $guarded to protect sensitive fields:
  protected $guarded = ['id', 'is_admin', 'role'];


**References:**
- https://owasp.org/Top10/A04_2021-Insecure_Design/
- https://cwe.mitre.org/data/definitions/915.html

---

#### CONFIG-004 — Empty $guarded array on Eloquent model

- **File:** `Models/Recipt_Payment.php:13`
- **Category:** Configuration
- **Scanner:** rules-scanner

Setting $guarded = [] makes every attribute mass-assignable. An attacker can inject unexpected fields (is_admin, role, email_verified_at) through mass assignment via create() or update().


```
protected $guarded = [];
```

**Remediation:**

Use $fillable to explicitly list allowed fields:
  protected $fillable = ['name', 'email', 'password'];
Or set $guarded to protect sensitive fields:
  protected $guarded = ['id', 'is_admin', 'role'];


**References:**
- https://owasp.org/Top10/A04_2021-Insecure_Design/
- https://cwe.mitre.org/data/definitions/915.html

---

#### CONFIG-004 — Empty $guarded array on Eloquent model

- **File:** `Models/StudentAccount.php:15`
- **Category:** Configuration
- **Scanner:** rules-scanner

Setting $guarded = [] makes every attribute mass-assignable. An attacker can inject unexpected fields (is_admin, role, email_verified_at) through mass assignment via create() or update().


```
protected $guarded = [];
```

**Remediation:**

Use $fillable to explicitly list allowed fields:
  protected $fillable = ['name', 'email', 'password'];
Or set $guarded to protect sensitive fields:
  protected $guarded = ['id', 'is_admin', 'role'];


**References:**
- https://owasp.org/Top10/A04_2021-Insecure_Design/
- https://cwe.mitre.org/data/definitions/915.html

---

#### CONFIG-004 — Empty $guarded array on Eloquent model

- **File:** `Models/clothes_order.php:14`
- **Category:** Configuration
- **Scanner:** rules-scanner

Setting $guarded = [] makes every attribute mass-assignable. An attacker can inject unexpected fields (is_admin, role, email_verified_at) through mass assignment via create() or update().


```
protected $guarded = [];
```

**Remediation:**

Use $fillable to explicitly list allowed fields:
  protected $fillable = ['name', 'email', 'password'];
Or set $guarded to protect sensitive fields:
  protected $guarded = ['id', 'is_admin', 'role'];


**References:**
- https://owasp.org/Top10/A04_2021-Insecure_Design/
- https://cwe.mitre.org/data/definitions/915.html

---

#### CONFIG-004 — Empty $guarded array on Eloquent model

- **File:** `Models/order.php:14`
- **Category:** Configuration
- **Scanner:** rules-scanner

Setting $guarded = [] makes every attribute mass-assignable. An attacker can inject unexpected fields (is_admin, role, email_verified_at) through mass assignment via create() or update().


```
protected $guarded = [];
```

**Remediation:**

Use $fillable to explicitly list allowed fields:
  protected $fillable = ['name', 'email', 'password'];
Or set $guarded to protect sensitive fields:
  protected $guarded = ['id', 'is_admin', 'role'];


**References:**
- https://owasp.org/Top10/A04_2021-Insecure_Design/
- https://cwe.mitre.org/data/definitions/915.html

---

#### CONFIG-004 — Empty $guarded array on Eloquent model

- **File:** `Models/promotion.php:12`
- **Category:** Configuration
- **Scanner:** rules-scanner

Setting $guarded = [] makes every attribute mass-assignable. An attacker can inject unexpected fields (is_admin, role, email_verified_at) through mass assignment via create() or update().


```
protected $guarded = [];
```

**Remediation:**

Use $fillable to explicitly list allowed fields:
  protected $fillable = ['name', 'email', 'password'];
Or set $guarded to protect sensitive fields:
  protected $guarded = ['id', 'is_admin', 'role'];


**References:**
- https://owasp.org/Top10/A04_2021-Insecure_Design/
- https://cwe.mitre.org/data/definitions/915.html

---

### 🟡 Medium (4)

#### DEBUG-003 — var_dump() or print_r() in source

- **File:** `Models/class_room.php:40`
- **Category:** Debug
- **Scanner:** rules-scanner

Native PHP debug functions output raw data to the browser. In production these expose internal variable contents and data structures.


```
print_r('<span class="badge badge-danger">'.trans('general.no_tammen').'</span>');
```

**Remediation:**

Replace with structured logging:
  Log::debug('variable state', ['data' => $data]);


---

#### DEBUG-003 — var_dump() or print_r() in source

- **File:** `Models/class_room.php:42`
- **Category:** Debug
- **Scanner:** rules-scanner

Native PHP debug functions output raw data to the browser. In production these expose internal variable contents and data structures.


```
print_r('<span class="badge badge-success">'.trans('general.ok_tammen').'</span>');
```

**Remediation:**

Replace with structured logging:
  Log::debug('variable state', ['data' => $data]);


---

#### DEBUG-003 — var_dump() or print_r() in source

- **File:** `Models/classes.php:48`
- **Category:** Debug
- **Scanner:** rules-scanner

Native PHP debug functions output raw data to the browser. In production these expose internal variable contents and data structures.


```
print_r('<span class="badge badge-danger">'.trans('General.no_tammen').'</span>');
```

**Remediation:**

Replace with structured logging:
  Log::debug('variable state', ['data' => $data]);


---

#### DEBUG-003 — var_dump() or print_r() in source

- **File:** `Models/classes.php:50`
- **Category:** Debug
- **Scanner:** rules-scanner

Native PHP debug functions output raw data to the browser. In production these expose internal variable contents and data structures.


```
print_r('<span class="badge badge-success">'.trans('General.ok_tammen').'</span>');
```

**Remediation:**

Replace with structured logging:
  Log::debug('variable state', ['data' => $data]);


---

### 🔵 Info (1)

#### ENV-001 — No .env file found

- **File:** `.env:0`
- **Category:** Configuration
- **Scanner:** env-scanner

The project has no .env file. While this may be intentional in containerized deployments, ensure environment configuration is provided through another mechanism.

**Remediation:**

Copy .env.example to .env and configure your environment variables.

---

*Generated by [Ward](https://github.com/Eljakani/ward) v0.4.0*
