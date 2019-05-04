@extends('admin.layout')


@section('title')
Add Member
@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="card-header border-left-primary bg-gray-100 py-3">
        <h1 class="h3 mb-2 text-primary text-uppercase"><i class="fas fa-user-plus fa-sm"></i> Add Member</h1>
    </div>
    <div class="card-body border-left-primary bg-gradient-primary">
        <div class="text-center">
            <h1 class="h4 text-gray-100 mb-4 text-uppercase">Personal Information</h1>
        </div>
        <form class="user" method="POST" action="/members" enctype="multipart/form-data">

            @csrf

            <div class="form-group row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="firstname"
                        id="firstname" placeholder="First Name" value="{{ old('firstname') }}" required>
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="other_name"
                        id="other_name" placeholder="Middle Name" value="{{old('other_name')}}">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" name="surname" id="surname"
                        placeholder="Surname Name" value="{{old('surname')}}" required>
                </div>
            </div>

            <div class="form-group row text-center">
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="date" class="form-control form-control-user border-bottom-primary text-center"
                        name="dob" id="dob" value="{{old('dob')}}" placeholder="" required>
                </div>
                <div class="col-sm-3 text-gray-100">
                    <label for="gender" class=" form-control-user text-uppercase">Sex: </label>
                    <input type="radio" class=" form-control-user" id="male" name="gender" value="male"
                        {{old('gender') == 'male'? 'checked':''}} required> Male
                    <input type="radio" class=" form-control-user" id="female" name="gender" value="female"
                        {{old('gender') == 'female'? 'checked':''}}> Female
                </div>
                <div class="col-sm-6 text-gray-100">
                    <label for="marital_status" class=" form-control-user text-uppercase">Marital Status:</label>
                    <input type="radio" class=" form-control-user" id="single" name="marital_status" value="single"
                        {{old('marital_status') == 'single'? 'checked':''}} required> Single
                    <input type="radio" class=" form-control-user" id="married" name="marital_status" value="married"
                        {{old('marital_status') == 'married'? 'checked':''}}> Married
                    <input type="radio" class=" form-control-user" id="divorced" name="marital_status" value="divorced"
                        {{old('marital_status') == 'divorced'? 'checked':''}}> Divorced
                    <input type="radio" class=" form-control-user" id="widowed" name="marital_status" value="widowed"
                        {{old('marital_status') == 'widowed'? 'checked':''}}> Widowed
                </div>
            </div>

            <div class="form-group row text-center">
                <div class="col-sm-6 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="residential_address"
                        id="residential_address" value="{{old('residential_address')}}"
                        placeholder="Residential Address" required>
                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="email" class="form-control form-control-user" name="email" id="email"
                        value="{{old('email')}}" placeholder="Email Address">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-user" name="postal_address" id="postal_address"
                        value="{{old('postal_address')}}" placeholder="Postal Address">
                </div>
            </div>

            <div class="form-group  row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user" name="mobile_number" id="mobile_number"
                        value="{{old('mobile_number')}}" placeholder="Mobile Number" required>
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user" name="other_number" id="other_number"
                        value="{{old('other_number')}}" placeholder="Others">
                </div>
                <div class="col-sm-4">
                    <input type="tel" class="form-control form-control-user" name="office_number" id="office_number"
                        value="{{old('office_number')}}" placeholder="Residence/Office Number">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="profession" id="profession"
                        value="{{old('profession')}}" placeholder="Profession">
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="position" id="position"
                        value="{{old('position')}}" placeholder="Position">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user" name="office_address" id="office_address"
                        value="{{old('office_address')}}" placeholder="Office Address">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="emergency_con_person"
                        id="emergency_con_person" value="{{old('emergency_con_person')}}"
                        placeholder="Emergency Contact Person" required>
                </div>
                <div class="col-sm-3 mb-2 mb-sm-0" required>
                    <input type="tel" class="form-control form-control-user" name="emergency_con_phone"
                        id="emergency_con_phone" value="{{old('emergency_con_phone')}}" placeholder="Phone Numbers"
                        required>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-user" name="emergency_con_address"
                        id="emergency_con_address" value="{{old('emergency_con_address')}}" placeholder="Address">
                </div>
            </div>

            <hr>

            <div class="text-center">
                <h1 class="h4 text-gray-100 mb-3 text-uppercase">Family Information(if applicable)</h1>
            </div>

            <div class="form-group row">
                <div class="col-sm-9 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="name_of_spouse" id="name_of_spouse"
                        value="{{old('name_of_spouse')}}" placeholder="Name of Spouse">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control form-control-user text-center" name="number_of_children"
                        id="number_of_children" placeholder="Number of Children">
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user text-center" name="childrens_name"
                    id="childrens_name" placeholder="Children's names and date of births seprated by comma">
            </div>

            <hr>

            <div class="text-center">
                <h1 class="h4 text-gray-100 mb-3 text-uppercase">Ministry Interests</h1>
            </div>
            <div class="text-center">
                <h1 class="h4 text-gray-100 mb-3">A</h1>
            </div>

            <div class="form-group text-gray-100">

                <label for="about_us" class=" form-control-user">How did you hear about us?</label>
                <input type="radio" class=" form-control-user" id="friend" name="about_us" value="Friend"
                    {{old('about_us') == 'Friend'? 'checked':''}} required> Friend
                <input type="radio" class=" form-control-user" id="evangelism" name="about_us" value="Evangelism"
                    {{old('about_us') == 'Evangelism'? 'checked':''}}> Evangelism
                <input type="radio" class=" form-control-user" id="social_media" name="about_us" value="social_media"
                    {{old('about_us') == 'Social Media'? 'checked':''}}> Social Media
                <input type="radio" class=" form-control-user" id="event" name="about_us" value="event"
                    {{old('about_us') == 'event'? 'checked':''}}> Event
                <input type="text" class="form-control form-control-user text-center" name="about_us" placeholder="Other? Enter Description." >

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
                    value="{{$ministry->id}}" {{(is_array(old('ministries')) and in_array($ministry->id, old('ministries')))? ' checked ': ''}}> {{$ministry->name}}<br>
                    @endforeach

                </div>
                <div class="col-sm-6 ">
                    <label for="group_n_departments" class=" form-control-user text-uppercase"><b>Groups &amp;
                            Departments:</b></label><br>
                            @foreach ($groups as $group)
                            <input type="checkbox" class=" form-control-user" id="{{$group->id}}" name="ministries[]"
                            value="{{$group->id}}" {{(is_array(old('ministries')) and in_array($group->id, old('ministries')))? ' checked ': ''}} > {{$group->name}}<br>
                            @endforeach
                </div>
            </div>

            <hr>

            <div class="text-center">
                <h1 class="h4 text-gray-100 mb-3 text-uppercase">Official Use only</h1>
            </div>

            <div class="form-group row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="branch" id="branch"
                        value="{{old('branch')}}" placeholder="Branch">
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="covenant_fam_name"
                        id="covenant_fam_name" value="{{old('covenant_fam_name')}}" placeholder="Covenant Family Name">
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" name="covenant_leader"
                        id="covenant_leader" value="{{old('covenant_leader')}}" placeholder="Covenant Leader">
                </div>
            </div>

            <div class="form-group row text-gray-100">
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <label for=""> </label>
                    <input type="tel" class="form-control form-control-user text-center" name="covenant_leader_phone"
                        id="covenant_leader_phone" value="{{old('covenant_leader_phone')}}" placeholder="Phone Number">
                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <label for=""> Date received:</label>
                    <input type="date" class="form-control form-control-user text-center" name="date_received"
                        id="date_received" value="{{old('date_received')}}" placeholder="">
                </div>
                <div class="col-sm-3">
                    <label for=""> Revised record date:</label>
                    <input type="date" class="form-control form-control-user text-center" name="revised_record_date"
                        id="revised_record_date" value="{{old('revised_record_date')}}" placeholder="">
                </div>
                <div class="col-sm-3">
                    <label for=""> Revised record time:</label>
                    <input type="time" class="form-control form-control-user text-center" name="revised_record_time"
                        id="revised_record_time" value="{{old('revised_record_time')}}" placeholder="Covenant Leader">
                </div>
            </div>
            <hr>
            <div class="form-group row text-gray-100">
                <div class="col-sm-2 mb-2 mb-sm-0"></div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <label for="image">Upload Picture</label>
                    <input type="file" accept="image/*" onchange="preview_image(event)" class="text-center" name="image"
                        value="">
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0 o-hidden" style="max-width:200px;">
                    <img id="preview_img" src=" {{asset('img/members/thumbnail/generic.jpg')}} " alt=""
                        class="img-fluid img-thumbnail" style="max-width:100%;">
                </div>
                <div class="col-sm-2 mb-2 mb-sm-0"></div>
            </div>
            <hr>
            <div class="form-group row text-gray-100 text-center">
                <div class="col-sm-4 mb-2 mb-sm-0"></div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <button type="submit" value="add" name="submit"
                        class="btn btn-primary btn-user align-content-center text-uppercase"><i
                            class="fas fa-user-plus fa-sm"></i> Add Member</button>
                    <button type="submit" value="save" name="submit"
                        class="btn btn-success btn-user align-content-center text-uppercase"><i
                            class="fas fa-save fa-sm"></i> Save &amp; Exit</button>
                    <button type="reset" id="reset_img" data-path="{{asset('img/members/thumbnail/generic.jpg')}}"
                        onclick="reset_image(event)"
                        class="btn btn-warning btn-user align-content-center text-uppercase"><i
                            class="fas fa-redo-alt fa-sm"></i> Reset</button>
                    <div class="col-sm-4 mb-sm-0"></div>
                </div>

            </div>
            <hr>

        </form>

    </div>
</div>
@endsection

@section('alert')
@include('parts.alert')
@endsection

@section('script')
@include('parts.script')
@endsection
