@extends('layouts.app')

@section('content')
    @isset($accounts)
    <ul>
        @foreach ($accounts as $account)
            <li><a href="#">{{$account->name}}</a><span>{{$account->balance}}</span></li>
        @endforeach
    </ul>
        
    @endisset
@endsection