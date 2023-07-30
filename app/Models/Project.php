<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'title',
        'description',
    ];


    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function sprints()
    {
        return $this->hasMany(Sprint::class);
    }

    public function boards()
    {
        return $this->hasMany(Board::class);
    }
}
