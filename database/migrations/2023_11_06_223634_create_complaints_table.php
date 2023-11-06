<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Room;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['MAINTENANCE', 'GENERAL']);
            $table->string('detail')->nullable();
            $table->foreignIdFor(Room::class);

            //type = general
            $table->string('response')->nullable();
            $table->date('response_date')->nullable();

            //type = maintenance
            $table->enum('status', ['PENDING', 'SCHEDULED', 'FIXED', 'END'])->nullable();
            $table->string('img')->nullable();
            $table->string('customer_appointment_date')->nullable();
            $table->date('appointment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
