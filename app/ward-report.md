# Ward Security Report

**Project:** looplabs/ischool  
**Laravel:** ^10.10  
**PHP:** ^8.4  
**Duration:** 13.449s  
**Scanners:** env-scanner, config-scanner, dependency-scanner, rules-scanner  

## Summary

| Total | 226 |
|-------|---|
| 🔴 Critical | 1 |
| 🟠 High | 14 |
| 🟡 Medium | 58 |
| 🟢 Low | 153 |

## Findings

### 🔴 Critical (1)

#### CVE-2025-54068 — [CVE-2025-54068] livewire/livewire@3.5.8 — Livewire is vulnerable to remote command execution during component property update hydration

- **File:** `composer.lock:0`
- **Category:** Dependencies
- **Scanner:** dependency-scanner

Livewire is vulnerable to remote command execution during component property update hydration

**Remediation:**

Upgrade livewire/livewire to 3.6.4 or later:
  composer require livewire/livewire:3.6.4

**References:**
- https://github.com/livewire/livewire/security/advisories/GHSA-29cq-5w36-x7w3
- https://nvd.nist.gov/vuln/detail/CVE-2025-54068
- https://github.com/livewire/livewire/commit/ef04be759da41b14d2d129e670533180a44987dc

---

### 🟠 High (14)

#### ENV-002 — APP_DEBUG is enabled

- **File:** `.env:4`
- **Category:** Configuration
- **Scanner:** env-scanner

APP_DEBUG is set to true. In production, this exposes detailed error messages including stack traces, database queries, and environment variables to end users.

```
APP_DEBUG=true
```

**Remediation:**

Set APP_DEBUG=false in your production .env file. Use Laravel's logging system for error tracking instead.

**References:**
- https://owasp.org/Top10/A05_2021-Security_Misconfiguration/

---

#### DEBUG-001 — dd() call left in code

- **File:** `app/Http/Controllers/Parents/MyParentsController.php:153`
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

- **File:** `app/Http/Controllers/Students/StudentsController.php:84`
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

- **File:** `app/Http/Controllers/Students/StudentsController.php:296`
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

- **File:** `routes/local.php:25`
- **Category:** Debug
- **Scanner:** rules-scanner

dd() (dump and die) stops execution and dumps variable contents to the browser. Left in production code, it breaks functionality and can expose sensitive data structures, database contents, or environment variables.


```
dd(\Artisan::output());
```

**Remediation:**

Remove dd() calls before deploying:
  Use Laravel Telescope or logging for debugging in non-local environments.
  Log::debug('message', $context);


**References:**
- https://cwe.mitre.org/data/definitions/215.html

---

#### DEBUG-001 — dd() call left in code

- **File:** `routes/local.php:30`
- **Category:** Debug
- **Scanner:** rules-scanner

dd() (dump and die) stops execution and dumps variable contents to the browser. Left in production code, it breaks functionality and can expose sensitive data structures, database contents, or environment variables.


```
dd(\Artisan::output());
```

**Remediation:**

Remove dd() calls before deploying:
  Use Laravel Telescope or logging for debugging in non-local environments.
  Log::debug('message', $context);


**References:**
- https://cwe.mitre.org/data/definitions/215.html

---

#### CONFIG-004 — Empty $guarded array on Eloquent model

- **File:** `app/Models/ExcptionFees.php:13`
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

- **File:** `app/Models/Fee_invoice.php:16`
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

- **File:** `app/Models/PaymentParts.php:14`
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

- **File:** `app/Models/Recipt_Payment.php:13`
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

- **File:** `app/Models/StudentAccount.php:15`
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

- **File:** `app/Models/clothes_order.php:14`
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

- **File:** `app/Models/order.php:14`
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

- **File:** `app/Models/promotion.php:12`
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

### 🟡 Medium (58)

#### ENV-005 — APP_ENV is set to 'local'

- **File:** `.env:2`
- **Category:** Configuration
- **Scanner:** env-scanner

The application environment suggests a non-production configuration. If this is a production server, this may cause debug features to be enabled and performance optimizations to be skipped.

```
APP_ENV=local
```

**Remediation:**

Set APP_ENV=production on production servers.

---

#### CFG-009 — CORS allows all origins

- **File:** `config/cors.php:22`
- **Category:** Configuration
- **Scanner:** config-scanner

config/cors.php allows requests from any origin ('*'). This permits cross-site data theft if authenticated endpoints return sensitive data.

```
'allowed_origins' => ['*'],
```

**Remediation:**

Specify allowed origins: 'allowed_origins' => [env('FRONTEND_URL')],

**References:**
- https://cwe.mitre.org/data/definitions/942.html

---

#### CRYPTO-002 — sha1() used for security purposes

- **File:** `tests/Feature/Auth/EmailVerificationTest.php:39`
- **Category:** Cryptography
- **Scanner:** rules-scanner

SHA-1 is considered weak — practical collision attacks exist. While less broken than MD5, it should not be used for security-sensitive operations like password hashing or token generation.


```
['id' => $user->id, 'hash' => sha1($user->email)]
```

**Remediation:**

Use SHA-256 or stronger:
  hash('sha256', $data)
For passwords, always use Hash::make().


**References:**
- https://cwe.mitre.org/data/definitions/328.html

---

#### CRYPTO-002 — sha1() used for security purposes

- **File:** `tests/Feature/Auth/EmailVerificationTest.php:58`
- **Category:** Cryptography
- **Scanner:** rules-scanner

SHA-1 is considered weak — practical collision attacks exist. While less broken than MD5, it should not be used for security-sensitive operations like password hashing or token generation.


```
['id' => $user->id, 'hash' => sha1('wrong-email')]
```

**Remediation:**

Use SHA-256 or stronger:
  hash('sha256', $data)
For passwords, always use Hash::make().


**References:**
- https://cwe.mitre.org/data/definitions/328.html

---

#### DEBUG-003 — var_dump() or print_r() in source

- **File:** `app/Models/class_room.php:40`
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

- **File:** `app/Models/class_room.php:42`
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

- **File:** `app/Models/classes.php:48`
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

- **File:** `app/Models/classes.php:50`
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

#### CONFIG-001 — Wildcard CORS origin allowed

- **File:** `config/cors.php:22`
- **Category:** Configuration
- **Scanner:** rules-scanner

The CORS configuration allows all origins ('*'). This permits any website to make authenticated cross-origin requests to your API, potentially exposing user data through CSRF-like attacks.


```
'allowed_origins' => ['*'],
```

**Remediation:**

Specify explicit allowed origins:
  'allowed_origins' => [env('FRONTEND_URL', 'https://myapp.com')],


**References:**
- https://cwe.mitre.org/data/definitions/942.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/Students/show.blade.php:127`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
<h5>{!! $school->heading_right !!}</h5>
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/class_rooms/show.blade.php:101`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/41.blade.php:71`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/41.blade.php:106`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/41.blade.php:117`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/book_sheet_stock.blade.php:85`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/books_sheets_stocks.blade.php:87`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/books_sheets_stocks.blade.php:140`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/clothe_stock.blade.php:155`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/clothe_stock.blade.php:166`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/clothes_stocks.blade.php:87`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/clothes_stocks.blade.php:128`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/credit.blade.php:72`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/credit.blade.php:81`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/credit.blade.php:99`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/daily_fee_view.blade.php:66`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/daily_fee_view.blade.php:117`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/exception_fee.blade.php:68`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/exception_fee.blade.php:107`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/fee_invoices.blade.php:71`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/fee_invoices.blade.php:80`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/fee_invoices.blade.php:98`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/payment_status_view.blade.php:72`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/payment_status_view.blade.php:81`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/payment_status_view.blade.php:98`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/payment_status_view.blade.php:160`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/payments.blade.php:72`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/payments.blade.php:81`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/payments.blade.php:97`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/payments_part.blade.php:96`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/school_fees.blade.php:72`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/school_fees.blade.php:81`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/school_fees.blade.php:99`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/stock_product.blade.php:100`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/stock_product.blade.php:114`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/stock_product_view.blade.php:99`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/stock_product_view.blade.php:113`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/student_tameen_1.blade.php:69`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/student_tameen_1.blade.php:100`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/student_tameen_1.blade.php:111`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/student_tameen_2.blade.php:69`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/student_tameen_2.blade.php:100`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/student_tameen_2.blade.php:111`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $data['school_data']->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/students.blade.php:65`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->heading_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/students.blade.php:94`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_right !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/report/PDF/students.blade.php:105`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
{!! $school->footer_left !!}
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/backend/school_fees/show.blade.php:11`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
<th rowspan="2" class="text-center align-middle">{{ $school->name }}<br>{!! $school->heading_right !!}</th>
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-001 — Unescaped Blade output {!! !!}

- **File:** `resources/views/layouts/invoice_view.blade.php:65`
- **Category:** XSS
- **Scanner:** rules-scanner

The {!! !!} syntax renders raw HTML without escaping. If the value contains user-controlled data, this creates a stored or reflected XSS vulnerability. Use {{ }} which auto-escapes via htmlspecialchars().


```
<div class="col">{!!$school->heading_right!!}</div>
```

**Remediation:**

Use escaped output:
  {{ $variable }}        — auto-escapes HTML entities
If raw HTML is truly needed, sanitize first:
  {!! clean($variable) !!}   — use HTMLPurifier or similar


**References:**
- https://owasp.org/Top10/A07_2021-Cross-Site_Scripting/
- https://cwe.mitre.org/data/definitions/79.html

---

#### XSS-003 — JavaScript variable from unescaped PHP

- **File:** `resources/views/layouts/footer_script.blade.php:7`
- **Category:** XSS
- **Scanner:** rules-scanner

A PHP variable is interpolated into a JavaScript block without using @json or proper encoding, which can lead to XSS if the value contains user data.


```
var plugin_path = '{{ asset("assests/js") }}/';
```

**Remediation:**

Use @json to safely embed PHP data in JavaScript:
  <script>
    var data = @json($data);
  </script>
Or use a data attribute:
  <div data-config="{{ json_encode($config) }}">


**References:**
- https://cwe.mitre.org/data/definitions/79.html

---

### 🟢 Low (153)

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:68`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/profile', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:69`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::patch('/profile', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:70`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::delete('/profile', 'destroy')->name('destroy');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:77`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:81`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:82`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:83`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:89`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:93`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:94`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:95`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:96`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/tammen/{id}', 'tammen')->name('tammen');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:102`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:103`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:104`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:108`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:109`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:110`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:119`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:120`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:121`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:125`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:126`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:127`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:145`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:149`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:150`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:151`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:157`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:158`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:159`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:163`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:164`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:165`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:171`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:172`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:173`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:177`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:178`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:179`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:185`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:186`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:187`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:194`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:198`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:199`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:208`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:209`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:213`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:214`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:215`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:221`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:222`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:223`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:232`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:236`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:237`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:238`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:242`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id?}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:248`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:249`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:250`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:251`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:252`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:256`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id?}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:257`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id?}/print', 'print')->name('print');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:258`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/payall', 'payall');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:264`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:265`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('{id}/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:266`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:267`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:268`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:272`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id?}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:278`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:279`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('{id}/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:280`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:281`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:282`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:286`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id?}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:287`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id?}/pay', 'pay')->name('pay');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:296`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:306`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/stock', 'stock_product')->name('stock');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:333`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/payments', 'payments')->name('payments');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:337`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/credit', 'credit')->name('credit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:349`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:350`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:351`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:352`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:364`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/show/{id}', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:399`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:400`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:401`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:402`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:403`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:407`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id?}/show', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:413`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:414`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:426`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:427`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:428`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:429`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{id}/edit', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:430`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:431`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/destroy/{id}', 'destroy')->name('delete');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:432`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/show/{id}', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:438`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:447`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:448`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:458`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:459`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:460`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:464`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/delete/{id}', 'destroy')->name('destroy');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:473`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:474`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/show/{id}', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:475`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/edit/{id}', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:476`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:477`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/delete/{id}', 'destroy')->name('destroy');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:478`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:484`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:485`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/show/{id}', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:486`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/edit/{id}', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:490`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:491`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/delete/{id}', 'destroy')->name('destroy');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:492`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:505`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:506`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:507`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/show/{id}', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:508`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/edit/{id}', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:509`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:510`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:519`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:520`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:524`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:530`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{type}', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:531`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/tawreed', 'tawreed')->name('tawreed');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:532`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/delete/{id}', 'destroy')->name('delete');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:533`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/show/{id}', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:534`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/edit/{id}', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:574`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/pay/{id}', 'pay')->name('pay');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:584`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:585`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:586`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:595`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/{type}', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:632`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/show/{id}', 'show')->name('show');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:633`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/pay/{id}', 'pay')->name('pay');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:642`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:643`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/create/{id}', 'create')->name('create');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:644`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/store', 'store')->name('store');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:645`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/edit/{id}', 'edit')->name('edit');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:646`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::post('/update', 'update')->name('update');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:647`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/print/{id}', 'print')->name('print');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:656`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:662`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
Route::get('/', 'index')->name('index');
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

#### AUTH-001 — Route without middleware

- **File:** `routes/web.php:675`
- **Category:** Authentication
- **Scanner:** rules-scanner

A route is defined without any middleware. Depending on the route, this may expose endpoints without authentication or rate limiting. Sensitive routes should always have auth or throttle middleware.


```
return Route::post('/livewire/update', $handle);
```

**Remediation:**

Apply middleware to routes:
  Route::get('/dashboard', [DashboardController::class, 'index'])
      ->middleware(['auth', 'verified']);
Or group routes:
  Route::middleware(['auth'])->group(function () { ... });


**References:**
- https://cwe.mitre.org/data/definitions/306.html

---

*Generated by [Ward](https://github.com/Eljakani/ward) v0.4.0*
