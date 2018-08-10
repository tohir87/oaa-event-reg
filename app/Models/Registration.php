<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'registrations';
    protected $fillable = array(
        'ref_id',
        'institution_name',
        'email_address',
        'program_offered',
        'address',
        'organisation_name',
        'org_email_address',
        'service_type',
        'participant_name',
        'participant_designation',
        'participant_email_address',
        'participant_name2',
        'participant_designation2',
        'participant_email_address2',
    );
    public $timestamps = true;
}
