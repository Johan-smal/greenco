<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of customers.
     *
     * @return Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view()->make('customer.index')
            ->with('customers', $customers);
    }

    /**
     * Show the form for creating a new customer.
     *
     * @return Response
     */
    public function create()
    {
        return view()->make('customer.create');
    }

    /**
     * Store a newly created customer in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'number' => 'required',
        ]);

        $customer = new Customer($validatedData);
        
        $customer->save();

        return redirect(route('customers.index'));
    }

    /**
     * Display the specified customer.
     *
     * @param  Customer  $customer
     * @return Response
     */
    public function show(Customer $customer)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
