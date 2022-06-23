<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicule extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['owner','owner_mail','type_id','brand', 'model','horsepower','color'];

    public function type(){
        return $this->belongsTo(type::class, 'type_id');
    }
    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
