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
              <a href="/members/create" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-user-plus fa-sm"></i> Print</a>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <td>Tiger Nixon</td>
                        <td>{{ $member->first_name}}</td>
                        <td>{{ $member->first_name}}</td>
                        <td>{{ $member->first_name}}</td>
                        <td>{{ $member->first_name}}</td>
                        <td>Name &amp; Number</td>
                        <td>
                          <a href="/members/{{$member->id}}" class="d-none align-content-center btn-circle d-sm-inline-block btn btn-sm btn-user btn-info shadow-sm"><i class="fas fa-eye fa-lg"></i> </a> |
                          <a href="/members/{{$member->id}}/edit" class="d-none btn-circle d-sm-inline-block btn btn-sm btn-warning shadow-sm align-content-center"><i class="fas fa-edit fa-lg"></i> </a> |

                          <form class="btn-circle btn-sm" action="/members/{{$member->id}}" method="post">
                          @method('DELETE')
                          @csrf
                          <button class="d-none btn-circle d-sm-inline-block btn btn-sm btn-danger shadow-sm align-content-center" ><i class="fas fa-trash-alt fa-lg"></i> </button>
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