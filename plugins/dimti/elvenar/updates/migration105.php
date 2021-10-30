<?php namespace Dimti\Elvenar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use Winter\Storm\Database\Schema\Blueprint;

class Migration105 extends Migration
{
    public function up()
    {
         Schema::create('dimti_elvenar_table', function (Blueprint $table) {
             $table->unsignedSmallInteger('no_levels')->nullable()->default(0);
         });
    }

    public function down()
    {
        Schema::create('dimti_elvenar_table', function (Blueprint $table) {
            $table->dropColumn('no_levels');
        });
    }
}