<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['name','balance'];

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
}
