@extends('layouts.app')

@section('content')
    @isset($accounts)
    <ul class="list-group">
        @foreach ($accounts as $account)
            <li class="list-group-item"><a href="/account/{{$account->id}}">{{$account->name}}</a><span class="ml-4">{{ number_format($account->balance)}}</span></li>
        @endforeach
    </ul>
    @endisset

    <div>
        <ul class="list-unstyled">
            <li><a href="/transactions/create">Add New Transaction</a></li>
        </ul>
    </div>
@endsection