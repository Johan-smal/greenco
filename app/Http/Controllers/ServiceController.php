<?php

namespace App\Http\Controllers;

use App\Service;
use App\Customer;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of services.
     *
     * @return Response
     */
    public function index()
    {
        $services = Service::all();
        return view()->make('services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new service.
     *
     * @return Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view()->make('services.create')
            ->with('customers', $customers);
    }

    /**
     * Store a newly created service in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required',
            'customer_id' => 'required',
            'comment' => 'required|max:255'
        ]);

        $service = new Service($validatedData);
        
        $service->lawn = !!$request->input('lawn');
        $service->trees = !!$request->input('trees');
        $service->rubble = !!$request->input('rubble');
        $service->save();
        
        return redirect(route('services.index'));
    }

    /**
     * Display the specified resource.
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
