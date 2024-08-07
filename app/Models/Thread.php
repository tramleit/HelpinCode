<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reply;
use App\Models\Channel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'channel_id', 'name', 'slug', 'body'];

    public function channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class);
    }
}
