@extends('layout.app')

@section('content')
    <div>
        <h2></h2>
    </div>
    <div>
        <label for="" class="form-label">Nome</label>
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" readonly>
        </div>
        <form action="/category/{{ $category->id }}" method="POST">
            @csrf
            @method('DELETE')
            <div>
                <a class="btn btn-secondary" type="button" href="/category/{{ $category->id }}/edit">Edit</a>
                <button class="btn btn-danger" type="submit">Apagar</button>
            </div>
        </form>
    </div>
@endsection

@section('javascript')
    
@endsection