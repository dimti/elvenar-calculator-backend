<?php namespace Dimti\Elvenar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDimtiElvenarUserProfiles extends Migration
{
    public function up()
    {
        Schema::create('dimti_elvenar_user_profiles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('player_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('nick', 100);
            $table->integer('rank')->nullable()->unsigned();
            $table->integer('score')->nullable()->unsigned();
            $table->smallInteger('chapter')->nullable()->unsigned();
            $table->smallInteger('expansions')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('user_id', 'dimti_elvenar_user_profiles_user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('user_id', 'dimti_elvenar_user_profiles_user_id_user_buildings')
                ->references('id')->on('dimti_elvenar_user_buildings')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimti_elvenar_user_profiles');
    }
}