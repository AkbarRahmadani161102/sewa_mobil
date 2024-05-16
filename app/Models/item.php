<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'type_id',
        'brand_id',
        'photos',
        'features',
        'price',
        'star',
        'review'
    ];

    protected $casts =[
        'photoa' => 'arry',
    ];

    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function Type()
    {
        return $this->belongsTo(Type::class);
    }

    public function Bookings()
    {
        return $this->hasMany(Booking::class);
    }

}