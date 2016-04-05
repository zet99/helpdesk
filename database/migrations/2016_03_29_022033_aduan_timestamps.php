<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AduanTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aduan', function ($table) {
            $table->timestamps();
            $table->renameColumn('skpd', 'id_skpd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aduan', function ($table) {
            $table->renameColumn('id_skpd', 'skpd');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
