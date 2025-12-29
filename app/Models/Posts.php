<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Posts 
{
    // private $unggahan =[
    //     [
    //         "konten" =>"Selamat Pagi",
    //         "foto" =>"ini foto",
    //         "video" =>"ini video"
    //     ],

    //     [
    //         "konten" => "Selamat Sore",
    //         "foto" =>  "ini foto2",
    //         "video"=>  "ini foto3"
    //     ]
        
    //     ];
    private $username;
    private $konten = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga aut sed totam minima adipisci, reiciendis excepturi nemo harum eveniet debitis. Est sint nobis corrupti repellendus? Explicabo deleniti, culpa beatae laudantium obcaecati quisquam ex amet similique repellat nostrum aspernatur laborum? Quas ex nobis quod reprehenderit, nulla doloribus quia sit necessitatibus cupiditate.";
    private $foto;
    private $video;
    
    public function getPosts()
    {
        return $this -> konten;
    }
}
