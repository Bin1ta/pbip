<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'name',
        'photo',
        'department_id',
        'designation_id',
        'level',
        'phone',
        'email',
        'address',
        'position',
        'status',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function designation(): BelongsTo
    {
        return $this->belongsTo(Designation::class);
    }

    public function getPhotoAttribute($value): string
    {
        return $this->attributes['photo'] ? asset('storage/' . $this->attributes['photo']) : asset('assets/backend/images/user_icon.jpg');
    }

    public function setPhotoAttribute($value)
    {
        $this->attributes['photo'] = $value->store('employee', 'public');
    }
}
