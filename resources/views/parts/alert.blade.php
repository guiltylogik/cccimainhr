<script>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        toastr.error("{{$error}}")
    @endforeach
@endif

// @if(session('success'))

//     toastr.success("{{session('success')}}")

// @endif

</script>
