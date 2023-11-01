@extends('layout.app')

@section('content')
    <div>
        <h2 class="text-center mb-3">Exibição de Produto</h2>
    </div>
    <div class="container">
        <label for="" class="form-label">Nome</label>
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" readonly>
        </div>
        <label for="" class="form-label">Preço</label>
        <div class="input-group mb-3">
            <input type="text" name="price" class="form-control" value="{{$product->price }}" readonly>
        </div>
        <label for="" class="form-label">Peso</label>
        <div class="input-group mb-3">
            <input type="text" name="weight" class="form-control" value="{{ $product->weight }}" readonly>
        </div>
        <label for="" class="form-label">Categorias</label>
        <div class="input-group mb-3">
            @foreach ($product->categories as $category)
                <input type="text" class="form-control" value="{{ $category->name }}" readonly>
            @endforeach
        </div>
        <div>
            <form action="/product/{{ $product->id }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn btn-secondary" type="button" href="/product/{{ $product->id }}/edit">Editar</a>
                <button class="btn btn-danger" type="submit">Apagar</button>
            </form>
        </div>
    </div>
@endsection

@section('javascript')

@endsection