<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users_table extends Model
{
  public $incrementing = false;
  protected $table = 'users_tables';

  protected $fillable = ['id', 'Name', 'Age', 'Gender'];
  protected $guarded = ['created_at', 'updated_at'];

  protected $casts = [
    'id' => 'integer',
    'Name' => 'string',
    'Age' => 'integer',
    'Gender' => 'integer'
  ];
}


