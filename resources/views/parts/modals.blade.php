<!-- Delete Modal -->
<div class="modal fade " id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content border-bottom-danger">
        <div class="modal-header bg-danger text-gray-100">
          <h5 class="modal-title " id="exampleModalLabel">Delete <span id="details" class="text-lg font-weight-bold text-uppercase">
            {{ $member->firstname}}
            {{($member->other_name)?$member->other_name[0].".":" "}}
          {{ $member->surname}}'s</span> Record</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-gray-100">×</span>
          </button>
        </div>
        <div class="modal-body">Are you
          <span class="text-lg font-weight-bold text-uppercase text-warning">sure</span> you want to
          <span class=" text-lg font-weight-bold text-uppercase text-gray-900">delete</span> this
          <span class=" text-lg font-weight-bold text-danger text-uppercase">record?</span>
          <div class="">
          <span class="text-uppercase text-lg font-weight-bold text-danger">NB: This cannot be undone.</span>
          </div>
        </div>
        <div class="modal-footer text-center">
          {{-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> --}}
          <form id="deleteForm" action="" method="post" class="">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger shadow-sm font-weight-bold btn-icon-split" >
                <span class="icon text-white-50">
                    <i class="fas fa-trash-alt fa-sm"></i>
                </span>
                <span class="text">I uderstand, Delete.</span> </button>
          </form>
        </div>
      </div>
    </div>
  </div>


  @section('script')
      @include('parts.script')
  @endsection