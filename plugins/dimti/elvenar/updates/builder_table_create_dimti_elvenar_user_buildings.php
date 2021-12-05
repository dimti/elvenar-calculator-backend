<?php namespace Dimti\Elvenar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDimtiElvenarUserBuildings extends Migration
{
    public function up()
    {
        Schema::create('dimti_elvenar_user_buildings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('building_id')->unsigned();
            $table->integer('level_id')->unsigned();

            $table->foreign('user_id', 'dimti_elvenar_user_buildings_user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('building_id', 'dimti_elvenar_user_buildings_building_id')
                ->references('id')->on('dimti_elvenar_buildings')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('level_id', 'dimti_elvenar_user_buildings_level_id')
                ->references('id')->on('dimti_elvenar_levels')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unique(['user_id', 'building_id', 'level_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimti_elvenar_user_buildings');
    }
}