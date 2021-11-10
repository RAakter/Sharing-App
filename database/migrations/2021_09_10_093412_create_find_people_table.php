<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFindPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('find_people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id1')->nullable();
            $table->decimal('lat1')->nullable();
            $table->decimal('lon1')->nullable();
            $table->bigInteger('from')->nullable()->comment('area_id');
            $table->bigInteger('to')->nullable()->comment('area_id');
            $table->bigInteger('user_id2')->nullable();
            $table->decimal('lat2')->nullable();
            $table->decimal('lon2')->nullable();
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
        Schema::dropIfExists('find_people');
    }
}
