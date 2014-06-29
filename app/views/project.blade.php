@extends('layouts.master')

@section('content')
	<table border="1">
		<tr>
			<th>
				Name
			</th>
			<th>
				Description
			</th>
			<th>
				View taks
			</th>
		</tr>
		@foreach ($projects as $project)
			<tr>
				<td>
					{{ $project->name }}
				</td>
				<td>
					{{ $project->description }}
				</td>
				<td>
					<a href="/project/view/{{ $project->id }}">View</a>
				</td>
			</tr>
		@endforeach
	</table>
@stop