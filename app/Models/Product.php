<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'price',
        'user_id',
        'is_available',
        'image',
    ];
    protected $casts = [
        'is_available' => 'boolean',
        'price' => 'decimal:2',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
    public function user()
{
    return $this->belongsTo(User::class); 
}
}
