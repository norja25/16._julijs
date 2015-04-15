<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('user_profile_image')->nullable();
            $table->string('gender')->nullable();
            $table->timestamp('user_birthday')->nullable();
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_profiles');
	}

}
