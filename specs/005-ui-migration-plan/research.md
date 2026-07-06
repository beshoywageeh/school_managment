# Research: UI Redesign & Migration

## Resolved Decisions

### Decision 1: Livewire vs Axios for Data Interactions

- **Decision**: Use Livewire 4 for all server state (tables, forms, modals).
  Alpine handles client-side toggles, animations, chart init.
- **Rationale**: Livewire 4.3 is already installed. Server-driven components
  eliminate the need for a separate Axios data layer, reduce JS complexity,
  and align with the constitution's Principle II (prefer Livewire server
  actions over Alpine/vanilla JS for state changes).
- **Alternatives considered**:
  - Alpine + Axios only (original migration plan) — rejected per constitution
    clarification; requires more JS, duplicates server logic.
  - Hybrid Livewire + Axios — possible but adds cognitive overhead; Livewire
    natively handles form submissions, pagination, and real-time updates.

### Decision 2: Tailwind CSS v4 with @theme Tokens

- **Decision**: Expand the existing `@theme` block in `app.css` with ERP brand
  colors (brand blue, status colors, surface tones). No `tailwind.config.js`.
- **Rationale**: The project already uses Tailwind v4.2 with `@tailwindcss/vite`
  plugin and `@theme` directive. This matches the user's explicit request.
  The original plan's `tailwind.config.js` approach is v3 syntax — not needed.
- **Alternatives considered**:
  - Hybrid `tailwind.config.js` + CSS — not supported in Tailwind v4.

### Decision 3: ApexCharts for Dashboard Charts

- **Decision**: Use ApexCharts (already installed v5.11) for dashboard donut
  and line/area charts.
- **Rationale**: ApexCharts is already in `package.json` dependencies, set as
  `window.ApexCharts` globally, and supports RTL config. Adding Chart.js would
  violate Minimal Dependencies principle (Principle III).
- **Alternatives considered**:
  - Chart.js — new dependency; no advantage over already-installed ApexCharts.
  - Server-rendered chart images — less interactive, harder to maintain.

### Decision 4: Component Architecture — Livewire Full-Stack Components

- **Decision**: Build reusable components as Livewire full-stack components
  (PHP class + Blade view) under `app/Http/Livewire/Components/`, with
  Blade-only presentation components (`x-ui.*`) for purely visual elements.
- **Rationale**: Livewire components own both state and rendering. Visual-only
  elements (status badge, button variants) remain plain Blade components since
  they have no server state.
- **Alternatives considered**:
  - All Blade components with Alpine state — duplicates server logic.
  - All Livewire components — overkill for stateless visual elements.

### Decision 5: RTL Arabic Layout with mcamara/laravel-localization

- **Decision**: Use the already-installed mcamara/laravel-localization package
  for locale handling. The base layout sets `<html lang="ar" dir="rtl">`.
- **Rationale**: Package is installed and configured. Tailwind v4 RTL support
  (`rtl:` prefix, `inset-inline-*`) handles directional styling.
- **Alternatives considered**: Manual locale switching — unnecessary when
  package exists.

### Decision 6: Existing app.js Patterns to Preserve

- **Decision**: Keep the Alpine store toast system, ApexCharts setup, and
  `useFetch` composable (for chart data). Reduce Axios usage — Livewire
  replaces it for component data interactions.
- **Rationale**: Working infrastructure that doesn't conflict with Livewire.
  The toast system is used for error/session timeout notifications.
- **Alternatives considered**: Rewriting everything — unnecessary churn.
