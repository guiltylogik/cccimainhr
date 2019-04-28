@extends('admin.layout')

@section('title')
Members
@endsection

@section('content')

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
                      <th>Phone</th>
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
                      <th>Phone</th>
                      <th>Residential Address</th>
                      <th>Emergency Contact</th>
                      <th>Tools</th>
                    </tr>
                  </tfoot>

                  @foreach ($members as $member)
                  <tbody>
                      <tr>
                        <td>
                          <div class="mr-2">
                            <img class="img-fluid img-thumbnail rounded-circle" width="50px" height="50px" src="{{asset('img/'.$member->image)}}" alt="Member Image">
                          </div>
                        </td>
                        <td>{{ $member->firstname}}
                            {{($member->other_name)?$member->other_name[0].".":" "}}
                          {{ $member->surname}}</</td>
                        <td>{{ ($member->dob)?$member->dob:"N/A"}}</td>
                        <td>{{ ($member->phone)?$member->phone:"N/A"}}</td>
                        <td>{{ ($member->res_address?$member->res_address:"N/A")}}</td>
                        <td>{{ ($member->emergency_contact_person)?$member->emergency_contact_person." ".$member->emergency_contact_number:"N/A"}}</</td>
                        <td>
                          <a href="/members/{{$member->id}}" class="align-content-center btn-circle  btn btn-sm btn-user btn-info shadow-sm"><i class="fas fa-eye fa-sm"></i> </a>
                          <a href="/members/{{$member->id}}/edit" class="btn-circle  btn btn-sm btn-warning shadow-sm align-content-center"><i class="fas fa-edit fa-sm"></i> </a>

                          <form class="btn-circle btn-sm" action="/members/{{$member->id}}" method="post">
                          @method('DELETE')
                          @csrf
                          <button class="btn-circle  btn btn-sm btn-danger shadow-sm align-content-center" ><i class="fas fa-trash-alt fa-sm"></i> </button>
                        </form>

                        </td>
                      </tr>
                    </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>

        <!-- /.container-fluid -->

@endsection