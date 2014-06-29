<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$this->call('ProjectTableSeeder');
	}
}

class ProjectTableSeeder extends Seeder {
	public function run()
	{
		DB::table('projects')->delete();

		$project = Project::create(array(
			'name'				=> 'Dota'
			, 'description'		=> 'The original MOBA game'
			, 'client'			=> 'The world'
			, 'equipment'		=> 'Proes'
		));

		$task = Task::create(array(
			'name'				=> 'Create it'
			, 'assigned_user'	=> 'Steam'
			, 'deadline'		=> 'Until it is ready'
		));
		$project->tasks()->save($task);

		$task = Task::create(array(
			'name'				=> 'Play it'
			, 'assigned_user'	=> 'Players'
			, 'deadline'		=> '2015'
		));
		$project->tasks()->save($task);

		Project::create(array(
			'name'				=> 'LoL'
			, 'description'		=> 'The copy'
			, 'client'			=> '15 year olds'
			, 'equipment'		=> 'Nabs'
		));
	}
}