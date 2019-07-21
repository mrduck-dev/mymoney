<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Account;

class TransactionsController extends Controller
{
    public function create(){

        $accounts = Account::all();
        return view('transactions.create',compact('accounts'));
    }

    public function store(Transaction $transaction){

        /* $data = request()->validate([
            'amount'=>'required',
            'date'=>'required',
            'account'=>'required',
            'type'=>'required'
        ]); */
        
            if (request()->input('type') === 'Income') {
                $transaction->income = request()->input('amount');
            } elseif(request()->input('type') === 'Expense') {
                $transaction->expense = request()->input('amount');
            }
            
        $transaction->date = request()->input('date');
        $transaction->account_id = request()->input('account');

        $transaction->save();

        return redirect('/');
    }
}
