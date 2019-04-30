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
            'firstname' => 'required|min:3|max:255',
            'other_name' => 'required|nullable|min:3|max:255',
            'surname' => 'required|min:3|max:255',
            'email' => 'required|nullable|email',
            'dob' => 'required|nullable|date',
            'gender' => 'required|nullable',
            'marital_status' => 'required|nullable',
            'residential_address' => 'required|nullable|min:5',
            'postal_address' => 'nullable',
            'mobile_number' => 'required|nullable|min:10',
            'office_number' => 'nullable|min:10',
            'other_number' => 'nullable|min:10',
            'profession' => 'nullable|min:5',
            'position' => 'nullable|min:5',
            'office_address' => 'nullable|min:5',
            'emergency_con_person' => 'required|min:3',
            'emergency_con_phone' => 'required|nullable|min:10',
            'emergency_con_address' => 'nullable|min:5',
            'name_of_spouse' =>'nullable|min:3',
            'number_of_children' => 'nullable',
            'children_names' => 'nullable|min:3',
            'hear_about_us' => 'nullable|min:5',
            'ministries' => 'nullable',
            'group_n_dept' => 'nullable',
            'branch' => 'nullable|min:3',
            'covenant_fam_name' => 'nullable|min:3',
            'covenant_leader' => 'nullable|min:3',
            'covenant_leader_num' => 'nullable|min:10',
            'date_received' => 'nullable|date',
            'reviced_rec_date' => 'nullable|date',
            'reviced_rec_time' => 'nullable|time'
        ];
    }
}
