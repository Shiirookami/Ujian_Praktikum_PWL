<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $primaryKey = 'nidn';
    protected $fillable = [
        'nidn','nama','alamat'
    ];
    public function students()
    {
        return $this->hasMany(Student::class, 'nidn', 'nidn');
    }
}
