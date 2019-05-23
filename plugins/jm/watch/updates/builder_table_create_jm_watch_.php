<?php namespace Jm\Watch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJmWatch extends Migration
{
    public function up()
    {
        Schema::create('jm_watch_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('watch_name');
            $table->text('watch_description')->nullable();
            $table->string('image_link');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jm_watch_');
    }
}
