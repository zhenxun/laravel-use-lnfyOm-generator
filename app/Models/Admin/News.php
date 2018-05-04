<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class News
 * @package App\Models\Admin
 * @version May 4, 2018, 5:56 am UTC
 *
 * @property string title
 * @property string content
 * @property integer rank
 */
class News extends Model
{

    public $table = 'news';
    


    public $fillable = [
        'title',
        'content',
        'rank'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'rank' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'content' => 'required',
        'rank' => 'required'
    ];

    
}
