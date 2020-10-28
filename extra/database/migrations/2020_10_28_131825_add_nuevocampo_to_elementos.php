<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNuevocampoToElementos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elementos', function (Blueprint $table) {
			$table->string('nuevo_campo')->nullable()->after('description');//Para añadir un nuevo campo
			$table->string('version',20)->change();//Para cambiar las propiedades de un campo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('elementos', function (Blueprint $table) {
			$table->dropColumn('nuevo_campo');
			$table->string('version',255)->change();
        });
    }
}
