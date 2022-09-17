<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function cleanUp(CleanupConfig $config): void
    {
        $config
            ->olderThanDays(1)
            ->scope(function ($query) {
                $query->where('is_active', 0);
            });
    }
}
