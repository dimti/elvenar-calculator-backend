<?php namespace Dimti\Elvenar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDimtiElvenarLevels extends Migration
{
    public function up()
    {
        Schema::create('dimti_elvenar_levels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('label', 3);
            $table->integer('sort_order')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimti_elvenar_levels');
    }
}