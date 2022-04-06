<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_line1',
        'address_line2',
        'city',
        'district',
        'zip',
        'country',
        'user_id',
        'latlng',
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
