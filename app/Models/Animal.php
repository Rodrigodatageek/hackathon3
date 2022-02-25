<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasOne(Image::class);
    }

    public function owners()
    {
        return $this->belongsTo(Owner::class);
    }
}
