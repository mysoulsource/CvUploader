<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected  $fillable = [
        'first_name','middle_name','last_name','highest_degree','completed_date','organization','address',
        'phone','email','skills','rating','interest','github','linkedIn','experience','awards_title','awards_year',
        'awards_organization','reference_name','reference_contact','reference_associated','user_id'
    ];
}
