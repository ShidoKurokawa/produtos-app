@extends('layout.app')

@section('content')
    <div>
        <h2 class="text-center mb-3">Cadatro de Produto</h2>
    </div>
    <div class="container">
        <form action="/product" method="POST">
            @csrf
            <label for="" class="form-label">Nome</label>
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control">
            </div>
            <label for="" class="form-label">Preço</label>
            <div class="input-group mb-3">
                <input type="text" name="price" class="form-control">
            </div>
            <label for="" class="form-label">Peso</label>
            <div class="input-group mb-3">
                <input type="text" name="weight" class="form-control">
            </div>
            <label for="" class="form-label">Categorias</label>
            <div class="input-group mb-3">
                <select class="form-select" name="categories[]" multiple>
                    @foreach ($categories as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button class="btn btn-secondary" type="submit">Cadastrar</button>
                <a class="btn btn-info" type="button" href="/">Voltar</a>
            </div>
        </form>
    </div>
@endsection

@section('javascript')

@endsection