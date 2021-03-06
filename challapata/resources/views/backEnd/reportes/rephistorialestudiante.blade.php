@extends('backLayout.rep')
@section('titulo_reporte')
Historial por Estudiante
@stop

@section('contenido')

@if(!empty($materiales))
<p class="text-left">
	<strong>Estudiante: </strong>{{ $materiales[0]->aquien }}
</p>
@endif

	<table class="table table-bordered text-left">
		<thead>
			<th>Nro</th>
			<th>Fecha</th>
			<th>Observacion</th>
			<th>Estado</th>
			<th>Codigo</th>
			<th>Material</th>
			<th>Tipo</th>
		</thead>
		<tbody>
			<?php $i = 1 ?>
			@foreach($materiales as $row)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $row->fecha }}</td>
				<td>{!! $row->observacion !!}</td>
				<td>{{ $row->estado }}</td>
				<td>{{ $row->codigo }}</td>
				<td>{{ $row->titulo }}</td>
				<td>{{ $row->tipo }}</td>
			</tr>
			@endforeach
		</tbody>	
	</table>

@endsection