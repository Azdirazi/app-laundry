<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    protected $table = 'laundries';
    
    protected $fillable = [
        'customers_id',
        'users_id',
        'types_id',
        'do_receipt',
        'do_completion',
        'heavy',
        'notes',
        'total_pay',
        'pay_status',
        'retrieval_status', 
    ];


}
