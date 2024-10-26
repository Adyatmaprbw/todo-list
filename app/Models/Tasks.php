<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $fillable = ['commend_id', 'nama_pj', 'detail', 'priority', 'status', 'stard_date', 'end_date'];

    protected $timestamps = true;
}
