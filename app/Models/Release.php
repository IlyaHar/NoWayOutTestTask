<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Release extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'releases';
    protected $fillable = ['version', 'name', 'description', 'text', 'image', 'video', 'link', 'is_protected', 'project_id'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function features(): HasMany
    {
        return $this->hasMany(Feature::class, 'release_id', 'id');
    }
}
