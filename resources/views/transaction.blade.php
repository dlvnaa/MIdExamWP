@extends('main')

@section('container')

{{-- @dd($transaction) --}}

<div class="p-3">
    <h1>Transaction</h1>

    @foreach ($transaction as $item)
    <div class="m-3 rounded p-3 bg-gradient bg-primary text-white">
        <p>Name : {{$item->user->name}}</p>

        <p>Coffee : {{$item->coffee->name}}</p>
        <p>Timestamp : {{date('d M Y', strtotime($item->created_at))}}</p>
    </div>

    @endforeach

</div>

@endsection