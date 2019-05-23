<?php namespace Jm\Watch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJmWatch extends Migration
{
    public function up()
    {
        Schema::table('jm_watch_', function($table)
        {
            $table->string('slug');
            $table->dropColumn('image_link');
        });
    }
    
    public function down()
    {
        Schema::table('jm_watch_', function($table)
        {
            $table->dropColumn('slug');
            $table->string('image_link', 191);
        });
    }
}
