@extends('enrollees_table')

@section('title')Абитуриенты@endsection()

@section('h1')
    <h1 class="page_title">Абитуриенты</h1>
@endsection

@section('table_title')
    <p>Список абитуриентов</p>
@endsection

@section('page_links')
    @for($i = 1; $i <= $page_count; $i++)
        @if($i == $page)
            <a class="selected_page" href="{{route('enrollee.index')}}?page={{$i}}&sort={{$request['sort']}}">[{{$i}}]</a>
        @else
            <a href="{{route('enrollee.index')}}?page={{$i}}&sort={{$request['sort']}}">{{$i}}</a>
        @endif
    @endfor
@endsection

@section('name_asc')
    <a href="{{route('enrollee.index')}}?sort=name_asc&page={{$request['page']}}">Имя</a>
@endsection

@section('name_desc')
    <a href="{{route('enrollee.index')}}?sort=name_desc&page={{$request['page']}}">Имя</a>
@endsection

@section('surname_asc')
    <a href="{{route('enrollee.index')}}?sort=surname_asc&page={{$request['page']}}">Фамилия</a>
@endsection

@section('surname_desc')
    <a href="{{route('enrollee.index')}}?sort=surname_desc&page={{$request['page']}}">Фамилия</a>
@endsection

@section('group_number_asc')
    <a href="{{route('enrollee.index')}}?sort=group_number_asc&page={{$request['page']}}">Группа</a>
@endsection

@section('group_number_desc')
    <a href="{{route('enrollee.index')}}?sort=group_number_desc&page={{$request['page']}}">Группа</a>
@endsection

@section('points_asc')
    <a href="{{route('enrollee.index')}}?sort=name_asc&page={{$request['page']}}">Баллов</a>
@endsection

@section('points_desc')
    <a href="{{route('enrollee.index')}}?sort=points_desc&page={{$request['page']}}">Баллов</a>
@endsection
