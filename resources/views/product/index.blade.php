@extends('layout.app')

@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Peso</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr>
                        <th scope="row">{{ $p->id }}</th>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->price }}</td>
                        <td>{{ $p->weight }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('javascript')
    
@endsection