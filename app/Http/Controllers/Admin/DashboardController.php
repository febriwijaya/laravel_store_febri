<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
      $customer = User::count();
      $revenue = Transaction::sum('total_price');
      $transaction = Transaction::count();
      return view('pages.admin.dashboard', [
        'customer' => $customer,
        'revenue' => $revenue,
        'transaction' => $transaction
      ]);
    }
}
