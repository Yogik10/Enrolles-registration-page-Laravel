@extends('layout')

@section('title')Абитуриенты@endsection()

@section('h1')
    <h1 class="page_title">Абитуриенты</h1>
@endsection

@section('content')
    <div class="table_container">
        <table>
            <caption>Список абитуриентов</caption>
            <tr>
                <th>№</th>
                <th>
                    @if ($request->input('sort') == 'name_desc' || $request->input('sort') == 0)
                        <a href="{{route('enrollee.index')}}?sort=name_asc&page={{$request['page']}}">Имя</a>
                    @else
                        <a href="{{route('enrollee.index')}}?sort=name_desc&page={{$request['page']}}">Имя</a>
                    @endif
                </th>
                <th>
                    @if ($request->input('sort') == 'surname_desc' || $request->input('sort') == 0)
                        <a href="{{route('enrollee.index')}}?sort=surname_asc&page={{$request['page']}}">Фамилия</a>
                    @else
                        <a href="{{route('enrollee.index')}}?sort=surname_desc&page={{$request['page']}}">Фамилия</a>
                    @endif
                </th>
                <th>
                    @if ($request->input('sort') == 'group_number_desc' || $request->input('sort') == 0)
                        <a href="{{route('enrollee.index')}}?sort=group_number_asc&page={{$request['page']}}">Номер группы</a>
                    @else
                        <a href="{{route('enrollee.index')}}?sort=group_number_desc&page={{$request['page']}}">Номер группы</a>
                    @endif
                </th>
                <th>
                    @if ($request->input('sort') == 'points_asc' || $request->input('sort') == 0)
                        <a href="{{route('enrollee.index')}}?sort=points_desc&page={{$request['page']}}">Баллов</a>
                    @else
                        <a href="{{route('enrollee.index')}}?sort=points_asc&page={{$request['page']}}">Баллов</a>
                    @endif
                </th>
            </tr>
            @for($i = 0, $j = $enrollees_in_page * ($page-1) + 1; $i < count($enrollees); $i++, $j++)
                <tr>
                    <td>{{$j}}</td>
                    <td>{{$enrollees[$i]->name}}</td>
                    <td>{{$enrollees[$i]->surname}}</td>
                    <td>{{$enrollees[$i]->group_number}}</td>
                    <td>{{$enrollees[$i]->points}}</td>
                </tr>
            @endfor
        </table>
        <div class="page_container">
            <p>  Страница:
            @for($i = 1; $i <= $page_count; $i++)
                @if($i == $page)
                    <a class="selected_page" href="{{route('enrollee.index')}}?page={{$i}}&sort={{$request['sort']}}">[{{$i}}]</a>
                @else
                    <a href="{{route('enrollee.index')}}?page={{$i}}&sort={{$request['sort']}}">{{$i}}</a>
                @endif
            @endfor
            </p>
        </div>
    </div>
@endsection
