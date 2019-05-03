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
        var details = $(this).attr('data-details');

        // $("#deleteForm", 'input').val(id);
        $("#details").text(details);
        $("#deleteForm").attr("action", url);
    });
});
</script>
