<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlotTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plot_types', function (Blueprint $table) {
            $table->id();
            $table->string('frist_name');
            $table->string('frist_short_descrip',400);
            $table->string('frist_descrip',500);
            $table->string('frist_image');

            $table->string('sec_name');
            $table->string('sec_short_descrip',400);
            $table->string('sec_descrip',500);
            $table->string('sec_image');

            $table->string('thi_name');
            $table->string('vedio_link');
            $table->string('thi_short_descrip',400);
            $table->string('thi_descrip',500);
            $table->string('thi_image');

            $table->string('four_name');
            $table->string('four_short_descrip',400);
            $table->string('four_descrip',500);
            $table->string('four_image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plot_types');
    }
}
