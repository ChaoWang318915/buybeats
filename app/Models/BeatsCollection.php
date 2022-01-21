<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Models
use App\Models\User;
use App\Models\BeatsCollection;
use App\Models\TagsCollection;

class BeatsCollection extends Model
{
    use HasFactory;

    protected $table = "tbl_beats_collection";

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
