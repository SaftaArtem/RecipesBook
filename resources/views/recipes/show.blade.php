@extends('layout')
@section('title', 'Список рецептов')
@section('content')


    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <h3>
                    {{ $recipe->name }}
                    <a href="{{ route('recipes.edit', $recipe->id) }}">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </h3>
                <p><strong>Описание: </strong> {{ $recipe->description }}</p>
            </div>
        </div>
        <h3 class="brd_b">Ингредиенты</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="md-12">
                    <ul>
                        @foreach( $ingredients as $ingredient)
                            <li>{{ $ingredient->name }}</li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>

    </div>

@endsection