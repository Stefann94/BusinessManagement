<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Business extends Model
{
    use HasFactory;

    protected $table = 'business';

    protected $fillable = [
        'startdate',
        'name',
        'domain',
        'status',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}