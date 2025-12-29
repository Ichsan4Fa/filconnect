<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['student_id','konten','foto','video'];
    private $student_id;
    private $konten;
    private $foto;
    private $video;
}
