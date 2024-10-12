@extends('layouts.app')
@section('title', 'Мои задачи')
@section('content')

    <h2>Добро пожаловать, {{ Auth::user()->name }}!</h2>
    <p class="text-end"><a href="">Создать задачу</a></p>

{{--    @if (count($tasks) > 0)--}}
        <table class="table table-striped table-borderless">
            <thead>
            <tr>
                <th>Задача</th>
                <th>Дата создания</th>
                <th colspan="2">&nbsp;</th>
            </tr>
            </thead>
        </table>
{{--    @endif--}}
@endsection('content')
