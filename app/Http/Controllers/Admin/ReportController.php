<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Purchase;
use App\Sale;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function search()
    {
        return view('admin.report.search');
    }

    public function show(Request $request)
    {
        $month = $request->month;
        $year = $request->year;

        $sales = Sale::whereMonth('created_at', $month)
                       ->whereYear('created_at', $year)
                       ->get();

                       // return $sales;


        $purchases = Purchase::whereMonth('created_at', $month)
                       ->whereYear('created_at', $year)
                       ->get();

  // return $purchases;
         return view('admin.report.index', compact('sales','purchases'));
    }
}
