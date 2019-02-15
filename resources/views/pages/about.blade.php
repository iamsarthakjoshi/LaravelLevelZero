{{-- layoutsFolder/nameOfFile --}}
@extends('layouts.app')

{{-- Wrapp the inner content into bladeTemplate's section --}}
@section('content')
<span><?php echo $title; ?></span>
@endsection