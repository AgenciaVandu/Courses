<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Descriptor\Descriptor;

class Platform extends Model
{

    use HasFactory;
    protected $guarded = ['id'];
    //Relacion uno a uno
    public function description(){
        return $this->hasOne(Descriptor::class);
    }

    //Relacion uno a muchos
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }



}
