<?php namespace Dimti\Elvenar\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateBuildingsTable extends Migration
{
    public function up()
    {
        Schema::create('dimti_elvenar_buildings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimti_elvenar_buildings');
    }
}