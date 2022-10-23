<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    public $table = "posts";

    protected $fillable = [
        'title',
        'content',
        'active',
        'created_by',
        'updated_by',
    ];

    public function created_by_user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updated_by_user()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
