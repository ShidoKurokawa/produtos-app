@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Cadatro de Produtos</h1>
    </div>

    <div>
        <div class="row justify-content-center g-2">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text">Lista dos produtos cadastrados.</p>
                        <a href="/product" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categorias</h5>
                        <p class="card-text">Lista das categorias cadastradas.</p>
                        <a href="/category" class="btn btn-primary">Categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="card-group w-50">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Produtos</h5>
                <p class="card-text">Lista dos Produtos cadastrados.</p>
                <a href="/product" class="btn btn-primary">Produtos</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Categorias</h5>
                <p class="card-text">Listas das Categorias cadastradas.</p>
                <a href="/category" class="btn btn-primary">Categorias</a>
            </div>
        </div>
    </div> --}}
@endsection

@section('javascript')
@endsection
