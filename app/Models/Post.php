<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','category_id','tag_id','title','description'];

    public function category(): BelongsTo {return $this->belongsTo(Category::class);}
    public function user():BelongsTo { return $this->belongsTo(User::class); }
    public function tag():BelongsTo { return $this->belongsTo(Tag::class); }
    public function comments():HasMany { return $this->hasMany(Comment::class); }
    public function reviews():HasMany { return $this->hasMany(Review::class); }
    public function photos(): MorphMany  { return $this->morphMany (Photos::class,'photoable'); }
}
