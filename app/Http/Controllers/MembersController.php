<?php

namespace App\Http\Controllers;

use App\Member;
use App\Ministry;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMemberDetails;
use App\Http\Controllers\Auth;
use Image;
use File;

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
        // return view('members.test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //(type = 1) = Ministry (type = 2) = Group
        // $ministries = getMinistry(1);
        // $groups = getMinistry(2);
        $ministries = Ministry::get()->where('type', '=', 1);
        $groups = Ministry::get()->where('type', '=', 2);
        // return($groups);

        return view('members.addmember', compact('ministries', 'groups'));
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

                // $img = $request->image->move(public_path().'/img/members',
                // str_slug($request->firstname." ".$request->surname." ".time()).'.'.
                //     $request->image->getClientOriginalExtension());
                $path = public_path('img/members/');

                if(!File::exists($path)){
                    File::makeDirectory($path, 0777, true, true);
                    File::makeDirectory($path.'thumbnail', 0777, true, true);
                }

                $original_img = $request->image;
                $img = str_slug($request->firstname." ".$request->surname." ".time()).'.'.
                $request->image->getClientOriginalExtension();

                $thumb_img = Image::make($original_img);
                $original_img_path =$path;
                $thumb_img_path =$path.'thumbnail/';

                $thumb_img->save($original_img_path.$img);
                $thumb_img->resize(512, 512);
                $thumb_img->save($thumb_img_path.$img);


            }else{
                $img = 'generic.jpg';
            }

             $member = Member::create([
                'image' => $img,
                'firstname' => ucfirst(request('firstname')),
                'other_name' => ucfirst(request('other_name')),
                'surname' => ucfirst(request('surname')),
                'email' => request('email'),
                'dob' => request('dob'),
                'gender' => ucfirst(request('gender')),
                'marital_status' => ucfirst(request('marital_status')),
                'res_address' => title_case(request('residential_address')),
                'postal_address' => title_case(request('postal_address')),
                'phone' => request('mobile_number'),
                'office_number' => request('office_number'),
                'other_number' => request('other_number'),
                'profession' => title_case(request('profession')),
                'position' => title_case(request('position')),
                'office_address' => title_case(request('office_address')),
                'emergency_contact_person' => title_case(request('emergency_con_person')),
                'emergency_contact_number' => request('emergency_con_phone'),
                'emergency_contact_address' => title_case(request('emergency_con_address')),
                'name_of_spouse'  => title_case(request('name_of_spouse')),
                'number_of_children'  => request('number_of_children'),
                'children_names'  => \json_encode(request('childrens_name')),
                'hear_about_us'  => ucfirst(request('about_us')),
                'about_us_other'  => ucfirst(request('about_us_other')),
                'branch' => title_case(request('branch')),
                'cov_fam_name' => title_case(request('covenant_fam_name')),
                'covenant_leader' => title_case(request('covenant_leader')),
                'covenant_leader_num' => request('covenat_leader_phone'),
                'date_received' => request('date_received'),
                'revised_rec_date' => request('revised_record_date'),
                'revised_rec_time' => request('revised_record_time'),

                'slug' => str_slug(request('firstname')." ".request('surname')." ".(request('branch'))),
                'added_by' => title_case(auth()->user()->name)
             ]);

            $member->ministries()->attach(request('ministries'));

            toastr('New Member Record Added Successfully');


            if($request->submit === "save"){
                return redirect('/members');
            }
            return back();
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
        // return $member;
        // $member = Member::find($member->id);

        // return Member::withTrashed()->find($member);

        $ministries = $member->ministries->where('type', '=', 1);
        $groups = $member->ministries->where('type', '=', 2);

        return view('members.show', compact('member', 'ministries', 'groups'));
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

        $in_group = array();
        $about_us = array();

        array_push($about_us, 'Friend', 'Evangelism', 'Event', 'Social Media');

        // return $about_us;
        // $ministry_ids = Ministry::select('id')->get();

        // foreach($ministry_ids as $ids){
        //     $ministry_id[] =  $ids->id;
        // }

        $ministries = Ministry::get()->where('type', '=', 1);
        $groups = Ministry::get()->where('type', '=', 2);

        foreach($member->ministries as $ids){
            $in_group[] = $ids->id;
        }
        // return $in_group;
        // $member = Member::findOrFail($member);

        // return $member;
        return view('members.edit',
        compact('member', 'ministries', 'groups', 'in_group', 'about_us'));
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


        // dd($request->File('image'));
        if($request->validated())
        {

            if($request->hasFile('image')){

                // $path = public_path('img/member');

                // if(!File::exists($path)){
                //     File::makeDirectory($path, 0777, true, true);
                // }

                $old_img = $member->image;

                $img_name = $img_name = str_slug($request->firstname." ".$request->surname." ".time()).'.'.
                $request->image->getClientOriginalExtension();
                $update_img = $request->image;
                $thumb_img = Image::make($update_img);
                $update_img_path = public_path('img/members/');

                $thumb_img->save($update_img_path.$img_name);
                $thumb_img->resize(512, 512);
                $thumb_img->save($update_img_path.'thumbnail/'.$img_name);

                //  check for an old image and delete it.
                if($update_img_path.$old_img && !($old_img == 'generic.jpg'))
                {
                    $old_img = [$update_img_path.$old_img, $update_img_path.'thumbnail/'.$old_img];
                    // dd($old_img);
                    File::delete($old_img);
                }

            }else
            {
                $img_name = $member->image;
            }

            $n = $member->update([

                'image' => $img_name,
                'firstname' => ucfirst(request('firstname')),
                'other_name' => ucfirst(request('other_name')),
                'surname' => ucfirst(request('surname')),
                'email' => request('email'),
                'dob' => request('dob'),
                'gender' => ucfirst(request('gender')),
                'marital_status' => ucfirst(request('marital_status')),
                'res_address' => title_case(request('residential_address')),
                'postal_address' => title_case(request('postal_address')),
                'phone' => request('mobile_number'),
                'office_number' => request('office_number'),
                'other_number' => request('other_number'),
                'profession' => title_case(request('profession')),
                'position' => title_case(request('position')),
                'office_address' => title_case(request('office_address')),
                'emergency_contact_person' => title_case(request('emergency_con_person')),
                'emergency_contact_number' => request('emergency_con_phone'),
                'emergency_contact_address' => title_case(request('emergency_con_address')),
                'name_of_spouse'  => title_case(request('name_of_spouse')),
                'number_of_children'  => request('number_of_children'),
                'children_names'  => json_encode(request('childrens_name')),
                'hear_about_us'  => ucfirst(request('about_us')),
                'about_us_other'  => ucfirst(request('about_us_other')),
                'branch' => title_case(request('branch')),
                'cov_fam_name' => title_case(request('covenant_fam_name')),
                'covenant_leader' => title_case(request('covenant_leader')),
                'covenant_leader_num' => request('covenat_leader_phone'),
                'date_received' => request('date_received'),
                'revised_rec_date' => request('revised_record_date'),
                'revised_rec_time' => request('revised_record_time'),
                'updated_by' => title_case(auth()->user()->name),

                'slug' => str_slug(request('firstname')." ".request('surname')." ".(request('branch'))),
             ]);

            ($n)? toastr($request->firstname." ".$request->surname."'s Record Updated, Successfully.") : "";
            if($n && $request->submit === 'save'){
                $member->ministries()->sync(request('ministries'));
                return redirect('/members/'.$member->id);
            }
            return redirect('/members');
        }

        return back();

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


        // return $member;
        if(request()->type === "delete"){

            // $member = Member::onlyTrashed()->find($member);

            if ($member->image !== 'generic.jpg')  {

               $img_path = public_path('img/members/');
               $img = [$img_path.$member->image, $img_path.'thumbnail/'.$member->image];

               File::delete($img);
            }

            $member->ministries()->sync([]);
            $member->forceDelete();
            toastError($member->firstname." ".$member->surname."'s Record deleted permanently");

            return redirect(route('trash'));
        }

        if($member->delete()){

            toastError($member->firstname." ".$member->surname."'s Record moved to trash successfully");

        }


        // toastError($member->firstname." ".$member->surname."'s Record deleted successfully");
        return redirect('/members');

    }

    public function trash()
    {
        //

        $deleted  = Member::onlyTrashed()->get();

        return view('members.trash', compact('deleted'));
    }

    public function restore(Member $member)
    {
        $member->restore();
        toastr($member->firstname." ".$member->surname."'s Restored successfully");
        return back();
    }

}
