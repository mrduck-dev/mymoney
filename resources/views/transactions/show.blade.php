@extends('layouts.app')

@section('content')

<ul class="list-group">
    @foreach ($transactions as $transaction)
        <li class="list-group-item">
            <span class="ml-4">{{ $transaction->type}}</span>
         
            @if ($transaction->type === 'Expense')
            <span class="ml-4 text-danger">-{{ $transaction->amount}}</span>
            @else
            <span class="ml-4 text-success">+{{ $transaction->amount}}</span>
            @endif
            <span class="ml-4">{{ $transaction->amount}}</span>
            <span class="ml-4">{{ $transaction->date}}</span>
            <span class="ml-4">{{ $transaction->account->name}}</span>
        </li>
    @endforeach
</ul>
    
@endsection