<?php

class TaskController extends BaseController {

	public function getView($Task_id)
	{
		$task = Task::find($Task_id);

		return View::make(
			'task_view'
			, array(
				'task'	=> $task
			)
		);
	}
}
