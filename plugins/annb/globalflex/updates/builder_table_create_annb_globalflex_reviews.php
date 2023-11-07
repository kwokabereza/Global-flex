<?php namespace Annb\Globalflex\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAnnbGlobalflexReviews extends Migration
{
    public function up()
    {
        Schema::create('annb_globalflex_reviews', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('title')->nullable();
            $table->text('content')->nullable();
            $table->string('mediafinder')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('annb_globalflex_reviews');
    }
}
