@extends('layout')

@section('title')Регистрация@endsection()

@section('h1')
    <h1 class="page_title">Регистрация абитуриента</h1>
@endsection

@section('content')
    <div class="registration_container">
        @if ($errors->any())
            <div class="error_container">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action={{route('enrollee.store')}}>
            @csrf
            <div class="fio_container">
                <input type="text" name="name" id="name" placeholder="Имя" class="@if ($errors->has('name')) error @endif" value={{old('name')}}>
                <input type="text" name="surname" id="surname" placeholder="Фамилия" class="@if ($errors->has('surname')) error @endif" value={{old('surname')}}>
            </div>
            <div class="sex_container @if ($errors->has('sex')) error @endif" >
                <p style="display: inline" >Пол:</p>
                <input type="radio" name="sex" id="male" value="М" {{ (old('sex') == 'М') ? 'checked' : ''}}>
                <label for="male">Мужской</label>
                <input type="radio" name="sex" id="female" value="Ж" {{ (old('sex') == 'Ж') ? 'checked' : ''}}>
                <label for="female">Женский</label>
            </div>
            <div class="input_container">
                <input type="text" name="group_number" id="group_number" placeholder="Номер группы" class="@if ($errors->has('group_number')) error @endif" value={{old('group_number')}}>
                <input type="email" name="email" id="email" placeholder="email" class="@if ($errors->has('email')) error @endif" value={{old('email')}}>
            </div>
            <div class="input_container">
                <input type="number" name="points" id="points" placeholder="Количество баллов" class="@if ($errors->has('points')) error @endif" value={{old('points')}}>
                <input type="number" name="birth_year" id="birth_year" placeholder="Год рождения" class="@if ($errors->has('birth_year')) error @endif" value={{old('birth_year')}}>
            </div>
            <div class="local_container @if ($errors->has('is_local')) error @endif">
                <p style="display: inline">Город:</p>
                <input type="radio" name="is_local" id="local" value=1 {{ (old('is_local') == 1) ? 'checked' : ''}}>
                <label for="local">Местный</label>
                <input type="radio" name="is_local" id="nonresident" value=0 {{ (old('is_local') === '0') ? 'checked' : ''}}>
                <label for="nonresident">Иногородний</label>
            </div>
            <button class="sign_up" type="submit">Зарегистрироваться</button>
        </form>
    </div>
@endsection
