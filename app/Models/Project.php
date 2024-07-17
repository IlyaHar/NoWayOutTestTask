<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'projects';
    protected $fillable = ['name', 'description', 'image', 'domain'];

    public function releases(): HasMany
    {
        return $this->hasMany(Release::class, 'project_id', 'id');
    }
}
