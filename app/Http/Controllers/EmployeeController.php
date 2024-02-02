<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CrudController;
use App\Models\Employee;

class EmployeeController extends CrudController
{
    public function __construct() 
    {

        $this->model = new Employee();
    }
}
