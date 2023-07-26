<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expend extends Model
{
    use HasFactory;

    protected $table = 'expends';

    protected $fillable = [
        'do_expend',
        'note',
        'expend',
    ];

    public function Repot()
    {
        return $this->belongsTo(Repot::class);
    }
}

