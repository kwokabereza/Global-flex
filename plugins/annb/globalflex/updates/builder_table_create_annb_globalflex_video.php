<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAnnbGlobalflexVideo extends Migration
{
    public function up()
    {
        Schema::create('annb_globalflex_video', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('annb_globalflex_video');
    }
}
