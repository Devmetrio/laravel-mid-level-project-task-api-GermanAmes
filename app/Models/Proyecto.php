<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Proyecto extends Model
{
    use HasUuids;
    protected $keyType = 'string';
    protected $fillable = ['id','name', 'description', 'status'];

    protected static function booted(){
        static::creating(function ($model){
            $model->id = Str::uuid();
        });
    }

    public function tareas(){
        return $this->hasMany(Tarea::class, 'project_id');
    }
}
