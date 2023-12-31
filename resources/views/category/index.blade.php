@extends('layout.app')

@section('content')
	<div>
		<h2 class="text-center mb-3">Tabela de Categorias</h2>
	</div>
	<div>
		<table class="table table-striped">
			<thead class="table-secondary">
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nome</th>
				<th scope="col"></th>
			</tr>
			</thead>
			<tbody>
				@foreach ($categories as $c)
					<tr>
						<th scope="row">{{ $c->id }}</th>
						<td>{{ $c->name }}</td>
						<td><a href="/category/{{ $c->id }}" class="btn"><i class="fa-solid fa-eye"></i></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div style="text-align:right">
        <a class="btn btn-info" type="button" href="/">Voltar</a>
    </div>
@endsection

@section('javascript')
    
@endsection