<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMemberDetails;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //

        $members = Member::all();
        // dd($members->first_name);

        // return $members;

        // dd($members);

        return view('members.members', ['members' => $members]);
        // return view('members.members', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('members.addmember');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberDetails $request)
    {
        //
        // Member::create([]);
        //  $member = new Member();


        //  return $request;
        //  $member->firstname = request('firstname');
        //  $member->other_name = request('other_name');
        //  $member->surname = request('surname');
        //  $member->phone = request('mobile_number');


        //  return redirect('/members');

        // if ($request->hasFile('image')) {
        //     // your code here
        //     // $request->image->store('members');
        //     // $request->image->storeAs('members', $request->image->getClientOriginal());

        //    $image = $request->image->storeAs('members', $request->firstname.'.'.
        //     $request->image->getClientOriginalExtension());
        // }

        if($request->validated()){


            if($request->hasfile('image')){
                $img = $request->image->storeAs('members', $request->firstname.'.'.
                    $request->image->getClientOriginalExtension());
            }else{
                $img = 'generic.jpg';
            }

             Member::create([
                'image' => $img,
                'firstname' => request('firstname'),
                'other_name' => request('other_name'),
                'surname' => request('surname'),
                'email' => request('email'),
                'dob' => request('dob'),
                'gender' => request('gender'),
                'marital_status' => request('marital_status'),
                'res_address' => request('residential_address'),
                'postal_address' => request('postal_address'),
                'phone' => request('mobile_number'),
                'office_number' => request('office_number'),
                'other_number' => request('other_number'),
                'profession' => request('profession'),
                'position' => request('position'),
                'office_address' => request('office_address'),
                'emergency_contact_person' => request('emergency_con_person'),
                'emergency_contact_number' => request('emergency_con_phone'),
                'emergency_contact_address' => request('emergency_con_address'),
                'name_of_spouse'  => request('name_of_spouse'),
                'number_of_children'  => request('number_of_children'),
                'children_names'  => request('childrens_name'),
                'hear_about_us'  => request('about_us'),
                'ministries'  => json_encode(request('ministries')),
                'group_n_dept'  => json_encode(request('group_n_departments')),
                'branch' => request('branch'),
                'cov_fam_name' => request('covenant_fam_name'),
                'covenant_leader' => request('covenant_leader'),
                'covenant_leader_num' => request('covenat_leader_phone'),
                'date_received' => request('date_received'),
                'revised_rec_date' => request('revised_record_date'),
                'revised_rec_time' => request('revised_record_time')
             ]);

            toastr('New Member Record Added Successfully');


            if($request->submit === "save"){
                return redirect('/members');
            }
            return redirect()->back();
        }

        // return redirect()->url('/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //

        // $member = Member::findOrFail($member);

        // return $member;
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //

        // $member = Member::findOrFail($member);

        // return $member;
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Member $member, StoreMemberDetails  $request)
    {
        //

        // return $request;


        if($request->validated()){
            if($request->image){
                $img = $request->image->storeAs('members', $request->firstname.'.'.
                    $request->image->getClientOriginalExtension());
            }else{
                $img = $member->image;
            }

            $n = $member->update([

                'image' => $img,
                'firstname' => request('firstname'),
                'other_name' => request('other_name'),
                'surname' => request('surname'),
                'email' => request('email'),
                'dob' => request('dob'),
                'gender' => request('gender'),
                'marital_status' => request('marital_status'),
                'res_address' => request('residential_address'),
                'postal_address' => request('postal_address'),
                'phone' => request('mobile_number'),
                'office_number' => request('office_number'),
                'other_number' => request('other_number'),
                'profession' => request('profession'),
                'position' => request('position'),
                'office_address' => request('office_address'),
                'emergency_contact_person' => request('emergency_con_person'),
                'emergency_contact_number' => request('emergency_con_phone'),
                'emergency_contact_address' => request('emergency_con_address'),
                'name_of_spouse'  => request('name_of_spouse'),
                'number_of_children'  => request('number_of_children'),
                'children_names'  => request('childrens_name'),
                'hear_about_us'  => request('about_us'),
                'ministries'  => json_encode(request('ministries')),
                'group_n_dept'  => json_encode(request('group_n_departments')),
                'branch' => request('branch'),
                'cov_fam_name' => request('covenant_fam_name'),
                'covenant_leader' => request('covenant_leader'),
                'covenant_leader_num' => request('covenat_leader_phone'),
                'date_received' => request('date_received'),
                'revised_rec_date' => request('revised_record_date'),
                'revised_rec_time' => request('revised_record_time')
             ]);
            if($n){toastr($request->firstname." ".$request->surname."'s Record Updated, Successfully.");}
        }
        return redirect('/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {

        // Member::findOrFail($member)->delete();

        // $member = Member::findOrFail($member);

        // dd("Deleted ".$member->first_name."'s Record");

        // if($member->delete()){

        //     toastError($member->firstname." ".$member->surname."'s Record deleted successfully");

        // }


        toastError($member->firstname." ".$member->surname."'s Record deleted successfully");
        return redirect('/members');

    }

    // public function destroy(Member $member)
    // {
    //     //

    //     dd('Deleted -> '.$member);
    // }

}
