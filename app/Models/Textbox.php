<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Textbox extends Model
{
    protected $fillable = ['selected_count'];

    use HasFactory;
}
