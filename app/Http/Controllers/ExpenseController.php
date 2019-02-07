<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addexpense(Request $request){
    	dd($request->all());
    }

    public function expenses(){
    	return view('expenses.expense');
    }
}
