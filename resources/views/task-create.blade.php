@extends('layouts.app')
@section('title', 'Создание задачи :: Мои задачи')
@section('content')
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Задача</label>
            <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">Описание</label>
            <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror"
                      row="3">{{ old('content') }}</textarea>
            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Создать">
    </form>
@endsection('content')
