<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
          /**
           * Run the migrations.
           */
          public function up(): void
          {
                    Schema::create('products', function (Blueprint $table) {
                              $table->unsignedBigInteger('nevisandeh_id');
                              $table->foreign('nevisandeh_id')->references('id')->on('nevisandehs');

                              $table->id();
                              $table->string('name');
                              $table->text('description')->nullable();
                              $table->bigInteger('price');
                              $table->integer('inventory');
                              $table->string('image')->nullable();
                              $table->timestamps();
                        $table->string('published_date')->nullable();
                        $table->bigInteger('categorie_id')->unsigned();
                        $table->foreign('categorie_id')
                            ->references('id')
                            ->on('categories');                    });
          }

          /**
           * Reverse the migrations.
           */
          public function down(): void
          {
                    Schema::dropIfExists('products');
          }
};
