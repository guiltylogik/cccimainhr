@extends('admin.layout')

@section('title')
Edit -
{{$member->firstname." ".(($member->other_name)? $member->other_name[0].".":"")." ".$member->surname}}'s record
@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="card-header border-left-primary bg-gray-100 py-3">
        <h1 class="h3 mb-2 text-primary"><i class="fas fa-user-edit fa-sm"></i> Edit Member Record -
            ({{$member->firstname." ".(($member->other_name)? $member->other_name[0].".":"")." ".$member->surname}})
        </h1>
    </div>
    <div class="card-body border-left-primary bg-gradient-primary">
        <div class="text-center">
            <h1 class="h4 text-gray-100 mb-4">Personal Information</h1>
        </div>
        <form class="user" method="POST" action="/members/{{$member->id}} " enctype="multipart/form-data">

            @csrf
            @method('PATCH')

            <div class="form-group row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="firstname"
                        id="firstname" placeholder="First Name" value="{{$member->firstname}}" required>
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="other_name"
                        id="other_name" placeholder="Middle Name" value="{{$member->other_name}}">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" name="surname" id="surname"
                        placeholder="Surname Name" value="{{$member->surname}}" required>
                </div>
            </div>

            <div class="form-group row text-center">
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="date" class="form-control form-control-user border-bottom-primary text-center"
                        name="dob" id="dob" value="{{$member->dob}}">
                </div>
                <div class="col-sm-3 text-gray-100">
                    <label for="gender" class=" form-control-user">Sex: </label>
                    <input type="radio" class=" form-control-user" id="male" name="gender" value="male"
                        {{($member->gender=='Male')? 'checked':""}} required> Male
                    <input type="radio" class=" form-control-user" id="female" name="gender" value="female"
                        {{($member->gender=='Female')? 'checked':""}} > Female
                </div>
                <div class="col-sm-6 text-gray-100">
                    <label for="marital_status" class=" form-control-user">Marital Status:</label>
                    <input type="radio" class=" form-control-user" id="single" name="marital_status" value="single"
                        {{($member->marital_status=='Single')? 'checked':""}} required> Single
                    <input type="radio" class=" form-control-user" id="married" name="marital_status" value="married"
                        {{($member->marital_status=='Married')? 'checked':""}}> Married
                    <input type="radio" class=" form-control-user" id="divorced" name="marital_status" value="divorced"
                        {{($member->marital_status=='Divorced')? 'checked':""}}> Divorced
                    <input type="radio" class=" form-control-user" id="widowed" name="marital_status" value="widowed"
                        {{($member->marital_status=='Widowed')? 'checked':""}}> Widowed
                </div>
            </div>

            <div class="form-group row text-center">
                <div class="col-sm-6 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="residential_address"
                        id="residential_address" placeholder="Residential Address" value="{{$member->res_address}}">
                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="email" class="form-control form-control-user" name="email" id="email"
                        placeholder="Email Address" value="{{$member->email}}">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-user" name="postal_address" id="postal_address"
                        placeholder="Postal Address" value="{{$member->postal_address}}">
                </div>
            </div>

            <div class="form-group  row ">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user text-center" name="mobile_number"
                        id="mobile_number" placeholder="Mobile Number" value="{{$member->phone}}">
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user text-center" name="other_number"
                        id="other_number" placeholder="Other Number" value="{{$member->other_number}}">
                </div>
                <div class="col-sm-4">
                    <input type="tel" class="form-control form-control-user text-center" name="office_number"
                        id="office_number" placeholder="Residence/Office Number" value="{{$member->office_number}}">
                </div>
            </div>

            <div class="form-group  row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="profession"
                        id="profession" placeholder="Profession" value="{{$member->profession}}">
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="position" id="position"
                        placeholder="Position" value="{{$member->position}}">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" name="office_address"
                        id="office_address" placeholder="Office Address" value="{{$member->office_address}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="emergency_con_person"
                        id="emergency_con_person" placeholder="Emergency Contact Person"
                        value="{{$member->emergency_contact_person}}">
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user text-center" name="emergency_con_phone"
                        id="emergency_con_phone" placeholder="Phone Numbers"
                        value="{{$member->emergency_contact_number}}">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" name="emergency_con_address"
                        id="emergency_con_address" placeholder="Address" value="{{$member->emergency_contact_address}}">
                </div>
            </div>

            <hr>

            <div class="text-center">
                <h1 class="h4 text-gray-100 mb-3">Family Information(if applicable)</h1>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="name_of_spouse" id="name_of_spouse"
                        placeholder="Name of Spouse" value="{{$member->name_of_spouse}}">
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user text-center" name="number_of_children" value="{{$member->number_of_children}}"
                        id="number_of_children" placeholder="Number of Children">
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user text-center" name="childrens_name"
            id="childrens_name" placeholder="Children's names and date of births seprated by comma" value="{{json_decode($member->children_names)}}">
            </div>

            <hr>

            <div class="text-center">
                <h1 class="h4 text-gray-100 mb-3">Ministry Interests</h1>
            </div>
            <div class="text-center">
                <h1 class="h4 text-gray-100 mb-3">A</h1>
            </div>

            <div class="form-group text-gray-100 text-center">

                <label for="about_us" class=" form-control-user">How did you hear about us?</label>
                <input type="radio" class=" form-control-user" id="friend" name="about_us" value="Friend"
                    {{($member->hear_about_us=='Friend')? 'checked':""}}> Friend
                <input type="radio" class=" form-control-user" id="evangelism" name="about_us" value="Evangelism"
                    {{($member->hear_about_us=='Evangelism')? 'checked':""}}> Evangelism
                <input type="radio" class=" form-control-user" id="social_media" name="about_us" value="Social media"
                    {{($member->hear_about_us=='Social media')? 'checked':""}}> Social media
                <input type="radio" class=" form-control-user" id="event" name="about_us" value="Event"
                    {{($member->hear_about_us=='Event')? 'checked':""}}> Event
                <input type="radio" class=" form-control-user" id="event" name="about_us" value="Other"
                    {{($member->hear_about_us=='Other')? 'checked':""}}> Other
            <input type="text" class="form-control form-control-user text-center" name="about_us_other" value="{{($member->hear_about_us=='Other' and $member->hear_about_us != 'NULL') ? $member->about_us_other:'' }}" placeholder="Other? Enter Description." >

            </div>

            <hr>

            <div class="text-center">
                <h1 class="h4 text-gray-100 mb-3">B</h1>
            </div>

        <div class="form-group row text-gray-100">
            <div class="col-sm-6">
                <label for="ministries" class=" form-control-user text-uppercase"><b>Ministries:</b></label><br>

                @foreach ($ministries as $ministry)
                <input type="checkbox" class=" form-control-user" id="{{$ministry->id}}" name="ministries[]"
                value="{{$ministry->id}}" {{(in_array($ministry->id, $in_group))? 'checked': ''}}> {{$ministry->name}}<br>
                @endforeach

            </div>
            <div class="col-sm-6 ">
                <label for="group_n_departments" class=" form-control-user text-uppercase"><b>Groups &amp;
                        Departments:</b></label><br>
                        @foreach ($groups as $group)
                        <input type="checkbox" class=" form-control-user" id="{{$ministry->id}}" name="ministries[]"
                        value="{{$group->id}}" {{(in_array($group->id, $in_group))? 'checked': ''}}> {{$group->name}}<br>
                        @endforeach
            </div>
        </div>

            <hr>

            <div class="text-center">
                <h1 class="h4 text-gray-100 mb-3">Official Use only</h1>
            </div>

            <div class="form-group row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="branch" id="branch"
                        placeholder="Branch" value="{{$member->branch}}">
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="covenant_fam_name"
                        id="covenant_fam_name" placeholder="Covenant Family Name" value="{{$member->cov_fam_name}}">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" name="covenant_leader"
                        id="covenant_leader" placeholder="Covenant Leader" value="{{$member->covenant_leader}}">
                </div>
            </div>

            <div class="form-group row text-gray-100">
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <label for=""> </label>
                    <input type="tel" class="form-control form-control-user text-center" name="covenat_leader_phone"
                        id="covenat_leader_phone" placeholder="Phone Number" value="{{$member->covenant_leader_num}}">
                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <label for=""> Date received:</label>
                    <input type="date" class="form-control form-control-user text-center" name="date_received"
                        id="date_received" placeholder="" value="{{$member->date_received}}">
                </div>
                <div class="col-sm-3">
                    <label for=""> Revised record date:</label>
                    <input type="date" class="form-control form-control-user text-center" name="revised_record_date"
                        id="revised_record_date" value="{{$member->revised_rec_date}}">
                </div>
                <div class="col-sm-3">
                    <label for=""> Revised record time:</label>
                    <input type="time" class="form-control form-control-user text-center" name="revised_record_time"
                        id="revised_record_time" value="{{$member->revised_rec_time}}">
                </div>
            </div>

            <hr>
            <div class="form-group row text-gray-100 ">
                <div class="col-sm-2 mb-2 mb-sm-0"></div>
                <div class="col-sm-4 mb-2 mb-sm-0 text-center o-hidden">
                    <label for="image" class="float-left">Upload Picture</label>
                    <input type="file" class="text-center" accept="image/*" onchange="preview_image(event)"
                        name="image">
                </div>
                <div class="col-sm-4 mb-sm-0 text-center  ">
                    <img class="img-fluid img-thumbnail" id="preview_img"
                        src="{{asset('img/members/thumbnail/'.$member->image)}}"
                        alt=" {{$member->firstname}}'s picture " width="200">
                    <div class="caption">
                        {{-- <p>Old {{$member->firstname}}'s picture</p> --}}
                    </div>
                </div>
                <div class="col-sm-2 mb-2 mb-sm-0"></div>
            </div>
            <hr>
            <div class="form-group row align-content-center">
                <div class="col-sm-4 mb-sm-0"></div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <button type="submit" value="add" name="submit"
                        class="btn btn-info btn-user align-content-center"><i class="fas fa-edit fa-sm"></i>
                        Update</button>
                    <button type="submit" value="save" name="submit"
                        class="btn btn-success btn-user align-content-center"><i class="fas fa-address-card fa-sm"></i>
                        Update &amp; View</button>
                    <a class="btn btn-danger btn-user align-content-center delete-member" href="#" data-toggle="modal"
                        data-target="#deleteModal" data-status="trash" data-url="{{url('members',$member->id)}}">
                        <i class="fas fa-user-times fa-sm"></i> Trash Record
                    </a>
                </div>
                <div class="col-sm-4 mb-sm-0"></div>
            </div>
            <hr>

        </form>

    </div>
</div>

@endsection

@section('alert')
@include('parts.alert')
@endsection

@section('modal')
@include('parts.modals')
@endsection
