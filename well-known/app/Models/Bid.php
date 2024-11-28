<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bid extends Model
{
    use HasFactory;

    protected $fillable = [
        'fiscal_year_id',
        'buyer_name',
        'address',
        'tax',
        'vat',
        'lot',
        'phone',
        'email',
        'bid_office_id',
    ];
    public function fiscalYear(): BelongsTo
    {
        return $this->belongsTo(FiscalYear::class);
    }
    public function bidOffice(): BelongsTo
    {
        return $this->belongsTo(BidOffice::class);
    }

    public function bidFiles(): HasMany
    {
        return
        $this->hasMany(BidFile::class);
    }

}
