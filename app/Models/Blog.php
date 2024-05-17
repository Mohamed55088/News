<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title', 'brief_explanation', 'long_explaination'];
    protected $fillable = ['title', 'brief_explanation', 'long_explaination', 'admin_id'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'admin_id' => 'integer',
    ];

    /**
     * The attributes that should be validated.
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'brief_explanation' => 'required|string|max:500',
        'long_explanation' => 'required|string',
        'admin_id' => 'required|integer|exists:admins,id',
    ];

    /**
     * Get the validation rules that apply to the model.
     *
     * @return array
     */
    public static function getValidationRules()
    {
        return self::$rules;
    }
    public function image()
    {
        return $this->hasOne(Image::class, 'blog_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
