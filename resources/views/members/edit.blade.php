@extends('admin.layout')

@section('title')
Edit -
{{$member->firstname." ".(($member->other_name)? $member->other_name[0].".":"")." ".$member->surname}}'s record
@endsection

@section('content')

<div class="card shadow mb-4">
    <div class="card-header border-left-primary bg-gray-100 py-3">
    <h1 class="h3 mb-2 text-primary"><i class="fas fa-user-edit fa-sm"></i> Edit Member Record -
      ({{$member->firstname." ".(($member->other_name)? $member->other_name[0].".":"")." ".$member->surname}})</h1>
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
            <input type="text" class="form-control form-control-user text-center" name="firstname" id="firstname" placeholder="First Name" value="{{$member->firstname}}" required>
          </div>
          <div class="col-sm-4 mb-2 mb-sm-0">
            <input type="text" class="form-control form-control-user text-center" name="other_name" id="other_name" placeholder="Middle Name" value="{{$member->other_name}}">
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control form-control-user text-center" name="surname" id="surname" placeholder="Surname Name" value="{{$member->surname}}" required>
          </div>
        </div>

        <div class="form-group row text-center">
        <div class="col-sm-3 mb-2 mb-sm-0">
            <input type="date" class="form-control form-control-user border-bottom-primary text-center" name="dob" id="dob" value="{{$member->dob}}">
          </div>
        <div class="col-sm-3 text-gray-100">
            <label for="gender" class=" form-control-user">Sex: </label>
            <input type="radio" class=" form-control-user" id="male" name="gender" value="male" {{($member->gender=='male')? 'checked':""}} required> Male
            <input type="radio" class=" form-control-user" id="female" name="gender" value="female" {{($member->gender=='female')? 'checked':""}} required> Female
          </div>
          <div class="col-sm-6 text-gray-100">
          <label for="marital_status" class=" form-control-user">Marital Status:</label>
          <input type="radio" class=" form-control-user" id="single" name="marital_status" value="single" {{($member->marital_status=='single')? 'checked':""}} required> Single
            <input type="radio" class=" form-control-user" id="married" name="marital_status" value="married" {{($member->marital_status=='married')? 'checked':""}}> Married 
            <input type="radio" class=" form-control-user" id="divorced" name="marital_status" value="divorced" {{($member->marital_status=='divorced')? 'checked':""}}> Divorced 
            <input type="radio" class=" form-control-user" id="widowed" name="marital_status" value="widowed" {{($member->marital_status=='Widowed')? 'checked':""}}> Widowed 
          </div>
        </div>

        <div class="form-group row text-center">
          <div class="col-sm-6 mb-2 mb-sm-0">
            <input type="text" class="form-control form-control-user" name="residential_address" id="residential_address" placeholder="Residential Address" value="{{$member->res_address}}">
          </div>
          <div class="col-sm-3 mb-2 mb-sm-0">
            <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email Address" value="{{$member->email}}">
          </div>
          <div class="col-sm-3">
            <input type="text" class="form-control form-control-user" name="postal_address" id="postal_address" placeholder="Postal Address" value="{{$member->postal_address}}">
          </div>
        </div>

        <div class="form-group  row ">
        <div class="col-sm-4 mb-2 mb-sm-0">
            <input type="tel" class="form-control form-control-user text-center" name="mobile_number" id="mobile_number" placeholder="Mobile Number" value="{{$member->phone}}">
          </div>
          <div class="col-sm-4 mb-2 mb-sm-0">
            <input type="tel" class="form-control form-control-user text-center" name="other_number" id="other_number" placeholder="Other Number" value="{{$member->other_number}}">
          </div>
          <div class="col-sm-4">
            <input type="tel" class="form-control form-control-user text-center" name="office_number" id="office_number" placeholder="Residence/Office Number" value="{{$member->office_number}}">
          </div>
        </div>

        <div class="form-group  row">
          <div class="col-sm-4 mb-2 mb-sm-0">
            <input type="text" class="form-control form-control-user text-center" name="profession" id="profession" placeholder="Profession" value="{{$member->profession}}">
          </div>
          <div class="col-sm-4 mb-2 mb-sm-0">
            <input type="text" class="form-control form-control-user text-center" name="position" id="position" placeholder="Position" value="{{$member->position}}">
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control form-control-user text-center" name="office_address" id="office_address" placeholder="Office Address" value="{{$member->office_address}}">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-4 mb-2 mb-sm-0">
            <input type="text" class="form-control form-control-user text-center" name="emergency_con_person" id="emergency_con_person" placeholder="Emergency Contact Person" value="{{$member->emergency_contact_person}}">
          </div>
          <div class="col-sm-4 mb-2 mb-sm-0">
            <input type="tel" class="form-control form-control-user text-center" name="emergency_con_phone" id="emergency_con_phone" placeholder="Phone Numbers" value="{{$member->emergency_contact_number}}">
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control form-control-user text-center" name="emergency_con_address" id="emergency_con_address" placeholder="Address" value="{{$member->emergency_contact_address}}">
          </div>
        </div>

        <hr>

        <div class="text-center">
            <h1 class="h4 text-gray-100 mb-3">Family Information(if applicable)</h1>
        </div>

        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user" name="name_of_spouse" id="name_of_spouse" placeholder="Name of Spouse" value="{{$member->name_of_spouse}}">
          </div>
          <div class="col-sm-6">
            <input type="number" class="form-control form-control-user text-center" name="number_of_children" id="number_of_children" placeholder="Number of Children">
          </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user text-center" name="childrens_name" id="childrens_name" placeholder="Children's names">
        </div>

        <hr>

        <div class="text-center">
            <h1 class="h4 text-gray-100 mb-3">Ministry Interests</h1>
        </div>
        <div class="text-center">
            <h1 class="h4 text-gray-100 mb-3">A</h1>
        </div>

       <div class="form-group text-gray-100">

       <label for="about_us" class=" form-control-user">How did you hear about us?</label>
          <input type="radio" class=" form-control-user" id="friend" name="about_us" value="friend" {{($member->hear_about_us=='friend')? 'checked':""}}> Friend
            <input type="radio" class=" form-control-user" id="evangelism" name="about_us" value="evangelism" {{($member->hear_about_us=='friend')? 'checked':""}}> Evangelism 
            <input type="radio" class=" form-control-user" id="social_media" name="about_us" value="social_media" {{($member->hear_about_us=='social_media')? 'checked':""}}> Social Media 
            <input type="radio" class=" form-control-user" id="event" name="about_us" value="event" {{($member->hear_about_us=='event')? 'checked':""}}> Event 
            <input type="radio" class=" form-control-user" id="other" name="about_us" value="other" {{($member->hear_about_us=='other')? 'checked':""}}> other 

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
                <label for="ministries" class=" form-control-user"><b>Ministries:</b></label><br>
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
          <label for="marital_status" class=" form-control-user"><b>Groups &amp; Departments:</b></label><br>
          <input type="checkbox" class=" form-control-user" id="single" name="group_n_departments[]" value="group_n_departments[0]"> Music <br>
            <input type="checkbox" class=" form-control-user" id="married" name="group_n_departments[]" value="group_n_departments[1]"> Instrumentalist (Music) <br> 
            <input type="checkbox" class=" form-control-user" id="divorced" name="group_n_departments[]" value="group_n_departments[2]"> Ushering <br> 
            <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="group_n_departments[3]"> Office/Administration <br>
            <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="group_n_departments[4]"> Audio-visual <br>
            <input type="checkbox" class=" form-control-user" id="widowed" name="group_n_departments[]" value="group_n_departments[5]"> Housekeeping <br>
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
            <h1 class="h4 text-gray-100 mb-3">Official Use only</h1>
        </div>

        <div class="form-group row">
          <div class="col-sm-4 mb-2 mb-sm-0">
          <input type="text" class="form-control form-control-user text-center" name="branch" id="branch" placeholder="Branch" value="{{$member->branch}}">
          </div>
          <div class="col-sm-4 mb-2 mb-sm-0">
            <input type="text" class="form-control form-control-user text-center" name="covenant_fam_name" id="covenant_fam_name" placeholder="Covenant Family Name" value="{{$member->cov_fam_name}}">
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control form-control-user text-center" name="covenant_leader" id="covenant_leader" placeholder="Covenant Leader" value="{{$member->covenant_leader}}">
          </div>
        </div>

        <div class="form-group row text-gray-100">
          <div class="col-sm-3 mb-2 mb-sm-0">
          <label for=""> </label>
            <input type="tel" class="form-control form-control-user text-center" name="covenat_leader_phone" id="covenat_leader_phone" placeholder="Phone Number" value="{{$member->covenant_leader_num}}">
          </div>
          <div class="col-sm-3 mb-2 mb-sm-0">
          <label for=""> Date received:</label>
            <input type="date" class="form-control form-control-user text-center" name="date_received" id="date_received" placeholder="" value="{{$member->date_received}}">
          </div>
          <div class="col-sm-3">
          <label for=""> Revised record date:</label>
            <input type="date" class="form-control form-control-user text-center" name="revised_record_date" id="revised_record_date" value="{{$member->revised_rec_date}}">
          </div>
          <div class="col-sm-3">
          <label for=""> Revised record time:</label>
            <input type="time" class="form-control form-control-user text-center" name="revised_record_time" id="revised_record_time"  value="{{$member->revised_rec_time}}">
          </div>
        </div>

        <hr>
        <div class="form-group row text-gray-100">
        <div class="col-sm-6 mb-2 mb-sm-0">
          <label for="image">Upload Picture</label>
          <input type="file" class=" text-center" name="image">
        </div>
        <div class="col-sm-6 mb-2 mb-sm-0">
        <button type="submit" value="add" name="submit" class="btn btn-info btn-user align-content-center"><i class="fas fa-user-plus fa-sm"></i> Update</button>
        <button type="submit" value="save" name="submit" class="btn btn-success btn-user align-content-center"><i class="fas fa-address-card fa-sm"></i> Update &amp; View</button>
        <a class="btn btn-danger btn-user align-content-center delete-member" href="#" data-toggle="modal" data-target="#deleteModal" data-url="{{url('members',$member->id)}}">
          <i class="fas fa-user-times fa-sm"></i> Delete Record
        </a>
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

@section('modal')
    @include('parts.modals')
@endsection