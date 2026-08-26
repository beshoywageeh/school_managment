<?php

namespace App\Repositories\Interface;

interface StudentInterface
{
    public function getAllStudents();

    public function storeStudent($request, $parent);

    public function editStudent($studentId);

    public function updateStudent($request);

    public function showStudent($studentId);
}
