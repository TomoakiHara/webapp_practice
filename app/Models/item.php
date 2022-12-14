<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    protected $fillable = ['id','todo'];

    public function tag()
    {
        return $this->belongsTo('App\Models\Tag');
    }

}
