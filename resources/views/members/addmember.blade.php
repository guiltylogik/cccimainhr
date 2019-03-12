@extends('layout')


@section('title')
Add Member
@endsection

@section('content')


          <div class="card shadow mb-4">
            <div class="card-header border-left-primary bg-gray-300 py-3">
            <h1 class="h3 mb-2 text-primary"><i class="fas fa-user-plus fa-sm"></i> Add Member</h1>
            </div>
            <div class="card-body border-left-primary bg-gray-200">
            <div class="text-center">
                <h1 class="h4 text-primary mb-4">Personal Information</h1>
              </div>
            <form class="user" method="POST" action="\members">

              @csrf

                <div class="form-group row">
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" id="exampleFirstName" placeholder="Middle Name">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" id="exampleLastName" placeholder="Surname Name">
                  </div>
                </div>

                <div class="form-group row text-center">
                <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="date" class="form-control form-control-user border-bottom-primary text-center" name="date" id="dob" placeholder="">
                  </div>
                <div class="col-sm-3">
                    <label for="gender" class=" form-control-user">Sex: </label>
                    <input type="radio" class=" form-control-user" id="male" name="gender" value="male"> Male
                    <input type="radio" class=" form-control-user" id="female" name="gender" value="female"> Female
                  </div>
                  <div class="col-sm-6">
                  <label for="marital_status" class=" form-control-user">Marital Status:</label>
                  <input type="radio" class=" form-control-user" id="single" name="marital_status" value="single"> Single
                    <input type="radio" class=" form-control-user" id="married" name="marital_status" value="married"> Married 
                    <input type="radio" class=" form-control-user" id="divorced" name="marital_status" value="divorced"> Divorced 
                    <input type="radio" class=" form-control-user" id="widowed" name="marital_status" value="widowed"> Widowed 
                  </div>
                </div>

                <div class="form-group row text-center">
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Residential Address">
                  </div>
                  <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="email" class="form-control form-control-user" id="exampleFirstName" placeholder="Email Address">
                  </div>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-user" id="postal_address" placeholder="Postal Address">
                  </div>
                </div>

                <div class="form-group  row">
                <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user" id="exampleFirstName" placeholder="Mobile Number">
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user" id="exampleFirstName" placeholder="Others">
                  </div>
                  <div class="col-sm-4">
                    <input type="tel" class="form-control form-control-user" id="exampleLastName" placeholder="Residence/Office Number">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Profession">
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Position">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Office Address">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Emergency Contact Person">
                  </div>
                  <div class="col-sm-3 mb-2 mb-sm-0">
                    <input type="tel" class="form-control form-control-user" id="exampleFirstName" placeholder="Phone Numbers">
                  </div>
                  <div class="col-sm-3">
                    <input type="text" class="form-control form-control-user" id="postal_address" placeholder="Address">
                  </div>
                </div>

                <hr>

                <div class="text-center">
                    <h1 class="h4 text-primary mb-3">Family Information(if applicable)</h1>
                </div>

                <div class="form-group row">
                  <div class="col-sm-9 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Name of Spouse">
                  </div>
                  <div class="col-sm-3">
                    <input type="number" class="form-control form-control-user text-center" id="exampleLastName" placeholder="Number of Children">
                  </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user text-center" id="exampleFirstName" placeholder="Children's names and date of birth">
                </div>

                <hr>

                <div class="text-center">
                    <h1 class="h4 text-primary mb-3">Ministry Interests</h1>
                </div>
                <div class="text-center">
                    <h1 class="h4 text-primary mb-3">A</h1>
                </div>

               <div class="form-group">

               <label for="about_us" class=" form-control-user">How did you hear about us?</label>
                  <input type="radio" class=" form-control-user" id="single" name="about_us" value="single"> Friend
                    <input type="radio" class=" form-control-user" id="married" name="about_us" value="married"> Evangelism 
                    <input type="radio" class=" form-control-user" id="divorced" name="about_us" value="divorced"> Social Media 
                    <input type="radio" class=" form-control-user" id="widowed" name="about_us" value="widowed"> Event 
                    <input type="radio" class=" form-control-user" id="widowed" name="about_us" value="widowed"> other 

               </div>

                <hr>

                <div class="text-center">
                    <h1 class="h4 text-primary mb-3">B</h1>
                </div>

                <div class="form-group row">
                <div class="col-sm-6">
                  <label for="marital_status" class=" form-control-user">Ministries:</label>
                  <input type="checkbox" class=" form-control-user" id="single" name="marital_status" value="single"> Single
                    <input type="checkbox" class=" form-control-user" id="married" name="marital_status" value="married"> Married 
                    <input type="checkbox" class=" form-control-user" id="divorced" name="marital_status" value="divorced"> Divorced 
                    <input type="checkbox" class=" form-control-user" id="widowed" name="marital_status" value="widowed"> Widowed 
                  </div>
                </div>

                <div class="form-group row">
                <div class="col-sm-6">
                  <label for="marital_status" class=" form-control-user">Groups &amp; Departments:</label>
                  <input type="checkbox" class=" form-control-user" id="single" name="marital_status" value="single"> Single
                    <input type="checkbox" class=" form-control-user" id="married" name="marital_status" value="married"> Married 
                    <input type="checkbox" class=" form-control-user" id="divorced" name="marital_status" value="divorced"> Divorced 
                    <input type="checkbox" class=" form-control-user" id="widowed" name="marital_status" value="widowed"> Widowed 
                  </div>
                </div>

                <hr>

                <div class="text-center">
                    <h1 class="h4 text-primary mb-3">Official Use only</h1>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" id="exampleFirstName" placeholder="Branch">
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <input type="text" class="form-control form-control-user text-center" id="exampleFirstName" placeholder="Covenant Family Name">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user text-center" id="exampleLastName" placeholder="Covenant Leader">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-3 mb-2 mb-sm-0">
                  <label for=""> </label>
                    <input type="tel" class="form-control form-control-user text-center" id="exampleFirstName" placeholder="Phone Number">
                  </div>
                  <div class="col-sm-3 mb-2 mb-sm-0">
                  <label for=""> Date received:</label>
                    <input type="date" class="form-control form-control-user text-center" id="exampleFirstName" placeholder="Covenant Family Name">
                  </div>
                  <div class="col-sm-3">
                  <label for=""> Revised record date:</label>
                    <input type="date" class="form-control form-control-user text-center" id="exampleLastName" placeholder="Covenant Leader">
                  </div>
                  <div class="col-sm-3">
                  <label for=""> Revised record time:</label>
                    <input type="time" class="form-control form-control-user text-center" id="exampleLastName" placeholder="Covenant Leader">
                  </div>
                </div>

                <hr>

                <button type="submit" value="add" class="btn btn-primary btn-user align-content-center"><i class="fas fa-user-plus fa-sm"></i> Add Member</button>
                <button type="submit" value="save" class="btn btn-primary btn-user align-content-center"><i class="fas fa-save fa-sm"></i> Save &amp; Continue</button>
                <button type="reset" class="btn btn-primary btn-user align-content-center"><i class="fas fa-redo-alt fa-sm"></i> Reset</button>

                <hr>

              </form>

            </div>
          </div>
        </div>
    </div>
@endsection