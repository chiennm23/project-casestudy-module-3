<?php

namespace App\Http\Controllers;

use App\Bill;

use App\Http\Services\BillService;
use Illuminate\Http\Request;

class BillController extends Controller
{
    protected $billService;

    public function __construct(BillService $billService)
    {
        $this->billService = $billService;
    }

    public function index()
    {
        $bills = $this->billService->getAll();
        return view('/bills/list', compact('bills'));
    }
}
