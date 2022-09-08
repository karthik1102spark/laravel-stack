<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EmployeesExport;
use Excel;

class ExportController extends Controller
{
    // Excel Export
    public function exportExcel(){
        $file_name = 'records-'.date('Y_m_d_H_i_s').'.xlsx';
        return Excel::download(new EmployeesExport, $file_name);
     }
}
