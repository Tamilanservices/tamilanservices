<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessInfo extends Model
{
    // Specify the table name if it differs from the default convention
    protected $table = 'business_info';

    // Allow mass assignment for these fields
    protected $fillable = [
        'phone',
        'business_name',
        'photo',
        'address',
        'shortd_discription',
        'full_discription',
        'district_id',
        'created_by',
        'updated_by',
    ];

    // If timestamps are not following the default created_at and updated_at, you can define them like this:
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

}
