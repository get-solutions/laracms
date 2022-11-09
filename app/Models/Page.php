<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $template
 * @property string $slug
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'template',
        'slug',
    ];
}
