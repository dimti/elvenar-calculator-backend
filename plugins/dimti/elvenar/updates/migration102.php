<?php namespace Dimti\Elvenar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use Winter\Storm\Database\Schema\Blueprint;

class Migration102 extends Migration
{
    const BUILDING_TYPE_GIVER = 'giver';

    const BUILDING_TYPE_DEDUCT = 'deduct';

    private static $buildingTypes = [
        self::BUILDING_TYPE_GIVER,
        self::BUILDING_TYPE_DEDUCT
    ];

    public function up()
    {
         Schema::table('dimti_elvenar_buildings', function (Blueprint $table) {
             $table->enum('building_type', self::$buildingTypes);
         });
    }

    public function down()
    {
        Schema::table('dimti_elvenar_buildings', function (Blueprint $table) {
            $table->dropColumn('building_type');
        });
    }
}