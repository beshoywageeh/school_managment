# Feature Specification: Report Module Error Remediation

**Feature Branch**: `014-fix-report-bugs`
**Created**: 2026-09-23
**Status**: Draft
**Input**: User description: "create specification plan from the previous analysis"

## Background

The reporting module of the school management system was audited end-to-end. The analysis found that a majority of report actions can fail in user-visible ways:

- several reports crash with a server error (HTTP 5xx) instead of producing a PDF,
- some reports render a blank or empty PDF when data exists,
- others silently mis-group or mis-filter the data (e.g., every row under a blank heading, or a payment-status filter returning the wrong set of records),
- a handful of export actions expose sensitive student data (national IDs, parent phone numbers) without requiring export permission.

This specification remediates all of those defects so that **every** report produces a correct, complete PDF — or, where nothing matches the request, a clear and friendly message. It covers fixes only: no new reports, no redesign of report content, and no removal of existing screens.

## Clarifications

### Session 2026-09-23

- Q: What does the "unpaid" payment-status filter include, given the system uses three status values (unpaid, not_paid, paid)? → A: "unpaid" covers both the unpaid and not_paid statuses (all outstanding amounts); "paid" covers only the paid status.
- Q: Are date-range filters inclusive of the end date? → A: Yes, the range is inclusive of both ends (rows from ≥ from and ≤ to appear).

## User Scenarios & Testing *(mandatory)*

### User Story 1 - Financial Reports Generate Valid, Correct PDFs (Priority: P1)

As a finance admin, I want the financial reports — fees invoices, payment status, payments received, payment instalments, credit (paid invoices), school fees list, and exception fees — to always generate a complete PDF containing exactly the records I asked for, so that I can present accurate figures to the school leadership.

**Why this priority**: These reports feed billing and collection decisions each month; a crash or an empty PDF blocks the school's most time-sensitive financial work.

**Independent Test**: Can be fully tested by generating each financial report with typical school data and verifying a valid PDF appears — this alone delivers usable financial reporting.

**Acceptance Scenarios**:

1. **Given** records match my selected filters (date range, grade, classroom, payment status), **When** I generate the report, **Then** I receive a valid PDF containing exactly those records — never a server error or a blank page.
2. **Given** my selected filters match no records, **When** I generate the report, **Then** I see a clear "no data to show" message instead of an empty or broken PDF.
3. **Given** no academic year is marked active for the current period, **When** I generate a financial report that needs an academic year, **Then** the system responds with a clear message — never a server error.
4. **Given** I choose a payment-status filter (unpaid, paid), **When** the report renders, **Then** it shows exactly the invoices with that status — not all statuses, and not none.

---

### User Story 2 - Stock and Inventory Reports Show True Quantities (Priority: P2)

As a store admin, I want the inventory reports — general stock product report, per-item stock, clothes stock, and the books/sheets stock lists — to open with correct quantities and correct headings for every item in my school, so that the stock figures I report are trusted by my managers.

**Why this priority**: Stock reporting is used to reconcile purchases, sales, and handouts; wrong or blank output erodes trust and can hide shortages.

**Independent Test**: Can be fully tested by opening each stock report for a school's real item and verifying correct totals render — this alone delivers usable inventory reporting.

**Acceptance Scenarios**:

1. **Given** a valid item belonging to my school, **When** I open its stock report, **Then** the PDF shows the item's correct running totals and stock movements — not a blank report or a server error.
2. **Given** I select an item id that does not belong to my school, or does not exist, **When** I request its report, **Then** I receive a clear "not found" outcome — never a server error.
3. **Given** a stock type with many items, **When** I open the clothes and books/sheets stock lists, **Then** every row and total is rendered with no blank sections.

---

### User Story 3 - Student Reports Group Correctly and Stay Private (Priority: P3)

As a school admin, I want the student-facing reports — students export, student insurance list (تأمين), student report, and the final-year report — to list students under the correct grade/classroom headings and to be available only to staff allowed to export, so that printed lists are accurate and student privacy is protected.

**Why this priority**: Correct grouping and export permissions protect accuracy and privacy; this is important but lower-urgency than the financial/inventory stories.

**Independent Test**: Can be fully tested by exporting a students list and a student insurance list with data in several grades — this alone verifies grouping and the export-permission gate.

**Acceptance Scenarios**:

1. **Given** students exist across several grades and classrooms, **When** I export the students list, **Then** each student appears once under the correct grade/classroom heading — none missing, none under a blank heading, and no server error.
2. **Given** a student insurance list contains national IDs and parent phone numbers, **When** a staff member without export permission tries to open it, **Then** access is denied.
3. **Given** the final-year report is requested with partial or no grade/classroom selections, **When** it is generated, **Then** it completes successfully and presents all eligible records — no server error caused by missing selections.
4. **Given** staff of one school generate any report, **When** the report renders, **Then** it contains only that school's records — no leakage from other schools.

---

### Edge Cases

- No records match the selected filters → a clear "no data" message, never a blank or broken PDF.
- Records dated exactly on the end date of a date range → included in the report (ranges are inclusive), so month-end and day-boundary data is never dropped.
- No active/found academic year for the period → a clear message, never a crash.
- An invalid, missing, or other-school item id in the per-item stock reports → a "not found" outcome, never a server error.
- Grade or classroom filters submitted empty or as "all" → the report still renders correctly (students export and final-year report).
- Payment-status filter submitted empty or as "all" → the report shows all records regardless of status; an "unpaid" selection shows every outstanding record (unpaid and not_paid) — never a page with zero rows caused by comparing against nothing.
- Very large result sets (a whole school) → the report completes in reasonable time and the PDF remains valid.
- Arabic content in PDF reports → renders correctly (titles, student names, statuses).

## Requirements *(mandatory)*

### Functional Requirements

- **FR-001**: System MUST produce a valid, complete PDF for every available report whenever the selected filters match any records.
- **FR-002**: System MUST show an explicit "no data" message (and never a broken PDF) when a report query returns no records.
- **FR-003**: System MUST apply date-range, grade, classroom, and payment-status filters exactly; the returned records MUST match only the selected status and range. Date ranges are inclusive of both the start and end dates — a record dated exactly on the end date MUST be included.
- **FR-004**: System MUST group report rows only by attributes that exist for the underlying records, so that academic-year, grade, and classroom headings are always populated and correct.
- **FR-005**: System MUST handle an invalid or foreign report target (for example an item id that is not present in the current school) with a "not found" outcome rather than a server error.
- **FR-006**: System MUST resolve the correct academic year for reports and MUST respond with a clear message — never a crash — when no academic year is active.
- **FR-007**: System MUST interpret payment-status filter values consistently with the statuses actually used by the system, so filters return the intended set of records: the "unpaid" filter MUST cover both the unpaid and not_paid statuses (all outstanding amounts) and the "paid" filter MUST cover only the paid status.
- **FR-008**: Reports containing sensitive student data (for example insurance lists with national IDs and parent phone numbers) MUST be available only to staff granted export permission.
- **FR-009**: ALL reports MUST respect the school boundary — staff of one school MUST never be able to pull records belonging to another school through any report.
- **FR-010**: System MUST render every report cell with its intended value (for example stock opening dates and quantities) — no cell may appear blank when a real value exists.

### Key Entities *(include if feature involves data)*

- **Report**: A PDF output produced for a given report type over a filtered set of records.
- **Invoice / Payment / Payment Instalment**: Financial records aggregated by the fee and payment reports.
- **Inventory Item / Order**: Stock records and their movements aggregated by the stock reports.
- **Student / Grade / Classroom**: The hierarchy used to group student reports.
- **Academic Year**: The enrollment and fee period used to scope reports, identified by an "active" flag in the system settings.

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **SC-001**: 100% of report actions return either a valid PDF, the approved HTML preview for the final-year report, or a clear "no data / not found" message; across all report types and every tested filter combination, no report action produces a server error.
- **SC-002**: 100% of populated reports display populated group headings (academic year, grade, classroom) — no report renders with blank or mislabeled section headings.
- **SC-003**: Filter correctness is 100% — for every tested filter combination, the returned records match exactly the selected date range, grade, classroom, and payment status.
- **SC-004**: In 100% of edge cases (no matching records, no active academic year, invalid item id), the user receives a clear message rather than a blank page or an error.
- **SC-005**: A report for a school of up to 5,000 students completes in under 10 seconds.
- **SC-006**: Every sensitive report type is verified to require export permission before its content is rendered.

## Assumptions

- Full remediation of all defects found in the report-module analysis (critical, medium, and minor) is in scope; this is a fixes-only effort, with no new reports added.
- Existing report screens, routes, and PDF views are retained and corrected in place; the section/column structure of each report is not redesigned.
- PDF remains the output format for all report exports, streamed for viewing in the browser — with **one approved exception**: the final-year report renders as an in-browser HTML preview (owner decision, 2026-09-29); all other report exports stream a PDF.
- The existing school-boundary scoping must be preserved and never weakened by the fixes.
- The correct academic year for a report is the one flagged active in the system settings — using the same convention as the dashboard and inventory screens.
- The intended grouping of each report (for example listing students grouped by grade) is preserved; the fixes only make it render accurately.
- Sensitive export prompts (student insurance, students export) already distinct data types; the export-permission gate is the expected access control and must be applied consistently to all PDF-producing actions.