<?php

namespace App\Http\Controllers;

use App\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        $bills = Bill::all();
        return view('/bills/list', compact('bills'));
    }

    public function creat()
    {
        return view('/bills/create');
    }

    public function add()
    {

    }
}
