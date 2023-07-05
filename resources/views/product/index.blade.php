@extends('layout.app')

@section('content')
    <div>
        <h2 class="text-center mb-3">Tabela de Produtos</h2>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Categorias</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr>
                        <th scope="row">{{ $p->id }}</th>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->price }}</td>
                        <td>{{ $p->weight }}</td>
                        <td>
                            @foreach ($p->categories as $category)
                                {{ $category->name }} <br>
                            @endforeach
                        </td>
                        <td><a href="/product/{{ $p->id }}" class="btn"><i class="fa-solid fa-eye"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('javascript')
    
@endsection