<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tarea extends Model
{
    use HasUuids;
    protected $keyType = 'string';
    protected $fillable = ['id','project_id', 'title', 'description', 'status', 'priority', 'due_date'];

    protected static function booted(){
        static::creating(function ($model){
            $model->id = Str::uuid();
        });
    }

    public function tareas(){
        return $this->belongsTo(Proyecto::class, 'project_id');
    }
}
