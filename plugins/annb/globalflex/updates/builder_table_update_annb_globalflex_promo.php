<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbGlobalflexPromo extends Migration
{
    public function up()
    {
        Schema::table('annb_globalflex_promo', function($table)
        {
            $table->text('text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('annb_globalflex_promo', function($table)
        {
            $table->dropColumn('text');
        });
    }
}
