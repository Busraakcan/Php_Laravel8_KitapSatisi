@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords',$setting->keywords)
@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">Blank </li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                içerik
            </div>
        </div>
    </div>

@endsection
