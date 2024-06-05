<?php

use App\Models\Costume;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('costume_id');
            $table->decimal('subtotal', 10, 2)->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('alamat_pengiriman')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->string('metode_pengambilan')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('rentals');
    }
};
