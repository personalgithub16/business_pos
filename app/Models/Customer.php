<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'Customer_id',
        'Customer Name',
        'Area',
        'Address',
        'Mobile',
        'Office_Phone',
        'email',
        'credit limit',
        'customer_type',
        'organization'
    ];

    use HasFactory;
}
