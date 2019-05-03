<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //

    protected $fillable = [
        'image', 'firstname', 'other_name', 'surname', 'slug',
        'email', 'dob', 'gender', 'marital_status', 'res_address',
        'postal_address', 'phone', 'office_number', 'other_number',
        'profession', 'position', 'office_address', 'emergency_contact_person',
        'emergency_contact_number', 'emergency_contact_address', 'name_of_spouse',
        'number_of_children', 'name_of_children', 'children_names', 'hear_about_us',
        'branch', 'cov_fam_name', 'covenant_leader', 'covenant_leader_num',
        'date_received', 'revised_rec_date', 'revised_rec_time', 'added_by', 'updated_by'
    ];

    // public function getRouteKeyName()
    //     {
    //         return 'slug';
    //     }


    public function ministries(){
        return $this->belongsToMany(Ministry::class);
    }
}
