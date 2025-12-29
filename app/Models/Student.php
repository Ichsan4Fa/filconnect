<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable{
    use HasFactory, Notifiable;
    private $nama;
    private $email;
    private $password;
    protected $fillable = [
        'nama',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function getStudents(){
        
    }
}

