<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
     // Tambahkan code ini untuk menghubungkan class Task dengan tabel tasks
     protected $fillable = ['name', 'detail', 'due_date', 'status'];
}
