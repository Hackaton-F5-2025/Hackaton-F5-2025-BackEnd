<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Appliance extends Model
{
    use HasFactory;
    protected $table = 'home_appliance';
    protected $fillable = [
        'name',
        'description',
        'model',
        'brand_id',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function replacements(): BelongsToMany
    {
        return $this->belongsToMany(Appliance::class, 'replacements');
    }
}
