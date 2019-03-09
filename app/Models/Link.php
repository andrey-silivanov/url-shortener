<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'links';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'url'
    ];
}
