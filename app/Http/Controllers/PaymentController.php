<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payment = Enrollment::pluck('enroll_no', 'id');
        return view('payments.create', compact('payment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $payment = new Payment();
        $payment->enrollment_id =  $request->input('enrollment_id');
        $payment->paid_date = $request->input('paid_date');
        $payment->fee = $request->input('fee');

        $payment->save();

        return redirect()->route('payments');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paymentID = Crypt::decrypt($id);
        $payment = Payment::find($paymentID);

        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paymentID = Crypt::decrypt($id);
        $payment = Payment::find($paymentID);

        return view('payments.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paymentID = Crypt::decrypt($request->input('id'));
        $payment = Payment::find($paymentID);

        $payment->enrollment_id = $request->input('enrollment_id');
        $payment->paid_date = $request->input('paid_date');
        $payment->fee = $request->input('fee');

        $payment->save();

        return redirect()->route('payments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paymentID = Crypt::decrypt($id);
        $payment = Payment::find($paymentID);

        $payment->delete();

        return redirect()->route('payments');
    }
}
