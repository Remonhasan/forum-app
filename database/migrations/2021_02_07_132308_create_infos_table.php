<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('bdstatus');
            $table->string('fname');
            $table->string('mname');
            $table->string('rname');
            $table->string('gender');
            $table->string('phone');
            $table->string('age');
            $table->string('division');
            $table->string('district');
            $table->string('upazila');
            $table->string('psova');
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
        Schema::dropIfExists('infos');
    }
}
