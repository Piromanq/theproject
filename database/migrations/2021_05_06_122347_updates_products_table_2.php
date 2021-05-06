<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatesProductsTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->tinyInteger('R15C')->nullable();
            $table->tinyInteger('R16C')->nullable();
            $table->tinyInteger('R17C')->nullable();
            $table->tinyInteger('Filter225X40')->nullable();
            $table->tinyInteger('Filter225X45')->nullable();
            $table->tinyInteger('Filter225X50')->nullable();
            $table->tinyInteger('Filter235X40')->nullable();
            $table->tinyInteger('Filter235X45')->nullable();
            $table->tinyInteger('Filter235X50')->nullable();
            $table->tinyInteger('Filter245X40')->nullable();
            $table->tinyInteger('Filter245X45')->nullable();
            $table->tinyInteger('Filter245X50')->nullable();
            $table->tinyInteger('Filter255X40')->nullable();
            $table->tinyInteger('Filter255X45')->nullable();
            $table->tinyInteger('Filter255X50')->nullable();
            $table->tinyInteger('Filter265X40')->nullable();
            $table->tinyInteger('Filter265X45')->nullable();
            $table->tinyInteger('Filter265X50')->nullable();
            $table->tinyInteger('Filter275X35')->nullable();
            $table->tinyInteger('Filter275X40')->nullable();
            $table->tinyInteger('Filter275X45')->nullable();
            $table->tinyInteger('Filter275X50')->nullable();
            $table->tinyInteger('center_hole_diameter_65_1')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('R15C');
            $table->dropColumn('R16C');
            $table->tinyInteger('R17C');
            $table->dropColumn('Filter225X40');
            $table->dropColumn('Filter225X45');
            $table->dropColumn('Filter225X50');
            $table->dropColumn('Filter235X40');
            $table->dropColumn('Filter235X45');
            $table->dropColumn('Filter235X50');
            $table->dropColumn('Filter245X40');
            $table->dropColumn('Filter245X45');
            $table->dropColumn('Filter245X50');
            $table->dropColumn('Filter255X40');
            $table->dropColumn('Filter255X45');
            $table->dropColumn('Filter255X50');
            $table->dropColumn('Filter265X40');
            $table->dropColumn('Filter265X45');
            $table->dropColumn('Filter265X50');
            $table->dropColumn('Filter275X35');
            $table->dropColumn('Filter275X40');
            $table->dropColumn('Filter275X45');
            $table->dropColumn('Filter275X50');
            $table->dropColumn('center_hole_diameter_65_1');
        });
    }
}
