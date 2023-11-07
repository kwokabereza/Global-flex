<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbGlobalflexVideo extends Migration
{
    public function up()
    {
        Schema::table('annb_globalflex_video', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('annb_globalflex_video', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
