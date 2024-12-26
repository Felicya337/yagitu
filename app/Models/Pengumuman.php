<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    // Explicitly define the table name, if it's not following Laravel's default pluralization
    protected $table = 'pengumuman';

    // Specify which attributes are mass assignable
    protected $fillable = ['judul', 'isi'];
}
