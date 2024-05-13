<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemLogs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'system_logs';

    protected $guarded = [];
    protected $casts = ['data' => 'array'];
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function syslog_action()
    {
        switch ($this->action) {
            case 'store':
                return "<span class='badge badge-success'>" . trans('system_lookup.create') . " </span>";
                break;
            case 'update':
                return "<span class='badge badge-warning'>" . trans('system_lookup.update') . " </span>";
                break;
            default:
                return "<span class='badge badge-danger'>" . trans('system_lookup.delete') . " </span>";
        }
    }
    public function syslog_table()
    {
        if (isset($this->data)) {
            print_r('<tr>
            <td colspan="6">' . trans('system_lookup.data') . '</td></tr>
            <tr>');
            foreach ($this->data as $ke) {
                switch ($this->action) {
                    case 'store':
                        print_r('<td>' . trans('system_lookup.name') . $ke['name']  . '</td>');

                        break;
                    case 'update':
                        break;
                    default;
                }
            }
            print_r('</tr>');
        }
    }
}