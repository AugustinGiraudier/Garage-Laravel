<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['content','vehicule_id'];

    public function vehicule(){
        return $this->belongsTo(vehicule::class);
    }
}
