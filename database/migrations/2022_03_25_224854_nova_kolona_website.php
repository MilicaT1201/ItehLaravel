<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaWebsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investitors', function (Blueprint $table) {
            $table->after('godOsnivanja', function ($table) {
                $table->string('website');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investitors', function (Blueprint $table) {
            $table->dropColumn('website');
        });
    }
}
