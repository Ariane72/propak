<?php

namespace app;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Usuario extends Authenticatable
{
    use Notifiable;
     
    protected $fillable = [
        'nome','uuid' ,'login', 'email', 'senha', 'cargo'
    ];
 
    protected $hidden = [
        'senha'
    ];

    

    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->uuid = (string) Uuid::generate(4);
    });
}

   

}
