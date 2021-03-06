<?php

use Illuminate\Database\Schema\Blueprint;
use LucaDegasperi\OAuth2Server\Support\Migration;

class CreateOauthGrantsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema()->create('oauth_grants', function (Blueprint $table) {

            $prefix = Config::get('database.connections.pgsql.prefix');

            $table->string('id', 40)->primary()->default(DB::raw("{$prefix}id_generator()"));
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
        $this->schema()->drop('oauth_grants');
    }
}
