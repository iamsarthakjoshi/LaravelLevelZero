{{-- layoutsFolder/nameOfFile --}}
@extends('layouts.app')

{{-- Wrapp the inner content into bladeTemplate's section --}}
@section('content')
Services
@endsection

@section('links')
    @if(count($services) > 0)
        @foreach ($services as $service)
            <a href="#">{{$service}}</a> 
        @endforeach
    @endif
@endsection