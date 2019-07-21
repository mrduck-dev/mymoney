@extends('layouts.app')

@section('content')
<form action="/account" method="post">
    @csrf
    <div class="form-group">
        <label for="accountName">Account Name</label>
        <input type="text" class="form-control" id="accountName" name="name" placeholder="eg. cash,savings etc.">
    </div>
    <div class="form-group">
            <label for="accountBalance">Starting Balance</label>
            <input type="number" class="form-control" id="accountBalance" name="balance" placeholder="0">
        </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection