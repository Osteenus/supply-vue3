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
        Schema::create('stock_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('request_date')->nullable();
            $table->string('request_number')->nullable();
            $table->enum('request_type', ['First issue', 'Replacement']);
            $table->date('shipping_date')->nullable();
            $table->enum('status', ['Created', 'Waiting for user', 'Under purchase', 'Sent', 'Act issued', 'Canceled']);
            $table->string('assets_recipient');
            $table->string('location');
            $table->date('assignment_date')->nullable();
            $table->string('notes', 255)->nullable();
            $table->integer('assets_weight')->nullable();
            $table->integer('assets_declared_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_requests');
    }
};
