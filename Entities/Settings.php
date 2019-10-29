<?php

namespace Modules\Settings\Entities;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model implements KeyValues
{
    protected $fillable = [];

    public function scopeKey ($key) {
        $this->where('key', $key);
    }

    public function value ($key) {
        return $this->key($key)->first()->value;
    }
}
