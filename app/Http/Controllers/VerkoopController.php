<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\OrderRules;
use App\Models\Article;
use App\Models\Unit;

class VerkoopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('verkoper.orders', ['orders'=>$orders]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        // dd($order);
        return view('verkoper.order_rules', ['order'=>$order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('verkoper.edit_rule');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add_order()
    {
        return view('verkoper.add_order');
    }

    public function edit_rule($id)
    {
        $order = OrderRules::find($id);
        $articles = Article::all();
        $units = Unit::all();
        return view('verkoper.edit_rule', ['order'=>$order, 'articles'=>$articles, 'units'=>$units]);
    }

    public function add_rule($id)
    {
        $articles = Article::all();
        $units = Unit::all();
        return view('verkoper.add_rule', ['articles'=>$articles, 'units'=>$units]);
    }
}
