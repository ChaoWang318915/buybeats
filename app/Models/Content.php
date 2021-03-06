<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table = "tbl_content";

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
