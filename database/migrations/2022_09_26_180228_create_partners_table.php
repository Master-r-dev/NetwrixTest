<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        DB::unprepared( file_get_contents( "database/partner_locator.sql" ) );
        DB::unprepared( file_get_contents( "database/loc_country.sql" ) );
        DB::unprepared( file_get_contents( "database/loc_state.sql" ) );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner_locator');
        Schema::dropIfExists('loc_country');
        Schema::dropIfExists('loc_state');
    }
};
