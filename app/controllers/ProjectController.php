<?php

class ProjectController extends BaseController {

	public function getIndex()
	{
		$projects = Project::all();

		return View::make(
			'project'
			, array(
				'projects'	=> $projects
			)
		);
	}

	public function getView($Project_id)
	{
		$project = Project::with('tasks')->find($Project_id);

		return View::make(
			'project_view'
			, array(
				'project'	=> $project
			)
		);
	}
}
