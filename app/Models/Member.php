<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function contribution_types(){
        return $this->belongsToMany(ContributionType::class);
    }
    //relation member_profession
    public function professions(){
        return $this->belongsToMany(Profession::class);
    }
    public function clubs(){
        return $this->belongsToMany(Club::class);
    }
    public function divisions(){
        return $this->belongsToMany(Division::class);
    }
    protected $fillable=[
        'firtname','lastname','adress','phone','gender','born_at',
        'palceofbirth','active','banned_at','created_by','update_by',
        'picture_path','birth_path','category_id'

    ];
}
