<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dappointments', function (Blueprint $table) {
            $table->text('link')->nullable();
        });

        Schema::table('dappointments', function (Blueprint $table) {
            $table->text('patient_name')->nullable();
            $table->text('patient_age')->nullable();
            $table->text('medications')->nullable();
            $table->text('notes')->nullable();
        });
        
    }



    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dappointments', function (Blueprint $table) {
            //
        });
    }
};
