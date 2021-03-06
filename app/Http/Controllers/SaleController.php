<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sale;
use App\product;
use App\provider;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $products=product::orderBy('id','DESC')->paginate(3);
        $providers=provider::orderBy('id','DESC')->paginate(3);;
        $sales=sale::orderBy('id','DESC')->paginate(3);
        return view('sale.index',compact('sales','products','providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $products=product::get();
        $providers=provider::get();
        return view('sale.create', compact('products','providers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'quantity'=>'required', 'products_id'=>'required', 'providers_id'=>'required']);
        Sale::create($request->all());
        return redirect()->route('sale.index')->with('success','Record created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $sale=sale::find($id);
        return view('sale.edit',compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'quantity'=>'required','longitud'=>'required','latitud'=>'required', 'products_id'=>'required', 'providers_id'=>'required']);
        sale::find($id)->update($request->all());
        return redirect()->route('sale.index')->with('success','Record successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sale::find($id)->delete();
        return redirect()->route('sale.index')->with('success','Record successfully deleted');
    }
}
