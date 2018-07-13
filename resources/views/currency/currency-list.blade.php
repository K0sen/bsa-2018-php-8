@extends('layout.layout')

@section('title', 'Currency market')

@section('header')
    @parent
@endsection

@section('content')
    <h1 class="text-center">Currency market</h1>
    @if (count($currencies) > 0)
        @include('currency.currency-table', ['currencies' => $currencies])
    @else
        <strong>No currencies</strong>
    @endif
@endsection