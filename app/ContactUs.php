<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactUs extends Model
{
	use Notifiable;

    /**
       * The database table used by the model.
       *
       * @var string
       */
      protected $table = 'contact';

      /**
      * The database primary key value.
      *
      * @var string
      */
      protected $primaryKey = 'id';

      /**
       * Attributes that should be mass-assignable.
       *
       * @var array
       */
      protected $fillable = ['name','email'];
                        
      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */
      protected $hidden = [ 'email','update_at','created_at'];
        
      /**
       * The attributes that should be mutated to dates.
       *
       * @var array
       */
      protected $dates = ['update_at','created_at'];
      
      /**
       * The attributes that should be cast to native types.
       *
       * @var array
       */
      protected $casts = [];
}
