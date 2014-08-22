<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
					'name'=>'Amal Gamage',
					'bio'=>'saksjas',
					'created_at'=>date('y-m-d H:m:s'),
					'updated_at'=>date('y-m-d H:m:s')
					));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('authors')->where('name','=','Amal Gamage')->delete();
	}

}
