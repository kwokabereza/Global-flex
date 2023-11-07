<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbGlobalflexPromo3 extends Migration
{
    public function up()
    {
        Schema::table('annb_globalflex_promo', function($table)
        {
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->renameColumn('text', 'title');
        });
    }
    
    public function down()
    {
        Schema::table('annb_globalflex_promo', function($table)
        {
            $table->dropColumn('description');
            $table->dropColumn('content');
            $table->renameColumn('title', 'text');
        });
    }
}
