<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

     public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('volume_id')->after('quantity');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'volume_id')) {
                $table->dropColumn('volume_id');
            }
        });
    }
};
