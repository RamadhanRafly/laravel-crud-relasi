<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    protected $table='jenis_kelamin';
    protected $primaryKey='id';
    protected $fillable=[
        'jenis_kelamin'
    ];
    public function penumpang()
    {
        return $this->hasMany(Penumpang::class);
    }   
    
}       