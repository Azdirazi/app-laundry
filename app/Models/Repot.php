<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repot extends Model
{
    use HasFactory;

    protected $table = 'reports';



    public function Expand()
    {
        return $this->hasMany(Expand::class);
    }
    public function Laundry()
    {
        return $this->hasMany(Laundry::class);
    }
}
