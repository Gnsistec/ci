<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModMenu extends Model
{
    protected $table='menu';
    protected $primaryKey='id';
    protected $fillable=[
        'lun_des',
        'lun_alm',
        'mar_des',
        'mar_alm',
        'mie_des',
        'mie_alm',
        'jue_des',
        'jue_alm',
        'vie_des',
        'vie_alm'
    ];
    protected $guarded=[];
}
