<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Dataruang extends Model
{
    use HasFactory;

    protected $table = 'data_ruangs';

    protected $fillable = [
        'namaruangan',
        'jenisruangan',
        'keterangan',
    ];

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l,d F Y');
    }
}
