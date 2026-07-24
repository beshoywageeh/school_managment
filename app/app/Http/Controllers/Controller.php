<?php

namespace App\Http\Controllers;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function executeInTransaction(callable $callback): mixed
    {
        return app(ConnectionInterface::class)->transaction($callback);
    }
}
