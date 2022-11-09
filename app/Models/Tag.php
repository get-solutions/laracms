<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
    ];

    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }
}
