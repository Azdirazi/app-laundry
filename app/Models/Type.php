<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    protected $fillable = [
        'type_laundry',
        'proces',
        'rates',
    ];

    public function Laundry()
    {
        return $this->hasOne(Laundry::class);
    }
}
