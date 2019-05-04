@extends('admin.layout')

@section('title')
View -
{{$member->firstname." ".(($member->other_name)? $member->other_name[0].".":"")." ".$member->surname}}'s record
@endsection

@section('content')

<style>
    body {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }

    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 70%;
        height: 100%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }


    /* Picture Container */
    .image_outer_container {
        margin-top: auto;
        margin-bottom: auto;
        border-radius: 50%;
        position: relative;
    }

    .image_inner_container {
        border-radius: 50%;
        padding: 5px;
        background: #833ab4;
        background: -webkit-linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
        background: linear-gradient(to bottom, #fcb045, #fd1d1d, #833ab4);
    }

    .image_inner_container img {
        height: 200px;
        width: 200px;
        border-radius: 50%;
        border: 5px solid white;
    }

    .image_outer_container .green_icon {
        background-color: #4cd137;
        position: absolute;
        right: 30px;
        bottom: 10px;
        height: 30px;
        width: 30px;
        border: 5px solid white;
        border-radius: 50%;
    }

</style>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        {{-- <a href="/members/create" class="btn btn-success shadow-sm font-weight-bold btn-icon-split">
            <span class="icon text-white-50"><i class="fas fa-user-plus fa-sm"></i></span>
            <span class="text">
                Add Member
            </span>
          </a> --}}
        <a href="#" class="btn btn btn-sm btn-info shadow-sm btn-icon-split myTooltip" data-placement="left"
            title="View Record"><span class="icon text-white-50">
                <i class="fas fa-print fa-sm"></i>
            </span> <span class="text">Print</span> </a>
        <a href="/members/{{$member->id}}/edit" class="btn btn-sm btn-warning shadow-sm myTooltip btn-icon-split"
            data-placement="top" title="Edit Record"> <span class="icon text-white-50">
                <i class="fas fa-edit fa-sm"></i></span> <span class="text">Edit</span> </a>
        <a class="btn btn-sm btn-danger shadow-sm delete-member myTooltip btn-icon-split float-right" href="#"
            data-toggle="modal" data-placement="bottom" title="Delete Record" data-id=" {{$member->id}} " data-details="{{ $member->firstname}}
                    {{($member->other_name)?$member->other_name[0].".":" "}}
                  {{ $member->surname}}'s" data-target="#deleteModal" data-url="{{ url('members', $member->id) }}">
            <span class="icon text-white-50"><i class="fas fa-trash fa-sm"></i></span><span class="text"> Delete</span>
        </a>
    </div>
    <div class="card-body">

        <div class="emp-profile border-bottom-primary border-left-info">

            {{-- <div class="row"></div> --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex profile-img justify-content-center h-100">
                        <div class="image_outer_container">
                            <div class="green_icon"></div>
                            <div class="image_inner_container">
                                <img src="{{asset('img/members/'.$member->image)}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-6 ">
                    <div class="profile-head text-gray-800">
                        <h2>
                            <i class="fa fa-signature fa-md"></i>
                            {{$member->firstname}}
                            {{$member->other_name}}
                            {{$member->surname}}
                        </h2>
                        <hr>
                        <h6>
                            <i class="fa fa-briefcase fa-sm text-gray-800"></i> {{$member->position}} <i
                                class="fa fa-ellipsis-h fa-sm text-gray-800"></i> {{$member->profession}}
                        </h6>
                        <h6><i class="fa fa-venus-mars text-gray-800"></i> {{strtoupper($member->gender)}} <i
                                class="fa fa-ellipsis-h fa-sm text-gray-800"></i> {{$member->marital_status}}</h6>
                        {{-- <hr> --}}
                        <h6 class="proile-rating">Member Since :
                            <span>{{($member->date_received)?$member->date_received: 'No Registered Date.'}}</span></h6>
                        {{-- <h5 class="nav-link active">About</h5> --}}
                        {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <h1 class="h4 text-info mb-3 font-weight-bold text-uppercase">Personal Info</h1>
            </div>
            <div class="row border-bottom-info">
                <div class="col-md-4">
                    <div class="profile-work text-primary">
                        <h5 class="font-weight-bold">Contact</h5>
                        <p><i class="fa fa-mobile-alt fa-lg text-info"></i> {{$member->phone}}</p>
                        <p><i class="fa fa-envelope fa-lg text-info"></i> {{$member->email}}</p>
                        <h5 class="font-weight-bold">Emergency Contact</h5>
                        @if($member->emergency_contact_person)
                        <p><i class="fa fa-user fa-lg text-info"></i> {{$member->emergency_contact_person}}</p>
                        <p><i class="fa fa-mobile-alt fa-lg text-info"></i> {{$member->emergency_contact_number}}</p>
                        <p><i class="fa fa-location-arrow fa-lg text-info"></i> {{$member->emergency_contact_address}}
                        </p>
                        @else
                        <p>No Emergency contact listed</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-8 border-left-info">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            {{-- <hr class="text-primary"> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of Birth:</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$member->dob}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Residential address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$member->res_address}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Postal address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$member->postal_address}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Other Phone Number</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$member->other_number}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Office Number(s)</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$member->office_number}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$member->profession}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Office Address:</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$member->office_address}}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <h1 class="h4 text-info mb-3 font-weight-bold text-uppercase">Family &#x1F46A; Info</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name of spouse</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$member->name_of_spouse}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Number of Children:</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$member->number_of_children}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name of Children and Date of Birth:</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{json_decode($member->children_names)}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Heard About Calvary:</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{$member->hear_about_us}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <h1 class="h4 text-info mb-3 font-weight-bold text-uppercase">Ministry <i
                                    class="fa fa-layer-group fa-sm"></i> Interest</h1>
                        </div>

                        {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Experience</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Expert</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Hourly Rate</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>10$/hr</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Total Projects</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>230</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>English Level</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Expert</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Availability</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>6 months</p>
                                        </div>
                                    </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Your Bio</label><br/>
                                    <p>Your detail description</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <label>Ministry: </label>
                            </div>
                            <div class="col-md-6">
                               @if ($ministries->count()>0)
                               @foreach ($ministries as $ministry)
                               <p>{{$ministry->name}}</p>
                               @endforeach
                               @else
                               <p>Not in any/or no Ministry(ies) Listed yet.</p>
                               @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Groups/Department: </label>
                            </div>
                            <div class="col-md-6">
                                @if ($ministries->count()>0)
                                @foreach ($groups as $group)
                                <p>{{$group->name}}</p>
                                @endforeach
                                @else
                               <p>Not in any/or no Group(s) Listed yet.</p>
                               @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="color: #fff;">
            <div class="text-center">
                <h1 class="h4 text-info mb-3 font-weight-bold text-uppercase">Office <i class="fa fa-stamp fa-sm"></i>
                </h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Branch: </label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$member->branch}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Covenat Leader: </label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$member->covenant_leader}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Covenant Family Name: </label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$member->cov_fam_name}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Covenant Leader's Phone Number: </label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$member->covenant_leader_num}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            <label>Date Received: </label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$member->date_received}}</p>
                        </div>
                        <div class="col-md-2">
                            <label>Revised Record date: </label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$member->revised_rec_date}}</p>
                        </div>
                        <div class="col-md-2">
                            <label>Revised Record Time:</label>
                        </div>
                        <div class="col-md-2">
                            <p>{{$member->revised_rec_time}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="color: #fff;">
            <div class="row">
                <div class="col-md-6 align-content-center">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Added By:</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$member->added_by}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>On:</label>
                        </div>
                        <div class="col-md-3">
                            <p>{{$member->created_at}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Updated By:</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$member->updated_by}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>on:</label>
                        </div>
                        <div class="col-md-3">
                            <p>{{($member->updated_at != $member->created_at)?$member->updated_at:"Never Updated"}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex profile-img justify-content-center h-100">
                                <div class="image_outer_container">
                                    <div class="green_icon"></div>
                                    <div class="image_inner_container">
                                        <img src="{{asset('img/members/'.$member->image)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 float-right">
                            <h2>
                                <i class="fa fa-signature fa-md"></i>
                                {{$member->firstname}}
                                {{$member->other_name}}
                                {{$member->surname}}
                            </h2>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn btn-sm btn-info shadow-sm btn-icon-split myTooltip"
                                data-placement="left" title="View Record"><span class="icon text-white-50">
                                    <i class="fas fa-print fa-sm"></i>
                                </span> <span class="text">Print</span> </a>
                            <a href="/members/{{$member->id}}/edit"
                                class="btn btn-sm btn-warning shadow-sm myTooltip btn-icon-split" data-placement="top"
                                title="Edit Record"> <span class="icon text-white-50">
                                    <i class="fas fa-edit fa-sm"></i></span> <span class="text">Edit</span> </a>
                            <a class="btn btn-sm btn-danger shadow-sm delete-member myTooltip btn-icon-split" href="#"
                                data-toggle="modal" data-placement="bottom" title="Delete Record"
                                data-id=" {{$member->id}} " data-details="{{ $member->firstname}}
                                {{($member->other_name)?$member->other_name[0].".":" "}}
                              {{ $member->surname}}'s" data-target="#deleteModal"
                                data-url="{{ url('members', $member->id) }}">
                                <span class="icon text-white-50"><i class="fas fa-trash fa-sm"></i></span><span
                                    class="text"> Delete</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>


@endsection


@section('modal')
@include('parts.modals')
@endsection
{{-- @section('script')
    @include('parts.script')
@endsection --}}
