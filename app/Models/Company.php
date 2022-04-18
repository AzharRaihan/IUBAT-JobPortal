<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobPost()
    {
        $this->hasMany(JobPost::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
