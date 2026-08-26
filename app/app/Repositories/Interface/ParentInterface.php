<?php

namespace App\Repositories\Interface;

interface ParentInterface
{
    public function getAllParents();

    public function createParent($request);
}
