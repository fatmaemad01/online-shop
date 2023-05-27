<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'parent_id', 'description', 'image'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeSearch(EloquentBuilder $builder, $value)
    {
        if ($value) {
            $builder->where('categories.name', 'LIKE', "%$value%");
        }
    }


    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return asset('dist/img/default.png');
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return Storage::disk('public')->url($this->image);
    }
}
