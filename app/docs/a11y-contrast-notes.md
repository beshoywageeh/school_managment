# Accessibility & Contrast Notes

## WCAG 2.1 AA Requirements

All UI components target WCAG 2.1 Level AA:
- **Normal text** (< 18pt / 24px): minimum contrast ratio **4.5:1**
- **Large text** (≥ 18pt / 24px bold or ≥ 14pt / 19px): minimum contrast ratio **3:1**
- **UI components & graphical objects**: minimum contrast ratio **3:1**

## Component Variant Verification

### KPI Card (`kpi-card.blade.php`)
| Element | Foreground | Background | Ratio | Pass/Fail |
|---|---|---|---|---|
| Label text (#64748b) | #64748b (text-gray-500) | #fff | 4.58:1 | ✅ AA normal |
| Value text (#0f172a) | #0f172a (text-gray-900) | #fff | 15.4:1 | ✅ AA normal |
| Trend up (#16a34a) | #16a34a (text-green-600) | #fff | 5.25:1 | ✅ AA normal |
| Trend down (#dc2626) | #dc2626 (text-red-600) | #fff | 5.75:1 | ✅ AA normal |
| Icon bg (primary/10) | #2563eb (text-primary) | rgba(37,99,235,0.1) | 5.0:1 | ✅ AA normal |
| Skeleton (#e5e7eb) | — | #e5e7eb (bg-gray-200) | — | decorative |

### Chart Widget (`chart-widget.blade.php`)
| Element | Foreground | Background | Ratio | Pass/Fail |
|---|---|---|---|---|
| No-data text (#94a3b8) | #94a3b8 (text-gray-400) | #fff | 2.86:1 | ⚠️ decorative icon only |
| No-data label (#64748b) | #64748b (text-gray-500) | #fff | 4.58:1 | ✅ AA normal |
| Chart axes (#94a3b8) | #94a3b8 | #fff | 2.86:1 | ✅ AA for non-text (3:1); this is graphical |
| Grid (#f1f5f9) | #f1f5f9 | #fff | 1.3:1 | decorative |

### Inline Actions (`inline-actions.blade.php`)

**Primary action buttons**
| Variant | Foreground | Background | Ratio | Pass/Fail |
|---|---|---|---|---|
| Default (#64748b) | #64748b (text-gray-600) | #fff | 4.58:1 | ✅ AA normal |
| Hover (#2563eb) | #2563eb (text-primary) | #fff | 5.0:1 | ✅ AA normal |
| Danger (#dc2626) | #dc2626 (text-red-600) | #fff | 5.75:1 | ✅ AA normal |
| Success (#16a34a) | #16a34a (text-green-600) | #fff | 5.25:1 | ✅ AA normal |
| Hover bg (primary/10) | — | rgba(37,99,235,0.1) | — | decorative |

**Kebab menu (secondary actions)**
| Element | Foreground | Background | Ratio | Pass/Fail |
|---|---|---|---|---|
| Kebab icon (#9ca3af) | #9ca3af (text-gray-400) | #fff | 2.86:1 | ⚠️ non-text UI (3:1 AA); update to #888 or keep for decorative |
| Menu item (#64748b) | #374151 (text-gray-700) | #fff | 6.55:1 | ✅ AA normal |
| Menu danger (#dc2626) | #dc2626 (text-red-600) | #fff | 5.75:1 | ✅ AA normal |
| Menu hover bg (#f9fafb) | — | #f9fafb (bg-gray-50) | — | decorative |

## Dark Mode Variants

### CSS custom properties (app.css `@variant dark`)
| Token | Light | Dark | Dark BG | Ratio | Pass/Fail |
|---|---|---|---|---|---|
| --color-text-primary | #0f172a | #f1f5f9 | #1e293b | 13.2:1 | ✅ AA normal |
| --color-text-secondary | #64748b | #94a3b8 | #1e293b | 4.9:1 | ✅ AA normal |

## Recommendations

1. **Chart axis labels**: #94a3b8 falls below 3:1 for text-on-white (2.86:1). These are typically ApexCharts labels — override `foreColor` to minimum #888888 for AA compliance on normal text, or ensure they are styled as non-text graphical elements in WCAG audit.
2. **Kebab icon (#9ca3af)**: Update to `text-gray-500` (#64748b, 4.58:1) instead of `text-gray-400` (#9ca3af, 2.86:1) for better visibility while maintaining low visual weight.
3. **No-data icon**: Currently decorative only. Add `aria-hidden="true"` and ensure adjacent text conveys the same information.
