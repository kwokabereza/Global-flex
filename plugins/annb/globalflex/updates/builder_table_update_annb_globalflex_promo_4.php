<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbGlobalflexPromo4 extends Migration
{
    public function up()
    {
        Schema::table('annb_globalflex_promo', function($table)
        {
            $table->renameColumn('title', 'text');
        });
    }
    
    public function down()
    {
        Schema::table('annb_globalflex_promo', function($table)
        {
            $table->renameColumn('text', 'title');
        });
    }
}
