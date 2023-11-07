<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbGlobalflexProjects extends Migration
{
    public function up()
    {
        Schema::table('annb_globalflex_projects', function($table)
        {
            $table->dropColumn('mediafinder');
        });
    }
    
    public function down()
    {
        Schema::table('annb_globalflex_projects', function($table)
        {
            $table->string('mediafinder', 255)->nullable();
        });
    }
}
