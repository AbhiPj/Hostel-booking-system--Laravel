<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Payment;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $booking = Bookings::all();
        return view('user.payment',compact('booking'));
    }

    public function viewPayment($id)
    {
        $rooms = Rooms::find($id);
        return view('user.payment',compact('rooms'));
    }

    public function checkout(Request $request)
    {
        $roomId=$request->roomId;
        $rooms = Rooms::find($roomId);
        $userId= Auth::id();


        $booking = new Bookings();
        $booking->userId=$userId;
        $booking->roomId=$rooms->id;
        $booking->price=$rooms->price;
        $booking->paymentStatus=$request->paymentMethod;
        $booking->save();

        $bookingId= $booking->id;
        $payment = new Payment();
        $payment->bookingId=$bookingId;
        $payment->paymentMethod=$request->paymentMethod;
        $payment->price=$rooms->price;
        $payment->save();




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}