<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    
    protected $fillable = [
        'name',
        'gender',
        'address',
        'phone',
        'img',
    ];

    public function Laundry()
    {
        return $this->hasOne(Laundry::class);
    }
}
