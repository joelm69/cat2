<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use App\Student;

class FeesController extends Controller
{

    public function insertFees(Request $request){

        $request->validate([
        'studentid' => 'required|integer|max:999999',
        'accname'=> 'required',
        'accnumber'=> 'required',
        'amount'=> 'required|integer|max:10000000',
        'method'=> 'required'
        ]);

        $fees = new Fees();
        $fees->studentid    = request('studentid');
        $fees->accname      = request('accname');
        $fees->accnumber    = request('accnumber');
        $fees->amount       = request('amount');
        $fees->method       = request('method');
        $fees->save();

        return redirect('/fees')->with('status', 'Payment recorded successfully!');
    }

    public function getHistory($id){
        $table=Fees::all()->where('studentid', $id);
        return view('patricknjenga.history')->with('table',$table);
    }
}
