<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountsController extends Controller
{
    public function index(){

        $accounts = Account::all();
        return view('accounts.index',compact('accounts'));
    }

    public function create(){
        return view('accounts.create');
    }

    public function store(Account $account){
        $data = request()->validate([
            'name'=>'required|min:3',
            'balance'=>'numeric'
        ]);

        $account->create($data);
        return redirect('/');
    }

    public function show(Account $account){
        return view('accounts.show',compact('account'));
    }
}
