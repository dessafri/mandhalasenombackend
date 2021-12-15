<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class artikelModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nama', 'tanggal', 'photo', 'keterangan'];
    protected $table = 'artikel';

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
