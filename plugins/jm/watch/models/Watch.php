<?php namespace Jm\Watch\Models;

use Model;

/**
 * Model
 */
class Watch extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jm_watch_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    /* Relations */

    public $attachOne = [

        'watchPic' => 'System\Models\File'
    ];

    public $attachMany = [

        'watchPic2' => 'System\Models\File'
    ];

}
