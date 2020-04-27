<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function words() {
        return $this->hasMany(Word::class);
    }
}
