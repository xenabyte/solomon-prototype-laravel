<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class directories extends Model
{
    //
    protected $fillable = [
        'message', 'withdrawal', 'office_address', 'image', 'business_description',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
