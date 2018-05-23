<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArchiveColumnToLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('links', function (Blueprint $table)
        {
            // Add archive url
            $table->longText('archive_url')->nullable();
        });
    }

    public function down()
    {
        Schema::table('links', function (Blueprint $table)
        {
            $table->dropColumn('archive_url');
        });
    }
}
