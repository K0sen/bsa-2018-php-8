@extends('layout.layout')

@section('title', $currency->title)

@section('content')
    <div class="currency">
        <img src="{{ $currency->logo_url }}" alt="logo">
        <a href="{{ route('currencies.show', $currency->id) }}">{{ $currency->title }}</a>
        {{ $currency->short_name }}
        {{ $currency->price }}
        @include('currency.pieces.edit-button', ['id' => $currency->id])
        @include('currency.pieces.delete-button', ['id' => $currency->id])
    </div>
@endsection
