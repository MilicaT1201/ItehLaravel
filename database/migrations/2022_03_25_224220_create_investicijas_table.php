<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvesticijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investicijas', function (Blueprint $table) {
            $table->id();
            $table->integer('iznos');
            $table->string('kredit');
            $table->foreignId('investitor_id')->constrained('investitors');
            $table->foreignId('projekat_id')->constrained('projekats');
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
        Schema::dropIfExists('investicijas');
    }
}
