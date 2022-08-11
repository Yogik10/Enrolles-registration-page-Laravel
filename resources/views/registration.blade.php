@extends('layout')

@section('title')Регистрация@endsection()
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action={{route('enrollee.store')}}>
        @csrf
        <input type="text" name="name" id="name" placeholder="Имя" value={{old('name')}}>
        <input type="text" name="surname" id="surname" placeholder="Фамилия" value={{old('surname')}}>
        <div class="sex_container">
            <input type="radio" name="sex" id="male" value="male" {{ (old('sex') == 'male') ? 'checked' : ''}}>
            <label for="male">Мужской</label>
            <input type="radio" name="sex" id="female" value="female" {{ (old('sex') == 'female') ? 'checked' : ''}}>
            <label for="female">Женский</label>
        </div>
        <input type="text" name="group_number" id="group_number" placeholder="Номер группы" value={{old('group_number')}}>
        <input type="email" name="email" id="email" placeholder="email" value={{old('email')}}>
        <input type="number" name="points" id="points" placeholder="Количество баллов" value={{old('points')}}>
        <input type="number" name="birth_date" id="birth_date" placeholder="Год рождения" value={{old('birth_date')}}>
        <div class="local_container">
            <input type="radio" name="local" id="local" value="local" {{ (old('local') == 'local') ? 'checked' : ''}}>
            <label for="local">Местный</label>
            <input type="radio" name="local" id="nonresident" value="nonresident" {{ (old('local') == 'nonresident') ? 'checked' : ''}}>
            <label for="nonresident">Иногородний</label>
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
@endsection
