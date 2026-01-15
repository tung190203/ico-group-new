<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug' , 'is_active', 'sort_order'] ;

    protected static function booted()
    {
        static::creating(function ($partner) {
            if (empty($partner->slug)) {
                $partner->slug = static::generateUniqueSlug($partner->name);
            }
        });

        static::updating(function ($partner) {
            if ($partner->isDirty('name')) {
                $partner->slug = static::generateUniqueSlug($partner->name, $partner->id);
            }
        });
    }

    protected static function generateUniqueSlug($name, $ignoreId = null)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $i = 1;

        while (
            static::where('slug', $slug)
            ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $i++;
        }

        return $slug;
    }
}
