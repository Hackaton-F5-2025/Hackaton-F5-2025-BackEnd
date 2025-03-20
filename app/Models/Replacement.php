<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Replacement extends Model
{
    use HasFactory;
    protected $table = 'replacement';
    protected $fillable = [
        'name',
        'description',
        'image_url',
        'amount',
        'price',
        'state',
    ];

   public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function homeAppliances(): HasMany
    {
        return $this->hasMany(Appliance::class);
    }
}
