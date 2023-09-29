<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Omvsd extends Model
{
    use HasFactory;
    protected $table = "omvsd";
    protected $fillable = [
        'name',
        'nr_inv',
        'section_id',
        'personal_id',
        'tip_id'
    ];

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
