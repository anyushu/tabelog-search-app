<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabelog_shops', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->string('name');
            $table->string('name_supplement')->nullable();
            $table->string('address')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('hp')->nullable();
            $table->double('longitude', 10, 7)->nullable();
            $table->double('latitude', 10, 7)->nullable();
            $table->float('score', 4, 2)->nullable();
            $table->integer('reviews')->nullable();
            $table->string('genres')->nullable();
            $table->integer('seats')->nullable();
            $table->string('seats_text')->nullable();
            $table->integer('budget_dinner')->nullable();
            $table->integer('budget_lunch')->nullable();
            $table->string('private_room')->nullable();
            $table->string('reserved')->nullable();
            $table->string('smoking')->nullable();
            $table->string('parking_lot')->nullable();
            $table->string('equipment')->nullable();
            $table->string('scene')->nullable();
            $table->string('location')->nullable();
            $table->string('service')->nullable();
            $table->string('with_children')->nullable();
            $table->string('dress_code')->nullable();
            $table->string('course')->nullable();
            $table->string('drink')->nullable();
            $table->string('cuisine')->nullable();
            $table->string('remarks')->nullable();
            $table->string('online_reservation')->nullable();
            $table->datetime('opened_at')->nullable();
            $table->string('closed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabelog_shops');
    }
};
