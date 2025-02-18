<?php

namespace App\Models;

use App\Models\Thread;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description'];

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
