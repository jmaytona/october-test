<?php namespace Jm\Watch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJmWatch3 extends Migration
{
    public function up()
    {
        Schema::table('jm_watch_', function($table)
        {
            $table->string('slug', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('jm_watch_', function($table)
        {
            $table->string('slug', 191)->nullable(false)->change();
        });
    }
}
