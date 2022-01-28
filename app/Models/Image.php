<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['org_path', 'thumbnail_path', 'user_id', 'description'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(USER::class);
    }

    public function votes()
    {
        return $this->belongsToMany(User::class, 'votes');
    }

    public function countUpVotes()
    {
        return $this->votes()->where('value', '=', '1')->count();
    }

    public function countDownVotes()
    {
        return $this->votes()->where('value', '=', '-1')->count();
    }
}
