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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('office_id');
            $table->string('ticket_number');
            $table->string('contact_person');
            $table->string('event_name');
            $table->string('date_start');
            $table->string('date_end');
            $table->string('call_time');
            $table->string('location');;
            $table->string('assigned_to')->nullable();;
            $table->string('status')->nullable();;
            $table->integer('number_of_tech');
            $table->longtext('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
