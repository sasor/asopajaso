<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acm extends Model
{
    protected $fillable = ['number', 'label', 'parent_id', 'assessment'];
    protected $table = 'acms';

    public function childs()
    {
        return $this->hasMany(Acm::class, 'parent_id');
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
