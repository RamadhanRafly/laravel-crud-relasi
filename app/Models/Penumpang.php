<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;
    protected $table ='penumpang';
    protected $primaryKey ='id';
    protected $fillable = ['nama','no_telp','jenis_kelamin'];
}
