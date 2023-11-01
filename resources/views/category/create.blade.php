@extends('layout.app')

@section('content')
    <div>
        <h2 class="text-center mb-3">Cadatro de Categoria</h2>
    </div>
    <div>
        <form action="/category" method="POST">
            @csrf
            <label for="" class="form-label">Nome</label>
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control">
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