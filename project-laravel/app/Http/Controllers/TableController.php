<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function viewMaster()
    {
        return view('layout.master');
    }

    public function viewTable()
    {
        return view('table');
    }

    public function viewDataTable()
    {
        return view('data-table');
    }
}
