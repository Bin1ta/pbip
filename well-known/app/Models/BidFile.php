<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BidFile extends Model
{
    use HasFactory,softDeletes;
    protected $fillable = [
        'title',
        'file',
        'bid_id'
    ];

    public function bid(): HasMany
    {
        return $this->hasMany(Bid::class);
    }
}
