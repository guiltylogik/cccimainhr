@extends('admin.layout')


@section('title')
    Trashed Record(s).
@endsection

@section('content')
    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><i class="fas fa-trash fa-sm"></i> Trashed</h1>
<!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{route('members.restore.all')}}" class="btn btn-warning shadow-sm font-weight-bold btn-icon-split">
            <span class="icon text-white-50"><i class="fas fa-undo fa-sm"></i></span>
            <span class="text">
                Restore All
            </span>
        </a>
        <a class="btn btn-danger shadow-sm btn-icon-split font-weight-bold delete-member float-right" href="#"
                                        data-toggle="modal" data-id="" data-details=" " data-target="#deleteModal" data-status="emptyTrash"
                                        data-url="{{ route('empty.trash') }}">
                                        <span class="icon text-white-50"><i class="fas fa-trash fa-sm"></i></span>
                                        <span class="text">
                                                Deleted All
                                            </span>
                                    </a>
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

                @foreach ($deleted as $member)
                <tbody>
                    <tr>
                        <div class="outerdiv">
                            <td>
                                <div class="mr-2">
                                    <img class="img-fluid img-thumbnail" width="70px" height="70px"
                                        src="{{asset('img/members/thumbnail/'.$member->image)}}"
                                        alt="Member Image thumbnail">
                                </div>
                            </td>
                            <td>{{ $member->firstname}}
                                {{($member->other_name)?$member->other_name[0].".":" "}}
                                {{ $member->surname}}</</td> <td>{{ ($member->dob)?$member->dob:"N/A"}}</td>
                            <td>{{ ($member->phone)?$member->phone:"N/A"}} {{$member->email}}</td>
                            <td>{{ ($member->res_address?$member->res_address:"N/A")}}</td>
                            <td>{{ ($member->emergency_contact_person)?$member->emergency_contact_person." ".$member->emergency_contact_number:"N/A"}}
                                </</td> <td>
                                <div class="innerdiv">
                                    <a href="/members/{{$member->id}}"
                                        class="btn btn btn-sm btn-info shadow-sm myTooltip" data-placement="left"
                                        title="View Record"><i class="fas fa-eye fa-sm"></i> </a>
                                    <a href="/members/{{$member->id}}/restore"
                                        class="btn btn-sm btn-warning shadow-sm myTooltip" data-placement="top"
                                        title="Restore Record"><i class="fas fa-undo fa-sm"></i> </a>
                                    <a class="btn btn-sm btn-danger shadow-sm delete-member myTooltip" href="#"
                                        data-toggle="modal" data-placement="bottom" title="Delete Permanently"
                                        data-id=" {{$member->id}} " data-details="{{ $member->firstname}}
                                        {{($member->other_name)?$member->other_name[0].".":" "}}
                                      {{ $member->surname}}'s" data-target="#deleteModal" data-status="delete"
                                        data-url="{{ url('members', $member->id) }}"><i class="fas fa-trash fa-sm"></i>
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
@if (count($deleted)>0)
@include('parts.modals')
@endif
@endsection

@section('script')
@include('parts.script')
@endsection
