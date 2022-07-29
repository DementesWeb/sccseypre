<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;
use Inertia\Inertia;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //$customer = Customer::all();
        //$customer = Customer::latest()->get();

        $filters = $request->all('search');

        $customer = Customer::latest()
            ->filter($filters)
            ->paginate();


        return Inertia::render('Customers/Index',compact('customer','filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('Customers/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre_y_apellido' => 'required',
            'cedula' => 'required',
            'cargo'=>  'nullable',
            'sueldo'=> 'nullable',
            'sobresueldo'=> 'nullable',
            'sueldo_neto'=> 'nullable',
            'v35_porciento'=> 'nullable',
            'v25_porciento'=> 'nullable',
            'v20_porciento'=> 'nullable',
            'COD_1'=> 'nullable',
            'DES_1'=> 'nullable',
            'FEC_1'=> 'nullable',
            'COD_2'=> 'nullable',
            'DES_2'=> 'nullable',
            'FEC_2'=> 'nullable',
            'COD_3'=> 'nullable',
            'DES_3'=> 'nullable',
            'FEC_3'=> 'nullable',
            'COD_4'=> 'nullable',
            'DES_4'=> 'nullable',
            'FEC_4'=> 'nullable',
            'COD_5'=> 'nullable',
            'DES_5'=> 'nullable',
            'FEC_5'=> 'nullable',
            'COD_6'=> 'nullable',
            'DES_6'=> 'nullable',
            'FEC_6'=> 'nullable',
            'COD_7'=> 'nullable',
            'DES_7'=> 'nullable',
            'FEC_7'=> 'nullable',
            'COD_8'=> 'nullable',
            'DES_8'=> 'nullable',
            'FEC_8'=> 'nullable',
            'COD_9'=> 'nullable',
            'DES_9'=> 'nullable',
            'FEC_9'=> 'nullable',
            'COD_10'=> 'nullable',
            'DES_10'=> 'nullable',
            'FEC_10'=> 'nullable',
            'COD_11'=> 'nullable',
            'DES_11'=> 'nullable',
            'FEC_11'=> 'nullable',
            'COD_12'=> 'nullable',
            'DES_12'=> 'nullable',
            'FEC_12'=> 'nullable',
        ]);
        
        //$customer = Customer::create($data);
        $customer = Customer::create($data);
    
        //return redirect()->route('customres.edit', $customer);
        $customer = cache('cachedb',$customer,now()->addMinutes(5));

        return Inertia::render('Customers/Edit',compact('customer'));
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
        return Inertia::render('Customers/Edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecustomerRequest  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        $data = $request->validate([
            'nombre_y_apellido' => 'required',
            'cedula' => 'required',
            'cargo'=>  'nullable',
            'sueldo'=> 'nullable',
            'sobresueldo'=> 'nullable',
            'sueldo_neto'=> 'nullable',
            'v35_porciento'=> 'nullable',
            'v25_porciento'=> 'nullable',
            'v20_porciento'=> 'nullable',
            'COD_1'=> 'nullable',
            'DES_1'=> 'nullable',
            'FEC_1'=> 'nullable',
            'COD_2'=> 'nullable',
            'DES_2'=> 'nullable',
            'FEC_2'=> 'nullable',
            'COD_3'=> 'nullable',
            'DES_3'=> 'nullable',
            'FEC_3'=> 'nullable',
            'COD_4'=> 'nullable',
            'DES_4'=> 'nullable',
            'FEC_4'=> 'nullable',
            'COD_5'=> 'nullable',
            'DES_5'=> 'nullable',
            'FEC_5'=> 'nullable',
            'COD_6'=> 'nullable',
            'DES_6'=> 'nullable',
            'FEC_6'=> 'nullable',
            'COD_7'=> 'nullable',
            'DES_7'=> 'nullable',
            'FEC_7'=> 'nullable',
            'COD_8'=> 'nullable',
            'DES_8'=> 'nullable',
            'FEC_8'=> 'nullable',
            'COD_9'=> 'nullable',
            'DES_9'=> 'nullable',
            'FEC_9'=> 'nullable',
            'COD_10'=> 'nullable',
            'DES_10'=> 'nullable',
            'FEC_10'=> 'nullable',
            'COD_11'=> 'nullable',
            'DES_11'=> 'nullable',
            'FEC_11'=> 'nullable',
            'COD_12'=> 'nullable',
            'DES_12'=> 'nullable',
            'FEC_12'=> 'nullable', 
        ]);

        $customer->update($data);

        return Inertia::render('Customers/Edit',compact('customer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
