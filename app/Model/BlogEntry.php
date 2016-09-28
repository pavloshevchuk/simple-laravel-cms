<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BlogEntry
 *
 * @package App\Model
 */
class BlogEntry extends Model
{
    /**
     * @var string
     */
    protected $table = 'blog_entries';

    /**
     * @var string
     */
    protected $primaryKey = 'blog_entry_id';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'text',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created',
        'updated',
    ];
}
