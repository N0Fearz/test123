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
        $customer = new Customer();
        $customer->company_name = $request->input('companyname');
        $customer->contact_name = $request->input('contactperson');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->save();
        
        $order = new Order();
        $order->customer_id = $customer->id;
        $order->rounded = false;
        $order->save();

        return redirect()->route('verkoper_index');
    }

    public function store_rule(Request $request)
    {
        $order_rule = new OrderRules();
        $order_rule->order_id = $request->input('ordernumber');
        $order_rule->article_id = $request->input('article');
        $order_rule->unit_id = $request->input('unit');
        $order_rule->aantal = $request->input('number');
        $order_rule->save();

        return redirect()->route('verkoper_index');
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
        $order = Order::find($id);
        // dd($order->customer->company_name);

        $order->customer->company_name = $request->input('companyname');
        $order->customer->contact_name = $request->input('contact');
        $order->customer->phone = $request->input('phone');
        $order->customer->email = $request->input('email');

        $order->customer->save();
        return redirect()->route('verkoper_index');
    }

    public function update_rule(Request $request, $id)
    {
        $order_rule = OrderRules::find($id);
        // dd($order->customer->company_name);

        $order_rule->article_id = $request->input('article');
        $order_rule->unit_id = $request->input('unit');
        $order_rule->aantal = $request->input('number');

        $order_rule->save();
        return redirect()->route('verkoper_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrderRules::find($id)->delete();
        return redirect()->route('verkoper_index');
    }

    public function add_order()
    {
        return view('verkoper.add_order');
    }

    public function edit_rule($id)
    {
        $order_rule = OrderRules::where('order_id', $id)->firstOrFail();
        $order = Order::find($id);
        $articles = Article::all();
        $units = Unit::all();
        return view('verkoper.edit_rule', ['order'=>$order, 'articles'=>$articles, 'units'=>$units, 'order_rule'=>$order_rule]);
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add_rule($id)
    {
        $orderid = $id;
        $articles = Article::all();
        $units = Unit::all();
        return view('verkoper.add_rule', ['articles'=>$articles, 'units'=>$units, 'orderid'=>$id]);
    }

    public function edit_order($id)
    {
        $order = Order::find($id);
        return view('verkoper.edit_order', ['order'=>$order]);
    }
}
