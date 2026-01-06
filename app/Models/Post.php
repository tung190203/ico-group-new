<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'status',
        'thumbnail',
        'description',
        'content',
        'create_by',
        'view_count',
        'tags'
    ];

    const SOLUTION = 2;

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLISHED = 'published';
    const STATUS_ARCHIVED = 'archived';

    const STATUS = [
        self::STATUS_DRAFT,
        self::STATUS_PUBLISHED,
        self::STATUS_ARCHIVED
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public static function scopeWithFullRelations($query){
        return $query->with('category', 'author');
    }
}
