<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patientname');
            $table->bigInteger('number');
            $table->string('gender');
            $table->date('dateofbirth');
            $table->string('address1');
            $table->string('address2');
            $table->date('addmissiondate');
            $table->time('adddmissiontime');
            $table->string('case');
            $table->string('modality');
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
        Schema::dropIfExists('patients');
    }
}
