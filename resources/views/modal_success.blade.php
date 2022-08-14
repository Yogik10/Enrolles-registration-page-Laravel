@extends('layout')

@section('title')Регистрация@endsection()

@section('h1')
    <h1 class="page_title">Регистрация абитуриента</h1>
@endsection

@section('content')
    <div class="modal">
        <p>Вы успешно зарегистрированы!</p>
        <a href="{{route('enrollee.index')}}">К списку абитуриентов</a>
    </div>
@endsection
