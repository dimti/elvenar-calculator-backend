<?php namespace Dimti\Elvenar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDimtiElvenarBuildingLevel extends Migration
{
    public function up()
    {
        Schema::create('dimti_elvenar_building_level', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('building_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('population')->nullable();
            $table->integer('culture')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dimti_elvenar_building_level');
    }
}