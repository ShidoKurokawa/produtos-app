@extends('layout.app')

@section('content')
    <div>
        <h3></h3>
    </div>
    <form action="/product/{{ $product->id }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="container">
            <label for="" class="form-label">Nome</label>
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control" value="{{ $product->name }}">
            </div>
            <label for="" class="form-label">Preço</label>
            <div class="input-group mb-3">
                <input type="text" name="price" class="form-control" value="{{ $product->price }}">
            </div>
            <label for="" class="form-label">Peso</label>
            <div class="input-group mb-3">
                <input type="text" name="weight" class="form-control" value="{{ $product->weight }}">
            </div>
            <label for="" class="form-label">Categorias</label>
            <div class="input-group mb-3">
                <select class="form-select" name="categories[]" multiple>
                    @foreach ($categories as $c)
                        <option value="{{ $c->id }}" @selected($product->categories->contains($c->id))>{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button class="btn btn-secondary" type="submit">Editar</button>
            </div>
        </div>
    </form>
@endsection

@section('javascript')

@endsection