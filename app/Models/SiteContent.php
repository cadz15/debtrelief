<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteContent extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'page_type',
        'page_style',
        'content',
        'content_text',
        'cms_group',
        'cms_order'
    ];
}
