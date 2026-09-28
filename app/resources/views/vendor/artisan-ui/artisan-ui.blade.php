<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>MoraSoft Artisan GUI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script>
        (function () {
            var prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            var theme = localStorage.getItem('theme') || (prefersDark ? 'dark' : 'light');
            document.documentElement.classList.toggle('dark', theme === 'dark');
        })();
    </script>
    <style>
        :root {
            --bg: #f3f4f6;
            --surface: #ffffff;
            --border: #e5e7eb;
            --border-strong: #d1d5db;
            --text: #1f2937;
            --text-muted: #6b7280;
            --text-faint: #9ca3af;
            --accent: #4f46e5;
            --accent-hover: #4338ca;
            --accent-soft: #eef2ff;
            --accent-soft-text: #3730a3;
            --success-bg: #ecfdf5;
            --success-border: #a7f3d0;
            --success-text: #065f46;
            --error-bg: #fff1f2;
            --error-border: #fecdd3;
            --error-text: #9f1239;
            --warn-bg: #fffbeb;
            --warn-border: #fde68a;
            --warn-text: #92400e;
            --shadow: 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.06);
        }

        html.dark {
            --bg: #030712;
            --surface: #111827;
            --border: #1f2937;
            --border-strong: #374151;
            --text: #e5e7eb;
            --text-muted: #9ca3af;
            --text-faint: #6b7280;
            --accent: #6366f1;
            --accent-hover: #818cf8;
            --accent-soft: #312e81;
            --accent-soft-text: #e0e7ff;
            --success-bg: #022c22;
            --success-border: #065f46;
            --success-text: #a7f3d0;
            --error-bg: #4c0519;
            --error-border: #881337;
            --error-text: #fecdd3;
            --warn-bg: #451a03;
            --warn-border: #92400e;
            --warn-text: #fde68a;
        }

        * {
            box-sizing: border-box;
        }

        html.dark {
            color-scheme: dark;
        }

        body {
            margin: 0;
            font-family: ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            -webkit-font-smoothing: antialiased;
            line-height: 1.5;
        }

        .page {
            max-width: 1152px;
            margin: 0 auto;
            padding: 24px 16px;
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 12px;
            box-shadow: var(--shadow);
        }

        /* Header */
        .header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 20px 24px;
            margin-bottom: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 22px;
            font-weight: 700;
            color: var(--text);
        }

        .brand-mark {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--accent);
            color: #ffffff;
            flex-shrink: 0;
        }

        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.25;
        }

        .badge {
            margin-top: 4px;
            width: fit-content;
            font-size: 12px;
            font-weight: 500;
            background: var(--accent-soft);
            color: var(--accent-soft-text);
            border-radius: 999px;
            padding: 1px 8px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Buttons */
        .icon-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: transparent;
            color: var(--text-muted);
            cursor: pointer;
            transition: background 0.15s ease;
        }

        .icon-btn:hover {
            background: rgba(0, 0, 0, 0.04);
        }

        html.dark .icon-btn:hover {
            background: rgba(255, 255, 255, 0.06);
        }

        .icon-btn:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 0;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            padding: 8px 16px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.15s ease;
        }

        .btn:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px;
        }

        .btn-primary {
            background: var(--accent);
            color: #ffffff;
        }

        .btn-primary:hover {
            background: var(--accent-hover);
        }

        .btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .spin {
            display: none;
            width: 16px;
            height: 16px;
            border: 2px solid rgba(255, 255, 255, 0.35);
            border-top-color: #ffffff;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
        }

        .btn.loading .spin {
            display: inline-block;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Workspace */
        .workspace {
            display: flex;
            flex-direction: column;
            padding: 16px;
        }

        @media (min-width: 1024px) {
            .workspace {
                flex-direction: row;
            }
        }

        /* Tabs */
        .tabs {
            display: flex;
            flex-direction: column;
            gap: 4px;
            padding-bottom: 12px;
            margin-bottom: 12px;
            border-bottom: 1px solid var(--border);
        }

        @media (min-width: 1024px) {
            .tabs {
                width: 240px;
                flex-shrink: 0;
                padding-right: 16px;
                padding-bottom: 0;
                margin-bottom: 0;
                border-bottom: 0;
                border-right: 1px solid var(--border);
            }
        }

        .tab-button {
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
            text-align: left;
            padding: 10px 14px;
            border: 0;
            border-radius: 8px;
            background: transparent;
            color: var(--text);
            font-size: 14px;
            font-family: inherit;
            cursor: pointer;
            transition: background 0.15s ease, color 0.15s ease;
        }

        .tab-button:hover {
            background: rgba(0, 0, 0, 0.04);
        }

        html.dark .tab-button:hover {
            background: rgba(255, 255, 255, 0.06);
        }

        .tab-button:focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: -2px;
        }

        .tab-button[aria-selected='true'] {
            background: var(--accent-soft);
            color: var(--accent-soft-text);
            font-weight: 600;
        }

        .tab-button .tab-icon {
            color: var(--text-faint);
            flex-shrink: 0;
        }

        .tab-button[aria-selected='true'] .tab-icon {
            color: var(--accent);
        }

        /* Panels */
        .panels {
            flex: 1;
        }

        @media (min-width: 1024px) {
            .panels {
                padding-left: 18px;
            }
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.active {
            display: block;
        }

        /* Forms */
        .form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .field label,
        .field .field-label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            font-size: 14px;
        }

        .input,
        .select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border-strong);
            border-radius: 8px;
            background: var(--surface);
            color: var(--text);
            font-size: 14px;
            font-family: inherit;
        }

        .input::placeholder {
            color: var(--text-faint);
        }

        .input:focus,
        .select:focus {
            outline: 2px solid var(--accent);
            outline-offset: 0;
            border-color: var(--accent);
        }

        .checkbox-row {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
        }

        .checkbox {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            cursor: pointer;
        }

        .checkbox input {
            width: 16px;
            height: 16px;
            accent-color: var(--accent);
        }

        .stack {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        /* Inline warning */
        .warning {
            display: none;
            margin-top: 10px;
            padding: 8px 12px;
            border: 1px solid var(--warn-border);
            border-radius: 8px;
            background: var(--warn-bg);
            color: var(--warn-text);
            font-size: 13px;
            font-weight: 500;
        }

        .warning.show {
            display: block;
        }

        .danger-option {
            color: #9f1239;
        }

        html.dark .danger-option {
            color: #fda4af;
        }

        /* Output alert */
        .alert {
            margin-top: 24px;
            padding: 16px;
            border: 1px solid var(--success-border);
            border-radius: 12px;
            background: var(--success-bg);
            color: var(--success-text);
        }

        .alert.error {
            border-color: var(--error-border);
            background: var(--error-bg);
            color: var(--error-text);
        }

        .alert-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .alert pre {
            margin: 0;
            white-space: pre-wrap;
            word-break: break-word;
            font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
            font-size: 13px;
        }

        /* Theme icons */
        .icon-sun {
            display: none;
        }

        .icon-moon {
            display: block;
        }

        html.dark .icon-sun {
            display: block;
        }

        html.dark .icon-moon {
            display: none;
        }
    </style>
</head>

<body>

    <div class="page">

        <!-- Header -->
        <header class="card header">
            <div class="brand">
                <span class="brand-mark">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 6v6h4" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                </span>
                <span class="brand-text">
                    MoraSoft Artisan GUI
                    <span class="badge">v1.0</span>
                </span>
            </div>

            <div class="header-actions">
                <button id="theme-toggle" type="button" class="icon-btn" aria-label="Toggle dark mode">
                    <svg class="icon-sun" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="4" />
                        <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41" />
                    </svg>
                    <svg class="icon-moon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                    </svg>
                </button>

                <a href="https://github.com/Samir-Gamal/morasoft-artisan-ui/issues" target="_blank" rel="noopener noreferrer"
                    class="btn btn-primary">
                    Report issue
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6" />
                        <path d="M15 3h6v6M10 14L21 3" />
                    </svg>
                </a>
            </div>
        </header>

        <!-- Tabs layout -->
        <div class="card workspace">
            @php
                $tabs = [
                    'model' => ['label' => 'Model', 'field' => 'model_name', 'placeholder' => 'Post'],
                    'controller' => [
                        'label' => 'Controller',
                        'field' => 'controller_name',
                        'placeholder' => 'PostController',
                    ],
                    'migration' => [
                        'label' => 'Migration',
                        'field' => 'migration_name',
                        'placeholder' => 'create_posts_table',
                    ],
                    'seeder' => ['label' => 'Seeder', 'field' => 'seeder_name', 'placeholder' => 'PostSeeder'],
                    'validation' => [
                        'label' => 'Validation',
                        'field' => 'request_name',
                        'placeholder' => 'StorePostRequest',
                    ],
                    'event' => ['label' => 'Event', 'field' => 'event_name', 'placeholder' => 'PodcastProcessed'],
                    'listener' => [
                        'label' => 'Listener',
                        'field' => 'listener_name',
                        'placeholder' => 'SendPodcastNotification',
                    ],
                    'artisan' => ['label' => 'Artisan'],
                ];
                $dangerous = ['migrate:refresh', 'migrate:fresh'];
            @endphp

            <!-- Vertical tabs -->
            <nav class="tabs" id="tabs" role="tablist" aria-label="Artisan tools" aria-orientation="vertical">
                @foreach ($tabs as $key => $tab)
                    @php
                        $icons = [
                            'model' => '<path d="M12 20h9"/><path d="M3 6h18M3 10h18M3 14h18M3 18h18"/>',
                            'controller' =>
                                '<rect x="2" y="7" width="20" height="10" rx="2" ry="2" /><circle cx="12" cy="12" r="3" />',
                            'migration' =>
                                '<ellipse cx="12" cy="5" rx="9" ry="3" /><path d="M3 5v14c0 1.5 4 3 9 3s9-1.5 9-3V5" />',
                            'seeder' =>
                                '<path d="M12 2a10 10 0 00-3 19.47M12 2a10 10 0 013 19.47" /><path d="M9 12l3 3 3-3" />',
                            'validation' => '<path d="M5 13l4 4L19 7" />',
                            'event' => '<path d="M13 10V3L4 14h7v7l9-11h-7z" />',
                            'listener' => '<path d="M9 19V6h6v13h4V5a1 1 0 00-1-1H6a1 1 0 00-1 1v14h4z" />',
                            'artisan' => '<path d="M4 5h16M4 12h16M4 19h16" />',
                        ];
                    @endphp
                    <button type="button" role="tab" id="tab-{{ $key }}" aria-controls="panel-{{ $key }}"
                        aria-selected="false" data-tab="{{ $key }}" class="tab-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="tab-icon" width="20" height="20" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            {!! $icons[$key] ?? '' !!}
                        </svg>
                        {{ $tab['label'] }}
                    </button>
                @endforeach
            </nav>

            <!-- Tab content -->
            <div class="panels">
                @foreach ($tabs as $key => $tab)
                    <div class="tab-panel {{ $loop->first ? 'active' : '' }}" id="panel-{{ $key }}" role="tabpanel"
                        aria-labelledby="tab-{{ $key }}">
                        <form method="POST" action="{{ route('artisan.tools.execute') }}"
                            autocomplete="off" class="form" {{ $key === 'artisan' ? 'id=artisan-form' : '' }}>
                            @csrf
                            <input type="hidden" name="type" value="{{ $key }}">

                            @if ($key === 'artisan')
                                <div class="field">
                                    <label for="artisan_command">Artisan Command</label>
                                    <select id="artisan_command" name="artisan_command" class="select" required>
                                        <option value="" disabled selected>-- Select Command --</option>
                                        @foreach (['optimize:clear', 'cache:clear', 'config:clear', 'route:clear', 'route:list', 'view:clear', 'migrate', 'migrate:rollback', 'migrate:refresh', 'migrate:fresh', 'db:seed'] as $cmd)
                                            <option value="{{ $cmd }}"
                                                class="{{ in_array($cmd, $dangerous) ? 'danger-option' : '' }}">
                                                {{ $cmd }}</option>
                                        @endforeach
                                    </select>
                                    <div id="danger-warning" class="warning">
                                        Warning: this command will permanently delete all data. You will be asked to confirm before it runs.
                                    </div>
                                </div>
                            @else
                                @isset($tab['field'])
                                    <div class="field">
                                        <label for="{{ $tab['field'] }}">
                                            {{ ucfirst(str_replace('_', ' ', $tab['field'])) }}
                                        </label>
                                        <input id="{{ $tab['field'] }}" class="input" type="text"
                                            name="{{ $tab['field'] }}" placeholder="example: {{ $tab['placeholder'] }}"
                                            required />
                                    </div>
                                @endisset
                            @endif

                            @if ($key === 'model')
                                <div class="checkbox-row">
                                    <label class="checkbox">
                                        <input type="checkbox" name="with[]" value="migration" id="with_migration" />
                                        With:Migration
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="with[]" value="controller" id="with_controller" />
                                        With:Controller
                                    </label>
                                </div>
                            @endif

                            @if ($key === 'controller')
                                <div class="checkbox-row">
                                    <label class="checkbox">
                                        <input type="checkbox" name="with[]" value="resource" id="with_resource" />
                                        With:Resource
                                    </label>
                                </div>
                            @endif

                            @if ($key === 'listener')
                                <div class="stack">
                                    <label class="checkbox">
                                        <input type="checkbox" name="with[]" value="event" id="with_event" />
                                        With:Event
                                    </label>
                                    <input id="event_name_input" class="input" type="text" name="event_name"
                                        placeholder="example: PodcastProcessed" hidden />
                                </div>
                            @endif

                            <div>
                                <button type="submit" class="btn btn-primary" data-submit>
                                    <span class="spin" aria-hidden="true"></span>
                                    <span class="submit-label">Submit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Command output --}}
        @if (session('output'))
            @php
                $output = session('output');
                $isError = str_starts_with($output, '❌');
            @endphp
            <div class="alert {{ $isError ? 'error' : '' }}" role="status">
                <div class="alert-title">
                    @if ($isError)
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M15 9l-6 6M9 9l6 6" />
                        </svg>
                        Command failed
                    @else
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
                            <path d="M22 4L12 14.01l-3-3" />
                        </svg>
                        Command succeeded
                    @endif
                </div>
                <pre>{{ $output }}</pre>
            </div>
        @endif

    </div>

    <script>
        (function () {
            /* Theme toggle */
            document.getElementById('theme-toggle').addEventListener('click', function () {
                var dark = document.documentElement.classList.toggle('dark');
                localStorage.setItem('theme', dark ? 'dark' : 'light');
            });

            /* Tabs */
            var tabs = Array.prototype.slice.call(document.querySelectorAll('#tabs .tab-button'));
            var panels = Array.prototype.slice.call(document.querySelectorAll('.tab-panel'));

            function activateTab(button) {
                var target = button.dataset.tab;

                tabs.forEach(function (tab) {
                    tab.setAttribute('aria-selected', tab === button ? 'true' : 'false');
                });

                panels.forEach(function (panel) {
                    panel.classList.toggle('active', panel.id === 'panel-' + target);
                });

                button.focus({ preventScroll: true });
            }

            tabs.forEach(function (tab, index) {
                tab.addEventListener('click', function () {
                    activateTab(tab);
                });

                tab.addEventListener('keydown', function (event) {
                    if (event.key !== 'ArrowDown' && event.key !== 'ArrowUp') {
                        return;
                    }

                    event.preventDefault();
                    var direction = event.key === 'ArrowDown' ? 1 : -1;
                    activateTab(tabs[(index + direction + tabs.length) % tabs.length]);
                });
            });

            /* Listener: reveal event name field */
            var withEvent = document.getElementById('with_event');
            var eventName = document.getElementById('event_name_input');

            if (withEvent && eventName) {
                function toggleEventInput() {
                    eventName.hidden = !withEvent.checked;
                    if (withEvent.checked) {
                        eventName.focus();
                    }
                }

                withEvent.addEventListener('change', toggleEventInput);
            }

            /* Artisan: inline danger warning + confirm */
            var artisanForm = document.getElementById('artisan-form');

            if (artisanForm) {
                var commandSelect = artisanForm.querySelector('#artisan_command');
                var warning = artisanForm.querySelector('#danger-warning');
                var dangerousCommands = ['migrate:refresh', 'migrate:fresh'];

                commandSelect.addEventListener('change', function () {
                    warning.classList.toggle('show', dangerousCommands.indexOf(commandSelect.value) !== -1);
                });

                artisanForm.addEventListener('submit', function (event) {
                    if (dangerousCommands.indexOf(commandSelect.value) !== -1) {
                        var proceed = confirm('Warning: this command will permanently delete data. Continue?');
                        if (!proceed) {
                            event.preventDefault();
                        }
                    }
                });
            }

            /* Disable submit buttons while running */
            Array.prototype.slice.call(document.querySelectorAll('form[method="POST"]')).forEach(function (form) {
                form.addEventListener('submit', function () {
                    var btn = form.querySelector('[data-submit]');
                    if (!btn || btn.disabled) {
                        return;
                    }

                    btn.disabled = true;
                    btn.classList.add('loading');
                    btn.querySelector('.submit-label').textContent = 'Running...';
                });
            });
        })();
    </script>

</body>

</html>