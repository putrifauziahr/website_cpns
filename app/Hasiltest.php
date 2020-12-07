<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasiltest extends Model
{
    protected $table = 'hasiltests';
    protected $primaryKey = 'no_ujian';
    protected $fillable = ['id_user', 'nilai_twk','nilai_tkp','nilai_tiu','hasil',];
}
