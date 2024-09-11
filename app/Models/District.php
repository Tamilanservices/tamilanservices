<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'districts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'status',
    ];

    /**
     * Get only the active districts.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function active()
    {
        return self::where('status', 'Y');
    }

    /**
     * Get only the inactive districts.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function inactive()
    {
        return self::where('status', 'N');
    }
}
