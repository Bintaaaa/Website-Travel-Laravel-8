<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'pending' => Transaction::where('trasaction_status', 'PENDING')->count(),
            'success' => Transaction::where('trasaction_status', 'SUCCESS')->count(),
        ]);
    }
}
