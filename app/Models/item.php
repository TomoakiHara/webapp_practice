<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    protected $fillable = ['id','todo','tag_id'];

    public function tag()
    {
        return $this->belongsTo('App\Models\Tag');
    }

    public function getTagId()
    {
        return $this->tag_id;
    }
}
