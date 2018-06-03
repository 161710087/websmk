<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $table = ['prestasi'];
    protected $fillable = ['nama','bidang'];
    protected $timestamp=true; 

    public fuunction prestasi(){

    }
}
