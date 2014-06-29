@extends('layouts.master')

@section('content')
	<table>
		<tr>
			<th>Name</th>
			<td>{{ $task->name }}</td>
		</tr>
		<tr>
			<th>Description</th>
			<td>{{ $task->assigned_user }}</td>
		</tr>
	</table>
	<br />

	<a href="/timer/create">Start new timer</a>

	<table>
		<tr>
			<th>
				Start
			</th>
			<th>
				End
			</th>
			<th>
				Observation
			</th>
		</tr>
		@foreach ($task->timers as $timer)
			<tr>
				<td>
					{{ $timer->start }}
				</td>
				<td>
					{{ $timer->end }}
				</td>
				<td>
					{{ $timer->observation }}
				</td>
			</tr>
		@endforeach
	</table>
@stop