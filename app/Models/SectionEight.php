<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SectionEight extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title','notes'];

    protected $fillable = [
        'title',
        'notes',
        'photo',
        'page_id',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class,'page_id');
    }
}