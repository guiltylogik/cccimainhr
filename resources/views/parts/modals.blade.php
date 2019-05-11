<!-- Delete Modal -->
<div class="modal fade " id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-bottom-danger">
            <div class="modal-header bg-danger text-gray-100">
                <h5 class="modal-title " id="exampleModalLabel"><span id="status">Trash</span> <span id="details"
                        class="text-lg font-weight-bold text-uppercase">
                        {{ $member->firstname}}
                        {{($member->other_name)?$member->other_name[0].".":" "}}
                        {{ $member->surname}}'s</span> Record</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-gray-100">×</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div id="modal-body" class="text-gray-800 font-weight-bold"></div>
                <div class="text-center">
                    <span class="text-uppercase text-lg font-weight-bold text-danger" id="warning">Move to Trash</span>
                </div>
            </div>
            <div class="modal-footer text-center">
                {{-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> --}}
                <form id="deleteForm" action="" method="post" class="">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="type" name="type" value="trash">
                    <button class="btn btn-danger shadow-sm font-weight-bold btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash-alt fa-sm"></i>
                        </span>
                        <span class="text" id="text">Trash</span> </button>
                </form>
            </div>
        </div>
    </div>
</div>


@section('script')
@include('parts.script')
@endsection
