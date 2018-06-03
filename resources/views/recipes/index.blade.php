@extends('layout')
@section('title', 'Главная')
@section('content')
    <h3>Список рецептов</h3>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                <tr>
                    <td>Имя</td>
                    <td>Действие</td>
                </tr>
                </thead>
                <tbody>
                @foreach($recipes as $recipe)
                    <tr>
                        <td>{{ $recipe->name }}</td>
                        <td>
                            <a href="{{ route('recipes.show', $recipe->id) }}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="{{ route('recipes.edit', $recipe->id) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <a href="{{ route('recipes.create') }}" class="btn btn-success">Создать новый рецепт</a>
@endsection
