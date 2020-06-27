<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPayments extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'transaction_id', 'amount', 'last_4', 'card_id', 'meta_data', 'transaction_ip', 'status'
    ];
}
