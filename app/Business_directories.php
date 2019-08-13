<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business_directories extends Model
{
    //
    protected $fillable = [
        'business_name', 'office_address', 'office_contact', 'image', 'business_description',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
