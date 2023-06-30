@extends('layout.app')

@section('content')
    <div>
        <h2></h2>
    </div>
    <div class="container">
        <form action="/category" method="POST">
            @csrf
            <label for="" class="form-label">Nome</label>
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
            </div>
            <div>
                <button class="btn btn-secondary" type="submit">Editar</button>
            </div>
        </form>
    </div>
@endsection

@section('javascript')
    
@endsection