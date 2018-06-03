@extends('layout')
@section('title', 'Изменить ингредиент')
@section('content')


    <div class="container">
        <br>
        <h3>
            Изменить игредиент
        </h3>
        <br>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['ingredients.update', $ingredient->id], 'method'=>'PUT']) !!}


                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{ $ingredient->name }}">
                    <br>
                    <button class="btn btn-warning">Изменить</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection