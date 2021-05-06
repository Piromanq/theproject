<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('diameter')->nullable();
            $table->text('seasonality')->nullable();
            $table->text('thorns')->nullable();
            $table->text('load_index')->nullable();
            $table->text('speed_index')->nullable();
            $table->text('increased_lifting_capacity')->nullable();
            $table->text('RunFlat_technology')->nullable();
            $table->text('vehicle_type')->nullable();
            $table->text('design')->nullable();
            $table->text('sealing_method')->nullable();
            $table->text('speed_class')->nullable();
            $table->text('load_class')->nullable();
            $table->integer('price')->nullable();
            $table->tinyInteger('summer')->nullable();
            $table->tinyInteger('winter')->nullable();
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
            $table->dropColumn('diameter');
            $table->dropColumn('seasonality');
            $table->dropColumn('thorns');
            $table->dropColumn('load_index');
            $table->dropColumn('speed_index');
            $table->dropColumn('increased_lifting_capacity');
            $table->dropColumn('RunFlat_technology');
            $table->dropColumn('vehicle_type');
            $table->dropColumn('design');
            $table->dropColumn('sealing_method');
            $table->dropColumn('speed_class');
            $table->dropColumn('load_class');
            $table->dropColumn('price');
            $table->dropColumn('summer');
            $table->dropColumn('winter');
        });
    }
}
