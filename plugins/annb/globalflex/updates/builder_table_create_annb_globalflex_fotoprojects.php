<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAnnbGlobalflexFotoprojects extends Migration
{
    public function up()
    {
        Schema::create('annb_globalflex_fotoprojects', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('mediafinder')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('annb_globalflex_fotoprojects');
    }
}
