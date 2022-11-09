<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $title
 * @property string $template
 * @property string $abstract
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'template',
        'abstract',
    ];

    public function categories(): HasMany {
        return $this->hasMany(Category::class);
    }

    public function tags(): HasMany {
        return $this->hasMany(Tag::class);
    }
}
