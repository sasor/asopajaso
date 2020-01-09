<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['path',  'acm_id'];

    public function acm()
    {
        return $this->belongsTo(Acm::class);
    }
}
