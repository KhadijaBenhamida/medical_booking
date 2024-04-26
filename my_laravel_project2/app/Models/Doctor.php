<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    // The table associated with the model.
    protected $table = 'doctors';

    // The attributes that are mass assignable.
    protected $fillable = ['Doctor Name', 'Speciality', 'Country', 'City'];
}
