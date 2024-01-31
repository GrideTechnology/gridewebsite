<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVinNumberToProviderVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provider_vehicles', function (Blueprint $table) {
            $table->string('vin_number')->after('child_seat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provider_vehicles', function (Blueprint $table) {
            $table->dropColumn('vin_number');
        });
    }
}
