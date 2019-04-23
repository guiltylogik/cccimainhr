<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberDetails extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'image'      => 'nullable|image|mimies:jpeg, png, bmp, gif, svg',
            'firstname' => 'required|max:255',
            'other_name' => 'nullable|max:255',
            'surname' => 'required|max:255',
            'email' => 'nullable|unique',
            'dob' => 'nullable|datetime',
            'marital_status' => 'required',
            'res_address' => 'nullable',
            'postal_address' => 'nullable',
            'phone' => 'nullable',
            'office_number' => 'nullable',
            'other_number' => 'nullable',
            'profession' => 'nullable',
            'position' => 'nullable',
            'office_address' => 'nullable',
            'emergency_contact_person' => 'nullable',
            'emergency_contact_number' => 'nullable',
            'emergency_contact_address' => 'nullable',
            'name_of_spouse' =>'nullable',
            'number_of_children' => 'nullable',
            'children_names' => 'nullable',
            'hear_about_us' => 'nullable',
            'ministries' => 'nullable',
            'group_n_dept' => 'nullable',
            'branch' => 'nullable',
            'cov_fam_name' => 'nullable',
            'covenant_leader' => 'nullable',
            'covenant_leader_num' => 'nullable',
            'date_received' => 'required',
            'reviced_rec_date' => 'required',
            'reviced_rec_time' => 'required'
        ];
    }
}
