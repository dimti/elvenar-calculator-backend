<?php namespace Dimti\Elvenar\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateBuildingsTable extends Migration
{
    const BUILDING_TYPE_RESIDENCE= 'residence';
    const BUILDING_TYPE_CULTURE = 'culture';
    const BUILDING_TYPE_MANUFACTURE = 'manufacture';

    private static $buildingTypes = [
        self::BUILDING_TYPE_RESIDENCE,
        self::BUILDING_TYPE_CULTURE,
        self::BUILDING_TYPE_MANUFACTURE,
    ];

    public function up()
    {
        Schema::create('dimti_elvenar_buildings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->enum('building_type', self::$buildingTypes);
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimti_elvenar_buildings');
    }
}
