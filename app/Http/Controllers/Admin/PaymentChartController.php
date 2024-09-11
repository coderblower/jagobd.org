<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\PaymentChart;
use App\Models\User;
use App\Models\Position;

class PaymentChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentCharts = PaymentChart::with(['user', 'position'])->get();
        return view('payment_charts.index', compact('paymentCharts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Assuming you have a form to create payment charts
        $users = User::all();
        $positions = Position::all();
        return view('payment_charts.create', compact('users', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required',
            'position_id' => 'required',
            'amount' => 'required',
        ]);

        PaymentChart::create($request->all());

        return redirect()->route('payment-charts.index')->with('success', 'Payment chart created successfully.');
    }

    // Other controller methods for show, edit, update, destroy...
}
