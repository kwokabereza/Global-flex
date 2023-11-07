<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbGlobalflexProjects4 extends Migration
{
    public function up()
    {
        Schema::table('annb_globalflex_projects', function($table)
        {
            $table->string('mediafinder')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('annb_globalflex_projects', function($table)
        {
            $table->dropColumn('mediafinder');
        });
    }
}
