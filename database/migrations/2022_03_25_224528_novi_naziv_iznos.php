<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NoviNazivIznos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investicijas', function (Blueprint $table) {
            $table->renameColumn('iznos', 'vrednost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investicijas', function (Blueprint $table) {
            $table->renameColumn('vrednost', 'iznos');
        });
    }
}
