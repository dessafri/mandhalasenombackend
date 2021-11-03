<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fotoModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nama', 'tanggal', 'photo'];
    protected $table = 'photo';

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
