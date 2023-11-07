<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbGlobalflexFotoprojects extends Migration
{
    public function up()
    {
        Schema::table('annb_globalflex_fotoprojects', function($table)
        {
            $table->text('title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('annb_globalflex_fotoprojects', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
