<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAnnbGlobalflexProjects2 extends Migration
{
    public function up()
    {
        Schema::table('annb_globalflex_projects', function($table)
        {
            $table->renameColumn('project_title', 'title');
        });
    }
    
    public function down()
    {
        Schema::table('annb_globalflex_projects', function($table)
        {
            $table->renameColumn('title', 'project_title');
        });
    }
}
