<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModMenu extends Model
{
    protected $table='menu';
    protected $primaryKey='id';
    protected $fillable=[
        'id_lun_des',
        'id_lun_alm',
        'id_mar_des',
        'id_mar_alm',
        'id_mie_des',
        'id_mie_alm',
        'id_jue_des',
        'id_jue_alm',
        'id_vie_des',
        'id_vie_alm'
    ];
    protected $guarded=[];
}
