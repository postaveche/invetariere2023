<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mf extends Model
{
    use HasFactory;
    protected $table = 'mf';

    public function tip(){
        return $this->belongsTo(Tip::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function personal(){
        return $this->belongsTo(Personal::class);
    }
}
