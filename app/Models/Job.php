<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    use HasFactory;

    public function employer(){

        return $this->BelongsTo(Employer::class);
    }
    public function tag(){

    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
