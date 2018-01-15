<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ShowModel extends Model
{
    protected $table = 'tbl_show';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];    
}
