@extends('layouts.master')

@section('content')
    <h1>{{ $product->title }} ({{ $product->id }})</h1>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p>
    <p>{{ $product->stock }}</p>
    <p>{{ $product->status }}</p>
@endsection

{{-- de esta manera le decimos a laravel que no me escape el html y me lo renderize tal cual --}}
{!! $html !!}
