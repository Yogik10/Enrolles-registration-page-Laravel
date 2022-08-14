@extends('layout')

@section('content')
    <div class="table_container">
        <table>
            <div class="caption">
                @yield('table_title')
                <div class="search_container">
                    <p>Поиск:</p>
                    <input type="text" name="search" id="search" value="{{$search}}">
                    <a onclick="navigate('{{route('enrollee.search')}}', 'search')">Найти</a>
                </div>
            </div>

            <thead>
                <tr>
                    <th>№</th>
                    <th>
                        @if ($request->input('sort') == 'name_desc' || $request->input('sort') == 0)
                            @yield('name_asc')
                        @else
                            @yield('name_desc')
                        @endif
                    </th>
                    <th>
                        @if ($request->input('sort') == 'surname_desc' || $request->input('sort') == 0)
                            @yield('surname_asc')
                        @else
                            @yield('surname_desc')
                        @endif
                    </th>
                    <th>
                        @if ($request->input('sort') == 'group_number_desc' || $request->input('sort') == 0)
                            @yield('group_number_asc')
                        @else
                            @yield('group_number_desc')
                        @endif
                    </th>
                    <th>
                        @if ($request->input('sort') == 'points_desc' || $request->input('sort') == 0)
                            @yield('points_asc')
                        @else
                            @yield('points_desc')
                        @endif
                    </th>
                </tr>
            </thead>

            <tbody>
                @for($i = 0, $j = $enrollees_in_page * ($page-1) + 1; $i < count($enrollees); $i++, $j++)
                    <tr>
                        <td>{{$j}}</td>
                        <td>{{$enrollees[$i]->name}}</td>
                        <td>{{$enrollees[$i]->surname}}</td>
                        <td>{{$enrollees[$i]->group_number}}</td>
                        <td>{{$enrollees[$i]->points}}</td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <div class="page_container">
            @yield('show_all')
            <p>  Страница:
                @yield('page_links')
            </p>
        </div>
    </div>
@endsection
