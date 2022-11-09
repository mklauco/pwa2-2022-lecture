<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// in model preamble
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory;
// in Model class
use SoftDeletes;
    
    protected $fillable = [ 'name', 'abbreviation', 'number_employees', 'director_id'];
    // App\Models\Department
    public function director() {
        return $this->hasOne(User::class, 'id', 'director_id');
    }
}
