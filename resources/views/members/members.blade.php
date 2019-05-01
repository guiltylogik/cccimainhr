@extends('admin.layout')

@section('title')
Members
@endsection

@section('content')

<style>




</style>

 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800"><i class="fas fa-users fa-sm"></i> Members</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="/members/create" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-user-plus fa-sm"></i> Add Member</a>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm float-right"><i class="fas fa-user-plus fa-sm"></i> Print</a>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>
            <div class="card-body">
              <div class="table-responsive text-center">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Picture</th>
                      <th>Name</th>
                      <th>Date Of Birth</th>
                      <th>Phone &amp; Email</th>
                      <th>Residential Address</th>
                      <th>Emergency Contact</th>
                      <th>Tools</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Picture</th>
                      <th>Name</th>
                      <th>Date Of Birth</th>
                      <th>Phone &amp; Email</th>
                      <th>Residential Address</th>
                      <th>Emergency Contact</th>
                      <th>Tools</th>
                    </tr>
                  </tfoot>

                  @foreach ($members as $member)
                  <tbody>
                      <tr>
                        <div class="outerdiv">
                            <td>
                                <div class="mr-2">
                                  <img class="img-fluid img-thumbnail" width="70px" height="70px" src="{{asset('img/members/thumbnail/'.$member->image)}}" alt="Member Image thumbnail">
                                </div>
                              </td>
                              <td>{{ $member->firstname}}
                                  {{($member->other_name)?$member->other_name[0].".":" "}}
                                {{ $member->surname}}</</td>
                              <td>{{ ($member->dob)?$member->dob:"N/A"}}</td>
                              <td>{{ ($member->phone)?$member->phone:"N/A"}} {{$member->email}}</td>
                              <td>{{ ($member->res_address?$member->res_address:"N/A")}}</td>
                              <td>{{ ($member->emergency_contact_person)?$member->emergency_contact_person." ".$member->emergency_contact_number:"N/A"}}</</td>
                              <td>
                                <div class="innerdiv">
                                    <a href="/members/{{$member->id}}" class="align-content-center btn-circle  btn btn-sm btn-user btn-info shadow-sm"><i class="fas fa-eye fa-sm"></i> </a>
                                    <a href="/members/{{$member->id}}/edit" class="btn-circle  btn btn-sm btn-warning shadow-sm align-content-center"><i class="fas fa-edit fa-sm"></i> </a>
                                    <a class="btn-circle  btn btn-sm btn-danger shadow-sm align-content-center  delete-member" href="#" data-toggle="modal" data-id=" {{$member->id}} " 
                                      data-details="{{ $member->firstname}}
                                        {{($member->other_name)?$member->other_name[0].".":" "}}
                                      {{ $member->surname}}'s" data-target="#deleteModal" data-url="{{ url('members', $member->id) }}"><i class="fas fa-trash-alt fa-sm"></i>
                                    </a>
                                </div>
                              </td>
                        </div>
                      </tr>
                    </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>

        <!-- /.container-fluid -->

@endsection

@section('modal')
    @include('parts.modals')
@endsection