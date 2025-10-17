
# TODO List

This list outlines the problems found in the codebase and suggests solutions to improve the overall quality of the project.

## 1. Fat Controllers

**Problem:** The controllers (`StudentController`, `fee_invoiceController`, `PaymentController`, `ReportController`) are "fat," meaning they contain too much business logic, making them difficult to maintain and test.

**Solution:**

- **Refactor to Service Classes:**
  - Create a `ReportService` to handle all PDF generation logic from `ReportController`.
  - Create a `PaymentService` to handle payment processing from `ReciptPaymentController`.
  - Create a `FinancialService` to manage student accounts, invoices, and payments, consolidating logic from `fee_invoiceController` and `ReciptPaymentController`.
  - Create a `StudentService` to handle student-related logic from `StudentsController`, such as importing students.

- **Use Form Requests for Validation:**
  - Create form requests for all `store` and `update` methods in the controllers to handle validation logic.

- **Use Blade Components:**
  - Identify repeated UI elements and extract them into Blade components to simplify the views.

- **Use Query Builders and Scopes:**
  - Move complex database queries from controllers to dedicated query builder classes or model scopes for better reusability and readability.

## 2. Code Duplication

**Problem:** There is significant code duplication, especially in `ReportController` for PDF generation and in financial controllers for student account management.

**Solution:**

- **Create a Base PDF Report Class:**
  - Develop a base `PdfReport` class or trait to encapsulate common PDF generation settings (margins, orientation, etc.). Each report can then extend this class or use the trait.

- **Consolidate Financial Logic:**
  - As mentioned above, a `FinancialService` should be created to handle all student account transactions, eliminating redundant code in `fee_invoiceController` and `ReciptPaymentController`.

## 3. Hardcoded Values and Magic Numbers

**Problem:** The code is littered with hardcoded values (e.g., `'Y-m-d'`, `'0'`, `'1'`) which reduces readability and makes the code harder to maintain.

**Solution:**

- **Use Enums and Constants:**
  - Replace magic numbers with meaningful constants or enums. For example, instead of `status = 1`, use `PaymentStatus::PAID`. The project already uses enums, so this should be consistently applied.

## 4. Lack of Comments

**Problem:** The code lacks comments, making it difficult to understand the purpose and logic of complex sections.

**Solution:**

- **Add Explanatory Comments:**
  - Add comments to explain *why* certain logic is implemented, especially in the financial and reporting modules.

## 5. Inconsistent Naming Conventions

**Problem:** There are inconsistencies in the naming of controllers, models, and database tables (e.g., `fee_invoiceController` vs. `StudentController`).

**Solution:**

- **Enforce a Consistent Naming Scheme:**
  - **Controllers:** `PascalCase` and singular (e.g., `FeeInvoiceController`, `StudentController`).
  - **Models:** `PascalCase` and singular (e.g., `AcademicYear`, `Classroom`, `Parent`).
  - **Database Tables:** `snake_case` and plural (e.g., `academic_years`, `classrooms`, `parents`).
  - **Methods:** `camelCase` (e.g., `getClasses`, `forceDelete`).

## 6. Missing and Incomplete Features

**Problem:** Some features are either not implemented or incomplete.

**Solution:**

- **Implement Partial Payments:**
  - Complete the implementation of partial payments in `ReciptPaymentController`.
- **Improve Excel Import:**
  - Enhance the `Excel_Import` feature in `StudentsController` with robust error handling, validation, and user feedback.

