<?php

class TimerController extends BaseController {

	public function getCreate()
	{
		$start = new \DateTime;

		$timer = Timer::create(array(
			'start'	=> $start
		));
		//$timer->save();

		return Redirect::to('/timer/view/'. $timer->id);
	}

	public function getView($Timer_id)
	{
		$timer = Timer::find($Timer_id);

		return View::make(
			'timer_view'
			, array(
				'timer'	=> $timer
			)
		);
	}
}
