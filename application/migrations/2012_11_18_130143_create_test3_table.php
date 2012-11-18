<?php

class Create_Test3_Table {

	public function up()
	{
		Schema::create('test3', function($table) {
			$table->increments('id');
			$table->string('email')->unique();
			$table->integer('age')->nullable();
			$table->timestamps();
		});
		DB::table('test3')->insert(array(
		    'email'  => 'rikkiola@gmail.com',
		    'age'  => '36',
		));		
	}

	public function down()
	{
		Schema::drop('test3');
	}

}