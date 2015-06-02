<?php
class GenerateSlugs extends Seeder{

	public function run(){
		foreach (Student::all() as $v) {
			if(!$v->slug){
				$v->sluggify();
				$v->save();
			}
		}

		$this->command->info("All students are now slugged!");

		foreach (Group::all() as $v) {
			if(!$v->slug){
				$v->sluggify();
				$v->save();
			}
		}

		$this->command->info("All groups are now slugged!");

		foreach (Study::all() as $v) {
			if(!$v->slug){
				$v->sluggify();
				$v->save();
			}
		}

		$this->command->info("All studies are now slugged!");
	}
}