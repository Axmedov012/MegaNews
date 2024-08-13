<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VideoPost extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'tag_id', 'video','title','description','photo'];

    public function user():BelongsTo { return $this->belongsTo(User::class); }
    public function tag():BelongsTo { return $this->belongsTo(Tag::class); }
}
