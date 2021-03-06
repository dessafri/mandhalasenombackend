<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class agendaModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'slug', 'Keterangan', 'photo', 'tanggal'];
    protected $table = 'agenda';

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
