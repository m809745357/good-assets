<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;

class BillingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $billing = auth()->user()->myBilling();
        return view('user.billings', compact('billing'));
    }

    public function update(Request $request, Billing $billing)
    {
        $billing->fill($request->all())->save();

        return $billing;
    }
}
