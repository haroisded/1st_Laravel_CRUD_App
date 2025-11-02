<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users_table extends Model
{
  protected $table = 'users_tables';
  public $incrementing = false;

  protected $fillable = ['id', 'Name', 'Age', 'Gender'];
  protected $guarded = ['created_at', 'updated_at'];

  protected $casts = [
    'id' => 'integer',
    'Name' => 'string',
    'Age' => 'integer',
    'Gender' => 'string'
  ];
}


