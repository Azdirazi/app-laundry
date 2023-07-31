<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    protected $table = 'laundries';
    protected $primaryKey="id";
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

    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function Type()
    {
        return $this->hasOne(Type::class);
    }
    public function Costumer()
    {
        return $this->hasOne(Costumer::class);
    }
}
