<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table='tbl_student';
    protected $primaryKey='id';
    protected $fillable=['name_khmer','name_latin','email','phone_number','gender_id',
        'relationship_id','date_of_birth','nationality','province_id','district_id','commune_id','village_id','address'];
}
