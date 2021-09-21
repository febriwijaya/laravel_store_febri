<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $guarded = [];

  protected $hidden =[

  ];

  public function product()
  {
    return $this->hasOne(Product::class, 'id', 'products_id');
  }

  public function user() {
    return $this->belongsTo(User::class, 'users_id', 'id');
  }
}
