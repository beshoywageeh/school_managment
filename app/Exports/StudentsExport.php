<?php

namespace App\Exports;

use App\Models\Student;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromArray,WithHeadings,ShouldAutoSize
{
  protected $data;
  public function __construct($data)
  {
      $this->data=$data;
  }
  public function headings(): array
  {
     $headings=[];
     foreach ($this->data->toArray()[0]as $key=>$value){
         $headings[]=Student::HEADINGS[$key];
     }
     return $headings;
  }

    public function array(): array
  {
      return $this->data->toArray();
  }
}
