<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TravelPackage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function galleries() : HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}
