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
@stop