<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class PermissionsHelper
{
    public static function getNavGroups(): array
    {
        return [
            'dashboard' => [
                'labelKey' => '',
                'permissions' => [],
                'items' => [
                    ['route' => 'dashboard', 'icon' => 'dashboard', 'permission' => null, 'labelKey' => 'Sidebar.Dashboard'],
                ],
            ],
            'student_info' => [
                'labelKey' => 'Sidebar.student_info',
                'permissions' => ['Students-list', 'parents-list', 'promotion-list', 'graduated_list'],
                'items' => [
                    ['route' => 'parents.index', 'icon' => 'users', 'permission' => 'parents-list', 'labelKey' => 'Sidebar.parents'],
                    ['route' => 'students.index', 'icon' => 'graduation-cap', 'permission' => 'Students-list', 'labelKey' => 'Sidebar.Students'],
                    ['route' => 'promotion.index', 'icon' => 'level-up', 'permission' => 'promotion-list', 'labelKey' => 'Sidebar.promotion'],
                    ['route' => 'students.graduated', 'icon' => 'graduation-cap', 'permission' => 'graduated-list', 'labelKey' => 'Sidebar.graduated'],
                ],
            ],
            'employee_info' => [
                'labelKey' => 'Sidebar.employee_info',
                'permissions' => ['jobs-list', 'employees-list'],
                'items' => [
                    ['route' => 'jobs.index', 'icon' => 'briefcase', 'permission' => 'jobs-list', 'labelKey' => 'Sidebar.jobs'],
                    ['route' => 'employees.index', 'icon' => 'id-card', 'permission' => 'employees-list', 'labelKey' => 'Sidebar.employees'],
                    ['route' => 'schedule.index', 'icon' => 'calendar-check', 'permission' => 'scheduale-list', 'labelKey' => 'schedules.schedules'],
                    ['route' => 'employees.return_list', 'icon' => 'user-times', 'permission' => 'employees-list', 'labelKey' => 'general.resign'],
                ],
            ],
            'accounting' => [
                'labelKey' => 'Sidebar.accounting',
                'permissions' => ['academic_year-list', 'schoolfees-list', 'fee_invoice-list', 'ReceiptPayment-list', 'except_fee-list', 'payment_parts-list', 'exchange_bonds-list'],
                'items' => [
                    ['route' => 'academic_year.index', 'icon' => 'calendar', 'permission' => 'academic_year-list', 'labelKey' => 'academic_year.title'],
                    ['route' => 'school_fees.index', 'icon' => 'money', 'permission' => 'schoolfees-list', 'labelKey' => 'Sidebar.schoolfees'],
                    ['route' => 'fee_invoice.index', 'icon' => 'file-text', 'permission' => 'fee_invoice-list', 'labelKey' => 'Sidebar.fees_invoice'],
                    ['route' => 'receipt_payment.index', 'icon' => 'credit-card', 'permission' => 'ReceiptPayment-list', 'labelKey' => 'Sidebar.ReceiptPayment'],
                    ['route' => 'except_fee.index', 'icon' => 'minus-circle', 'permission' => 'except_fee-list', 'labelKey' => 'Sidebar.except_fee'],
                    ['route' => 'payment_parts.index', 'icon' => 'arrow-circle-down', 'permission' => 'payment_parts-list', 'labelKey' => 'Sidebar.payment_parts'],
                    ['route' => 'exchange-bonds.index', 'icon' => 'credit-card', 'permission' => 'exchange_bonds-list', 'labelKey' => 'Sidebar.exchange_bonds'],
                    ['route' => 'fund_account.index', 'icon' => 'university', 'permission' => null, 'labelKey' => 'Sidebar.FundAccount'],
                ],
            ],
            'grades_setting' => [
                'labelKey' => 'Sidebar.grades_setting',
                'permissions' => ['grade-list', 'class_rooms-list', 'classes-list'],
                'items' => [
                    ['route' => 'grade.index', 'icon' => 'line-chart', 'permission' => 'grade-list', 'labelKey' => 'Sidebar.Grade'],
                    ['route' => 'class_rooms.index', 'icon' => 'building', 'permission' => 'class_rooms-list', 'labelKey' => 'Sidebar.Class_Rooms'],
                    ['route' => 'classes.index', 'icon' => 'list-alt', 'permission' => 'classes-list', 'labelKey' => 'Sidebar.classes'],
                ],
            ],
            'stores' => [
                'labelKey' => 'Sidebar.stores',
                'permissions' => [
                    'stocks-index', 'orders-index', 'order_out-index', 'stocks-inventory_order-index',
                    'clothes-income_order', 'clothes-index', 'clothes-outcome_order', 'clothes-inventory_order',
                    'books_sheets-index', 'books_sheets-outcome_order', 'books_sheets-income_order', 'books_sheets-inventory_order',
                ],
                'items' => [],
                'subgroups' => [
                    'stocks' => [
                        'labelKey' => 'Sidebar.stocks',
                        'icon' => 'archive',
                        'permissions' => ['stocks-index', 'orders-index', 'order_out-index', 'stocks-inventory_order-index'],
                        'items' => [
                            ['route' => 'inventory.items.index', 'params' => ['type' => 'stock'], 'permission' => 'stocks-index', 'labelKey' => 'Sidebar.stocks_show'],
                            ['route' => 'inventory.orders.index', 'params' => ['type' => 'purchases'], 'permission' => 'orders-index', 'labelKey' => 'orders.income'],
                            ['route' => 'inventory.orders.index', 'params' => ['type' => 'sales'], 'permission' => 'order_out-index', 'labelKey' => 'stock.outcome_order'],
                            ['route' => 'inventory.orders.index', 'params' => ['type' => 'inventory'], 'permission' => 'stocks-inventory_order-index', 'labelKey' => 'stock.inventory_order'],
                        ],
                    ],
                    'clothes' => [
                        'labelKey' => 'stock.clothes',
                        'icon' => 'shirt',
                        'permissions' => ['clothes-income_order', 'clothes-index', 'clothes-outcome_order', 'clothes-inventory_order'],
                        'items' => [
                            ['route' => 'inventory.items.index', 'params' => ['type' => 'clothe'], 'permission' => 'clothes-index', 'labelKey' => 'Sidebar.clothes_show'],
                            ['route' => 'inventory.orders.index', 'params' => ['type' => 'purchases'], 'permission' => 'clothes-income_order', 'labelKey' => 'orders.income'],
                            ['route' => 'inventory.orders.index', 'params' => ['type' => 'sales'], 'permission' => 'clothes-outcome_order', 'labelKey' => 'stock.outcome_order'],
                            ['route' => 'inventory.orders.index', 'params' => ['type' => 'inventory'], 'permission' => 'clothes-inventory_order', 'labelKey' => 'stock.inventory_order'],
                        ],
                    ],
                    'books' => [
                        'labelKey' => 'Sidebar.books_sheets',
                        'icon' => 'book',
                        'permissions' => ['books_sheets-index', 'books_sheets-outcome_order', 'books_sheets-income_order', 'books_sheets-inventory_order'],
                        'items' => [
                            ['route' => 'inventory.items.index', 'params' => ['type' => 'book'], 'permission' => 'books_sheets-index', 'labelKey' => 'Sidebar.books_sheets_show'],
                            ['route' => 'inventory.orders.index', 'params' => ['type' => 'purchases'], 'permission' => 'books_sheets-income_order', 'labelKey' => 'orders.income'],
                            ['route' => 'inventory.orders.index', 'params' => ['type' => 'sales'], 'permission' => 'books_sheets-outcome_order', 'labelKey' => 'stock.outcome_order'],
                            ['route' => 'inventory.orders.index', 'params' => ['type' => 'inventory'], 'permission' => 'books_sheets-inventory_order', 'labelKey' => 'stock.inventory_order'],
                        ],
                    ],
                ],
            ],
            'security' => [
                'labelKey' => 'Sidebar.security',
                'permissions' => ['settings-info', 'role-list', 'back-list'],
                'items' => [
                    ['route' => 'create-new-school', 'icon' => 'cog', 'permission' => 'settings-info', 'labelKey' => 'Sidebar.setting'],
                    ['route' => 'system-lookup', 'icon' => 'shield', 'permission' => null, 'labelKey' => 'Sidebar.look_up'],
                    ['route' => 'backup.index', 'icon' => 'database', 'permission' => 'backup-list', 'labelKey' => 'Sidebar.backup'],
                    ['route' => 'roles.index', 'icon' => 'lock', 'permission' => 'role-list', 'labelKey' => 'Sidebar.permission'],
                ],
            ],
            'report' => [
                'labelKey' => 'Sidebar.report',
                'permissions' => [],
                'items' => [
                    ['route' => 'report.index', 'icon' => 'bar-chart', 'permission' => null, 'labelKey' => 'Sidebar.report'],
                ],
            ],
            'admin_era' => [
                'labelKey' => 'Sidebar.admin_era',
                'permissions' => [],
                'isAdmin' => true,
                'items' => [
                    ['route' => 'admin_era.index', 'icon' => 'user-secret', 'permission' => null, 'labelKey' => 'Sidebar.admin_era'],
                ],
            ],
        ];
    }

    public static function getVisibleNavGroups(): array
    {
        $user = Auth::user();

        if (! $user) {
            return [];
        }

        $groups = self::getNavGroups();
        $visible = [];

        foreach ($groups as $key => $group) {
            $hasPermission = empty($group['permissions']);

            if (! $hasPermission && $user->hasAnyPermission($group['permissions'])) {
                $hasPermission = true;
            }

            if (isset($group['isAdmin']) && $group['isAdmin'] && ! $user->isAdmin) {
                $hasPermission = false;
            }

            if (! $hasPermission) {
                continue;
            }

            $filteredItems = [];

            foreach ($group['items'] as $item) {
                if (isset($item['permission']) && $item['permission'] && ! $user->can($item['permission'])) {
                    continue;
                }

                $filteredItems[] = $item;
            }

            $filteredSubgroups = [];

            if (isset($group['subgroups'])) {
                foreach ($group['subgroups'] as $subKey => $subgroup) {
                    $hasSubPermission = empty($subgroup['permissions']);

                    if (! $hasSubPermission && $user->hasAnyPermission($subgroup['permissions'])) {
                        $hasSubPermission = true;
                    }

                    if (! $hasSubPermission) {
                        continue;
                    }

                    $filteredSubItems = [];

                    foreach ($subgroup['items'] as $item) {
                        if (isset($item['permission']) && $item['permission'] && ! $user->can($item['permission'])) {
                            continue;
                        }

                        $filteredSubItems[] = $item;
                    }

                    $filteredSubgroups[$subKey] = array_merge($subgroup, ['items' => $filteredSubItems]);
                }
            }

            $visibleGroup = array_merge($group, [
                'items' => $filteredItems,
                'subgroups' => $filteredSubgroups,
            ]);

            $visible[$key] = $visibleGroup;
        }

        return $visible;
    }

    public static function getDashboardWidgets(): array
    {
        return [
            'admin' => [
                'students_count',
                'parents_count',
                'employees_count',
                'revenue_chart',
                'grades_distribution',
                'monthly_revenue_trend',
                'recent_invoices',
            ],
            'teacher' => [
                'my_students_count',
                'my_schedule',
                'upcoming_tasks',
            ],
            'accountant' => [
                'daily_collections',
                'pending_invoices',
                'revenue_summary',
                'recent_transactions',
            ],
        ];
    }
}
