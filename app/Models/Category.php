<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function members() {
        return $this->hasMany(Member::class);
    }
    protected $fillable=[
        'name','created_by'
    ];
}
