@extends('enrollees_table')

@section('title')Поиск абитуриентов@endsection()

@section('h1')
    <h1 class="page_title">Поиск</h1>
@endsection

@section('table_title')
    <p>Поиск абитуриентов</p>
@endsection

@section('page_links')
    @for($i = 1; $i <= $page_count; $i++)
        @if($i == $page)
            <a class="selected_page" href="{{route('enrollee.search')}}?page={{$i}}&sort={{$request['sort']}}&search={{$request['search']}}">[{{$i}}]</a>
        @else
            <a href="{{route('enrollee.search')}}?page={{$i}}&sort={{$request['sort']}}&search={{$request['search']}}">{{$i}}</a>
        @endif
    @endfor
@endsection

@section('show_all')
    <p>Показаны только абитуриенты, найденные по запросу «{{$request['search']}}». </p>
    <a href="{{route('enrollee.index')}}">Показать всех абитуриентов</a>
@endsection

@section('name_asc')
    <a href="{{route('enrollee.search')}}?search={{$request['search']}}&sort=name_asc&page={{$request['page']}}">Имя</a>
@endsection

@section('name_desc')
    <a href="{{route('enrollee.search')}}?search={{$request['search']}}&sort=name_desc&page={{$request['page']}}">Имя</a>
@endsection

@section('surname_asc')
    <a href="{{route('enrollee.search')}}?search={{$request['search']}}&sort=surname_asc&page={{$request['page']}}">Фамилия</a>
@endsection

@section('surname_desc')
    <a href="{{route('enrollee.search')}}?search={{$request['search']}}&sort=surname_desc&page={{$request['page']}}">Фамилия</a>
@endsection

@section('group_number_asc')
    <a href="{{route('enrollee.search')}}?search={{$request['search']}}&sort=group_number_asc&page={{$request['page']}}">Группа</a>
@endsection

@section('group_number_desc')
    <a href="{{route('enrollee.search')}}?search={{$request['search']}}&sort=group_number_desc&page={{$request['page']}}">Группа</a>
@endsection

@section('points_asc')
    <a href="{{route('enrollee.search')}}?search={{$request['search']}}&sort=points_asc&page={{$request['page']}}">Баллов</a>
@endsection

@section('points_desc')
    <a href="{{route('enrollee.search')}}?search={{$request['search']}}&sort=points_desc&page={{$request['page']}}">Баллов</a>
@endsection
