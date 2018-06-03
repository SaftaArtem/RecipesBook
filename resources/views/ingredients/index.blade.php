@extends('layout')
@section('title', 'Список ингредиентов')
@section('content')
    <h3>Список ингредиентов</h3>
    <a href="{{ route('ingredients.create') }}" class="btn btn-success">Создать новый ингредиент</a>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                <tr>
                    <td>Навзвание</td>
                    <td>Действие</td>
                </tr>
                </thead>
                <tbody>
                @foreach($ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient->name }}</td>
                        <td>
                            <a href="{{ route('ingredients.edit', $ingredient->id) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            {!! Form::open(['method' => "DELETE", 'route' => ['ingredients.destroy', $ingredient->id]]) !!}
                            <button onclick="return confirm('Are you shure?')">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
