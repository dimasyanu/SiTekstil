@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="fixed-action-btn">
			<a href="{{ url('dashboard') }}" class="btn-floating btn-large indigo">
				<i class="large material-icons">add</i>
			</a>
		</div>
		<table>
			<thead>
				<th>No.</th>
				<th>{{ Lang::get('app.name') }}</th>
				<th>{{ Lang::get('app.email') }}</th>
				<th>{{ Lang::get('app.actions') }}</th>
			</thead>
			<tbody>
				@foreach($items as $i => $item)
				<tr>
					<td>{{ $i+1 }}</td>
					<td>{{ $item->name }}</td>
					<td>{{ $item->email }}</td>
					<td>
						<a class="waves-effect waves-light btn"><i class="material-icons">delete</i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection