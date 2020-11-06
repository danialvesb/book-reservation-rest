<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = ['book', 'group_id', 'days', 'created_date'];
    protected $table = 'historical';

    function group()
    {
        return $this->belongsTo(Group::class, 'groups');
    }
}
