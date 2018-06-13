<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use App\Student;

class FeesController extends Controller
{

    public function insertFees(Request $request){

        $request->validate([
        'studentid' => 'required|integer|max:10',
        'accname'=> 'required',
        'accnumber'=> 'required|integer|max:20',
        'amount'=> 'required|integer|max:10',
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
