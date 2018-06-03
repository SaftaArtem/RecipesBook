@extends('layout')
@section('title', 'Изменение рецепта')
@section('content')
    <div class="container">
        <br>
        <h3>
            Изменение рецепта
        </h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['recipes.update', $recipe->id], 'method'=>'PUT']) !!}


                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{ $recipe->name }}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $recipe->description }}</textarea>
                    <br>
                    <div class="col-8">
                        @foreach($ingredients as $ingredient)
                            <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                            <label class="">{{ $ingredient->name }}</label>
                            <br>
                        @endforeach
                    </div>
                    <br>
                    <br>
                    Нет в списке? <a href="{{ route('ingredients.create') }}" class="btn btn-info">Добавление нового ингредиента</a>
                    </button>
                    <br>
                    <br>
                    <button class="btn btn-warning">Изменить</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection