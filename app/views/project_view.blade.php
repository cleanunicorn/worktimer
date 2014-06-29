@extends('layouts.master')

@section('content')
	<table>
		<tr>
			<th>Name</th>
			<td>{{ $project->name }}</td>
		</tr>
		<tr>
			<th>Description</th>
			<td>{{ $project->description }}</td>
		</tr>
	</table>
	<br />

	<table border="1">
		<tr>
			<th>
				Task
			</th>
			<th>
				Assigned user
			</th>
			<th>
				Work it
			</th>
		</tr>
		@foreach ($project->tasks as $task)
			<tr>
				<td>
					{{ $task->name }}
				</td>
				<td>
					{{ $task->assigned_user }}
				</td>
				<td>
					<a href="/task/view/{{ $project->id }}">Work</a>
				</td>
			</tr>
		@endforeach
	</table>
@stop