<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Account;

class TransactionsController extends Controller
{
    public function show(){

       $transactions =  Transaction::all();
        return view('transactions.show',compact('transactions'));
    }

    public function create(){

        $accounts = Account::all();
        return view('transactions.create',compact('accounts'));
    }

    public function store(Transaction $transaction,Account $account){
        
        $transaction->account_id = request('account');
        $transaction->date = request('date');
        $transaction->amount = request('amount');
        $transaction->type = request('type');

    

        /* Move this to observer */
        if (request('type')==='Expense') {
            Account::where('id', request('account'))->decrement('balance', $transaction->amount);
        } elseif(request('type')==='Income') {
            Account::where('id', request('account'))->increment('balance', $transaction->amount);
        }

        $transaction->save();

        return redirect('/');
        
    }
}
