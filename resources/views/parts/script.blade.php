<script type="text/javascript">

// to reset form page
function reset_image(event){

    var url = "{{asset('img/members/thumbnail/generic.jpg')}}";

    document.getElementById("preview_img").src = url;
}
function preview_image(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('preview_img');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
// });
// for Delete Modal
$(document).ready(function () {

    // for tooltips
    $('.myTooltip').tooltip({animation: true, container: ".innerdiv"});

    // For A Delete Record Popup
    $('.delete-member').click(function () {
        // var id = $(this).attr('data-id');
        var url = $(this).attr('data-url');
        var status = $(this).attr('data-status');
        var details = $(this).attr('data-details');

        // $("#deleteForm", 'input').val(id);
        if(status == 'delete'){
            $("#modal-body").text("Are you sure you want to Permanently delete this record?");
            $("#warning").text("NB: This cannot be undone.");
            $("#text").text("I uderstand, Delete.");
            $("#type").attr("value", status);
        }

        //for emptying trash
        if(status == 'emptyTrash'){
            $("#exampleModalLabel").text('Empty Trash');
            $("#modal-body").text("Are you sure you want to Permanently delete these record?");
            $("#warning").text("NB: This cannot be undone.");
            $("#text").text("I uderstand, Empty.");
            $("#deleteForm").attr("method", 'get');
        }
        $("#details").text(details);
        $("#status").text(status.toUpperCase());
        $("#deleteForm").attr("action", url);
    });
});
</script>
