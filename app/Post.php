<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model {
    protected $fillable = [ 'title', 'body', 'user_id' ];

    public function comments () {
        return $this->hasMany(Comment::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function addComment ($body) {
        $this->comments()->create([
            'body' => $body,
            'user_id' => auth()->id(),
        ]);
    }

    public static function archives () {
        return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();
    }

    public function scopeFilter ($query, $filters) {
        if (isset($filters['month'])) {
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if (isset($filters['year'])) {
            $query->whereYear('created_at', Carbon::parse($filters['year'])->year);
        }
    }

    public function tags () {
        return $this->belongsToMany(Tag::class);
    }
}
