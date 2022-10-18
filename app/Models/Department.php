<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'name', 'abbreviation', 'number_employees'];
    // App\Models\Department
    public function director() {
        return $this->hasOne(User::class, 'id', 'director_id');
    }
}
