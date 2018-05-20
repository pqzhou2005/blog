@extends('layouts.backend')

@section('title', ' Blog')

@section('header')
    <h1>
        Home
        <small> Blog</small>
    </h1>
@endsection

@section('content')
    <style>
        p {
            text-indent: 10px;
        }
    </style>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid" style="padding: 10px;">
                <h3>欢迎使用 Blog!</h3>
        </div>
    </div>
@endsection