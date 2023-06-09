<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];

    public function user_name()
    {
        return $this->belongsTo(User::class, "created_by", "id");
    }
    public function updater_name()
    {
        return $this->belongsTo(User::class, "updated_by", "id");
    }
}
