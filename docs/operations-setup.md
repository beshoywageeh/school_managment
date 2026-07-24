# Operations Setup

## Supervisor — Queue Worker

This application uses a dedicated `logs` queue for background activity logging. Supervisor keeps the worker alive and restarts it on failure.

### Program Configuration

Create `/etc/supervisor/conf.d/school-managment-worker.conf`:

```ini
[program:school-managment-logs]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/school_managment/artisan queue:work --sleep=3 --tries=3 --max-time=3600 --queue=logs
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=1
redirect_stderr=true
stdout_logfile=/var/log/supervisor/school-managment-logs.log
stopwaitsecs=3600
```

### Key Directives

| Directive | Purpose |
|---|---|
| `--queue=logs` | Process only the `logs` queue |
| `--max-time=3600` | Restart the worker after 1 hour to prevent memory leaks |
| `--sleep=3` | Wait 3 seconds between jobs when the queue is empty |
| `--tries=3` | Retry a failed job up to 3 times before discarding |
| `autorestart=true` | Automatically restart if the worker exits unexpectedly |

### Managing Workers

```bash
# After changing supervisor config
sudo supervisorctl reread
sudo supervisorctl update

# Restart workers (e.g. after a deployment)
sudo supervisorctl restart school-managment-logs:*

# Check worker status
sudo supervisorctl status

# View worker logs
tail -f /var/log/supervisor/school-managment-logs.log
```

---

## Cron — Scheduled Tasks

The Laravel scheduler must be driven by a system cron entry that runs every minute.

### Cron Entry

```bash
* * * * * cd /var/www/school_managment && php artisan schedule:run >> /dev/null 1>&1
```

To add it:

```bash
crontab -e -u www-data
```

Then paste the line above and save.

### Registered Scheduled Tasks

The application's schedule is defined in `app/Console/Kernel.php`:

| Task | Frequency | Command |
|---|---|---|
| Database backup | Daily at 14:00 | `backup:run` |

To add more scheduled tasks, edit the `schedule()` method in `app/Console/Kernel.php`.
