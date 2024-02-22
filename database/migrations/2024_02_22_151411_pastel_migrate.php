<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
        Schema::create('pasteles', function(BluePrint $tabla) {
            $tabla->id();
            $tabla->string('nombre');
            $tabla->string('sabor');
            $tabla->string('imagen');
            $tabla->timestamps();
        });
    }
    public function down(){
        Schema::table('pasteles', function(Blueprint $tabla) {
            $tabla->dropColumn('pasteles');
        });
    }
};