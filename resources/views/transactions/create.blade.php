@extends('layouts.app')

@section('content')
<form action="/transactions" method="post">
    @csrf
    <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" id="amount" name="amount" placeholder="0">
        </div>
        <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
        <div class="form-group">
            <label for="account">Select Account</label>
            <select class="form-control" id="account" name="account">
                @foreach ($accounts as $account)
                    <option value="{{$account->id}}">{{$account->name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
                <label for="transactionType">Type of transaction</label>
                <select class="form-control" id="transactionType" name="type">
                   <option>Income</option>
                   <option>Expense</option>
                </select>
              </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection