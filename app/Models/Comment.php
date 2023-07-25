<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['task_id'];

    protected $searchableFields = ['*'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
