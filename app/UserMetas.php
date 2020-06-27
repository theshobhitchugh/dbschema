<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMetas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'phone', 'city', 'state', 'country', 'selected_payment_gayeway'
    ];
}
