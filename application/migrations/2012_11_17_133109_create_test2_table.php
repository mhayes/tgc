<?php

class Create_Test2_Table {

	public function up()
	{
		Schema::create('test2', function($table) {
			$table->increments('id');
			$table->string('email')->unique();
			$table->integer('age')->nullable();
			$table->timestamps();
		});
		DB::table('test2')->insert(array(
		    'email'  => 'rikkiola@gmail.com',
		    'age'  => '35',
		));		
	}

	public function down()
	{
		Schema::drop('test2');
	}

}