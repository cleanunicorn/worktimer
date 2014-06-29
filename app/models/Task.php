<?php

class Task extends Eloquent
{
	public function timers()
	{
		return $this->hasMany('Timer');
	}
}