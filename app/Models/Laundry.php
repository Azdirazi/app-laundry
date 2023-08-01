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
        'types_id',
        'proces',
        'heavy',
        'notes',
        'total_pay',
        'pay_status',
    ];

    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function Type()
    {
        return $this->hasOne(Type::class, "id", "types_id");
    }
    public function Costumer()
    {
        return $this->hasOne(Customer::class, "id", "customers_id");
    }
}
