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
                              $table->foreign('nevisandeh_id')->references('id')->on('nevisandehs')->onDelete('cascade');
                              $table->id();
                              $table->string('name_book');
                              $table->string('entesharat')->nullable();
                              $table->text('description')->nullable();
                              $table->string('shabak')->nullable();
                              $table->string('code_book')->index();
                              $table->string('motarjem')->nullable();
                              $table->bigInteger('main_price');
                              $table->bigInteger('off_price');
                              $table->integer('inventory');
                              $table->string('image')->nullable();
                              $table->string('status');
                              $table->timestamps();
                    });
          }

          /**
           * Reverse the migrations.
           */
          public function down(): void
          {
                    Schema::dropIfExists('products');
          }
};
