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
        Schema::create('produse', function (Blueprint $table)
        {
            $table->id();
//            $table->bigInteger('category_id')->unsigned();
            $table->string('nume')->nullable();
            $table->float('pret')->nullable();
            $table->string('imagine')->nullable();
            $table->foreignId('categorie_id')->constrained('categorii')->onDelete('cascade');
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
        //
    }
};
