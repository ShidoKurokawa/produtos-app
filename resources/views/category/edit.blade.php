@extends('layout.app')

@section('content')
    <div>
        <h2 class="text-center mb-3">Edição de Categoria</h2>
    </div>
    <div>
        <form action="/category/{{ $category->id }}" method="POST">
            @csrf
            @method('PATCH')
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