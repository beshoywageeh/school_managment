<?php

namespace App\Repositories\Eloquent;

use App\Models\MyParent;
use App\Repositories\Interface\ParentInterface;
use Illuminate\Support\Facades\Auth;

class ParentRepository implements ParentInterface
{
    public function getAllParents() {}

    public function createParent($request)
    {
        $parent = MyParent::find($request['parent_id']);
        if (is_null($parent)) {
            $parent = MyParent::Create([
                'father_name' => $request['parent_id'],
                'religion' => $request->religion,
                'user_id' => Auth::id(),
                'school_id' => Auth::user()->school_id,
            ]);
        }

        return $parent;
    }
}
