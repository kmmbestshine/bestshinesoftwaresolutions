<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Franchasee extends Model
{
    protected $fillable = ['name', 'state', 'district', 'taluka', 'address', 'city', 'contact_no'];
}
