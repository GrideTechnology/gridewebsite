<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsDeletedColumnInProvider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('common')->table('providers', function (Blueprint $table) {                        
            $table->tinyInteger('is_deleted')->default(0)->comment('0 - Not Deleted, 1 - Deleted')->after('modified_by');
            // $table->integer('deleted_at')->nullable()->after('is_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('provider', function (Blueprint $table) {
        //     //
        // });
    }
}