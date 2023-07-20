<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['project_id'];

    protected $searchableFields = ['*'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function sprints()
    {
        return $this->belongsToMany(Sprint::class);
    }

    public function boards()
    {
        return $this->belongsToMany(Board::class);
    }
}
