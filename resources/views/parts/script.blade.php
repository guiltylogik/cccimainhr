<script type="text/javascript">

// for Delete Modal
$(document).ready(function () {
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
