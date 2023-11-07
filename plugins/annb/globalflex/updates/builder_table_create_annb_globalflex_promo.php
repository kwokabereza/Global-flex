<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAnnbGlobalflexPromo extends Migration
{
    public function up()
    {
        Schema::create('annb_globalflex_promo', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('annb_globalflex_promo');
    }
}
