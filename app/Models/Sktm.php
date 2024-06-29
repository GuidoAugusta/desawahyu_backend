<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sktm extends Model
{
    use HasFactory;

    protected $fillable = [
      'nama',
      'nik',
      'jenis_kelamin',
      'tempat',
      'tanggal_lahir',
      'agama',
      'pekerjaan',
      'alamat',
      'email',
      'ktp',
      'user_id'
    ];

    public function user() : BelongsTo {
      return $this->belongsTo(User::class);
    }
}
