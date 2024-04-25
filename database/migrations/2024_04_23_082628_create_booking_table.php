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
        Schema::create('bookings', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->foreignUuid("vehicle_id")->constrained();
            $table->string("driver", 150);
            $table->date("date_start");
            $table->date("date_end");
            $table->integer("kilometers");
            $table->string('fuel_oil', 100);
            $table->string("destination", 150);
            $table->string("tenant_name", 150);
            $table->foreignUuid("first_approver")->constrained("users");
            $table->foreignUuid("second_approver")->constrained("users");
            $table->foreignUuid("user_id")->constrained("users");
            $table->string("status", 50)->default("review");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
