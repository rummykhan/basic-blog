<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Post
 * @package App\Models
 *
 * @property int $id
 *
 * @property string $title
 * @property string $content
 * @property boolean $is_active
 * @property integer $user_id
 *
 * @property string $created_at
 * @property string $updated_at
 *
 * @property User $user
 */
class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title', 'content', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getSlug()
    {
        return Str::slug($this->title);
    }
}
