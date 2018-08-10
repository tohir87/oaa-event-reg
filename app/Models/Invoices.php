<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'invoices';
    protected $fillable = array(
        'ref_id_id',
        'participant_id',
        'access_lvel',
        'amount',
//        'addons',
//        'amount',
    );
    public $timestamps = true;
}
