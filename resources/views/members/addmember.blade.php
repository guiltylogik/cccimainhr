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
                  <input type="text" class="form-control form-control-user text-center" name="firstname" id="firstname" placeholder="First Name" value="{{ old('firstname') }}" required>
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                  <input type="text" class="form-control form-control-user text-center" name="other_name" id="other_name" placeholder="Middle Name" value="{{old('other_name')}}">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" name="surname" id="surname" placeholder="Surname Name" value="{{old('surname')}}" required>
                  </div>
                </div>

                <div class="form-group row text-center">
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="date" class="form-control form-control-user border-bottom-primary text-center" name="dob" id="dob" value="{{old('dob')}}" placeholder="" required>
                  </div>
                <div class="col-sm-3 text-gray-100">
                    <label for="gender" class=" form-control-user text-uppercase">Sex: </label>
                    <input type="radio" class=" form-control-user" id="male" name="gender" value="male" {{old('gender') == 'male'? 'checked':''}} required> Male
                    <input type="radio" class=" form-control-user" id="female" name="gender" value="female" {{old('gender') == 'female'? 'checked':''}}> Female
                  </div>
                  <div class="col-sm-6 text-gray-100">
                  <label for="marital_status" class=" form-control-user text-uppercase">Marital Status:</label>
                  <input type="radio" class=" form-control-user" id="single" name="marital_status" value="single" {{old('marital_status') == 'single'? 'checked':''}} required> Single
                    <input type="radio" class=" form-control-user" id="married" name="marital_status" value="married" {{old('marital_status') == 'married'? 'checked':''}}> Married 
                    <input type="radio" class=" form-control-user" id="divorced" name="marital_status" value="divorced" {{old('marital_status') == 'divorced'? 'checked':''}}> Divorced 
                    <input type="radio" class=" form-control-user" id="widowed" name="marital_status" value="widowed" {{old('marital_status') == 'widowed'? 'checked':''}}> Widowed 
                  </div>
                </div>

                <div class="form-group row text-center">
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="residential_address" id="residential_address" value="{{old('residential_address')}}" placeholder="Residential Address" required>
                  </div>
                  <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="email" class="form-control form-control-user" name="email" id="email" value="{{old('email')}}" placeholder="Email Address">
                  </div>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-user" name="postal_address" id="postal_address" value="{{old('postal_address')}}" placeholder="Postal Address">
                  </div>
                </div>

                <div class="form-group  row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user" name="mobile_number" id="mobile_number" value="{{old('mobile_number')}}" placeholder="Mobile Number" required>
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user" name="other_number" id="other_number" value="{{old('other_number')}}" placeholder="Others">
                  </div>
                  <div class="col-sm-4">
                    <input type="tel" class="form-control form-control-user" name="office_number" id="office_number" value="{{old('office_number')}}" placeholder="Residence/Office Number">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="profession" id="profession" value="{{old('profession')}}" placeholder="Profession">
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="position" id="position" value="{{old('position')}}" placeholder="Position">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user" name="office_address" id="office_address" value="{{old('office_address')}}" placeholder="Office Address">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="emergency_con_person" id="emergency_con_person" value="{{old('emergency_con_person')}}" placeholder="Emergency Contact Person" required>
                  </div>
                  <div class="col-sm-3 mb-2 mb-sm-0" required>
                    <input type="tel" class="form-control form-control-user" name="emergency_con_phone" id="emergency_con_phone" value="{{old('emergency_con_phone')}}" placeholder="Phone Numbers" required>
                  </div>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-user" name="emergency_con_address" id="emergency_con_address" value="{{old('emergency_con_address')}}" placeholder="Address">
                  </div>
                </div>

                <hr>

                <div class="text-center">
                    <h1 class="h4 text-gray-100 mb-3 text-uppercase">Family Information(if applicable)</h1>
                </div>

                <div class="form-group row">
                  <div class="col-sm-9 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="name_of_spouse" id="name_of_spouse" value="{{old('name_of_spouse')}}" placeholder="Name of Spouse">
                  </div>
                  <div class="col-sm-3">
                    <input type="number" class="form-control form-control-user text-center" name="number_of_children" id="number_of_children" placeholder="Number of Children">
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user text-center" name="childrens_name" id="childrens_name" placeholder="Children's names">
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
                  <input type="radio" class=" form-control-user" id="friend" name="about_us" value="friend" {{old('about_us') == 'friend'? 'checked':''}} required> Friend
                    <input type="radio" class=" form-control-user" id="evangelism" name="about_us" value="evangelism" {{old('about_us') == 'evangelism'? 'checked':''}}> Evangelism 
                    <input type="radio" class=" form-control-user" id="social_media" name="about_us" value="social_media" {{old('about_us') == 'social_media'? 'checked':''}}> Social Media 
                    <input type="radio" class=" form-control-user" id="event" name="about_us" value="event" {{old('about_us') == 'event'? 'checked':''}}> Event 
                    <input type="radio" class=" form-control-user" id="other" name="about_us" value="other" {{old('about_us') == 'other'? 'checked':''}}> other 

               </div>

                <hr>

                <div class="text-center">
                    <h1 class="h4 text-gray-100 mb-3">B</h1>
                </div>

                {{-- <div class="form-group row">
                <div class="col-sm-12">
                  <label for="ministries" class=" form-control-user">Ministries:</label>
                    <input type="checkbox" class=" form-control-user" id="mens_ministry" name="ministries[]" value="Men's Ministry"> Men's Ministry
                    <input type="checkbox" class=" form-control-user" id="womens_ministry" name="ministries[]" value="Women's Ministry"> Women's Ministry 
                    <input type="checkbox" class=" form-control-user" id="youth_ministry" name="ministries[]" value="Youth Ministry"> Youth Ministry 
                    <input type="checkbox" class=" form-control-user" id="childrens_ministry" name="ministries[]" value="Children's Ministry"> Children's Ministry 
                    <input type="checkbox" class=" form-control-user" id="worship_angels" name="ministries[]" value="Worship Angels Dance Ministry"> Worship Angels Dance Ministry 
                    <input type="checkbox" class=" form-control-user" id="prayer_ministry" name="ministries[]" value="Prayer Warriors and Intercessory Ministry"> Prayer Warriors and Intercessory Ministry 
                    <input type="checkbox" class=" form-control-user" id="visitation_ministry" name="ministries[]" value="Visitaion Ministry"> Visitaion Ministry 
                    <input type="checkbox" class=" form-control-user" id="evangelism_ministry" name="ministries[]" value="Evangelism Ministry"> Evangelism Ministry 
                  </div>
                </div> --}}

                <div class="form-group row text-gray-100">
                    <div class="col-sm-6">
                        <label for="ministries" class=" form-control-user text-uppercase"><b>Ministries:</b></label><br>
                          <input type="checkbox" class=" form-control-user" id="mens_ministry" name="ministries[]" value="Men's Ministry"> Men's Ministry<br>
                          <input type="checkbox" class=" form-control-user" id="womens_ministry" name="ministries[]" value="Women's Ministry"> Women's Ministry <br>
                          <input type="checkbox" class=" form-control-user" id="youth_ministry" name="ministries[]" value="Youth Ministry"> Youth Ministry <br>
                          <input type="checkbox" class=" form-control-user" id="childrens_ministry" name="ministries[]" value="Children's Ministry"> Children's Ministry <br>
                          <input type="checkbox" class=" form-control-user" id="worship_angels" name="ministries[]" value="Worship Angels Dance Ministry"> Worship Angels Dance Ministry <br>
                          <input type="checkbox" class=" form-control-user" id="prayer_ministry" name="ministries[]" value="Prayer Warriors and Intercessory Ministry"> Prayer Warriors and Intercessory Ministry <br>
                          <input type="checkbox" class=" form-control-user" id="visitation_ministry" name="ministries[]" value="Visitaion Ministry"> Visitaion Ministry <br>
                          <input type="checkbox" class=" form-control-user" id="evangelism_ministry" name="ministries[]" value="Evangelism Ministry"> Evangelism Ministry <br>
                        </div>
                <div class="col-sm-6 ">
                  <label for="group_n_departments" class=" form-control-user text-uppercase"><b>Groups &amp; Departments:</b></label><br>
                  <input type="checkbox" class=" form-control-user" id="single" name="group_n_departments[]" value="1"> Music <br>
                    <input type="checkbox" class=" form-control-user" id="married" name="group_n_departments[]" value="2"> Instrumentalist (Music) <br> 
                    <input type="checkbox" class=" form-control-user" id="divorced" name="group_n_departments[]" value="3"> Ushering <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="4"> Office/Administration <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="5"> Audio-visual <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="6"> Housekeeping <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="7"> Counselling <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="8"> Decoration and church maintenance <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="9"> Technical team <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="10"> Children’s department teachers <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="11"> Tambourine  <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="12"> Catering and Event management  <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="13"> Publishing   <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="14"> Welcoming/Assimilation   <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="15"> Media & Public Relation   <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="16"> Costume /Wardrobe   <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="17"> Crystal Theatre (Drama Group)   <br>
                    <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="18"> Artisans/ Trade person   <br>
                  </div>
                </div>

                <hr>

                <div class="text-center">
                    <h1 class="h4 text-gray-100 mb-3 text-uppercase">Official Use only</h1>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="branch" id="branch" value="{{old('branch')}}" placeholder="Branch">
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" name="covenant_fam_name" id="covenant_fam_name" value="{{old('covenant_fam_name')}}" placeholder="Covenant Family Name">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" name="covenant_leader" id="covenant_leader" value="{{old('covenant_leader')}}" placeholder="Covenant Leader">
                  </div>
                </div>

                <div class="form-group row text-gray-100">
                  <div class="col-sm-3 mb-2 mb-sm-0">
                  <label for=""> </label>
                    <input type="tel" class="form-control form-control-user text-center" name="covenant_leader_phone" id="covenant_leader_phone" value="{{old('covenant_leader_phone')}}" placeholder="Phone Number">
                  </div>
                  <div class="col-sm-3 mb-2 mb-sm-0">
                  <label for=""> Date received:</label>
                    <input type="date" class="form-control form-control-user text-center" name="date_received" id="date_received" value="{{old('date_received')}}" placeholder="">
                  </div>
                  <div class="col-sm-3">
                  <label for=""> Revised record date:</label>
                    <input type="date" class="form-control form-control-user text-center" name="revised_record_date" id="revised_record_date" value="{{old('revised_record_date')}}" placeholder="">
                  </div>
                  <div class="col-sm-3">
                  <label for=""> Revised record time:</label>
                    <input type="time" class="form-control form-control-user text-center" name="revised_record_time" id="revised_record_time" value="{{old('revised_record_time')}}" placeholder="Covenant Leader">
                  </div>
                </div>

                <hr>
                <div class="form-group row text-gray-100">
                <div class="col-sm-4 mb-2 mb-sm-0">
                  <label for="image">Upload Picture</label>
                  <input type="file" class=" text-center" name="image" {{old('image')}}>
                </div>
                <div class="col-sm-4 mb-2 mb-sm-0">
                  <button type="submit" value="add" name="submit" class="btn btn-primary btn-user align-content-center text-uppercase"><i class="fas fa-user-plus fa-sm"></i> Add Member</button>
                <button type="submit" value="save" name="submit" class="btn btn-success btn-user align-content-center text-uppercase"><i class="fas fa-save fa-sm"></i> Save &amp; Exit</button>
                <button type="reset" class="btn btn-warning btn-user align-content-center text-uppercase"><i class="fas fa-redo-alt fa-sm"></i> Reset</button>

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