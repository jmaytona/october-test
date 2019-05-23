<?php namespace Jm\Watch\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJmWatch2 extends Migration
{
    public function up()
    {
        Schema::table('jm_watch_', function($table)
        {
            $table->smallInteger('featured')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('jm_watch_', function($table)
        {
            $table->dropColumn('featured');
        });
    }
}
