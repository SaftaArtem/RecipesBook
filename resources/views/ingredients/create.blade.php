@extends('layout')
@section('title', 'Добавление нового ингредиента')
@section('content')
    <div class="container">
        <br>
        <h3>
            Добавить новый ингредиент
        </h3>
        <br>
        <div class="row">
            <div class="col-md-4">
                {!! Form::open(['route' => ['ingredients.store']]) !!}


                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{ old('title') }}">
                    <br>
                    <br>
                    <button class="btn btn-success">Добавить</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection