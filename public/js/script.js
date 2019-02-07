$(function(){
    $('.showAddModal').on('click', function(){
        $('#modalTitle').html('Add Scholar Data');
        $('.modal-footer button[type=submit]').html('Insert');
    });
    $('.showEditModal').on('click', function(){
        $('#modalTitle').html('Edit Scholar Data');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', "http://localhost/scholar/update");

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/scholar/getUpdate',
            data: {id:id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#nis').val(data.nis);
                $('#email').val(data.email);
                $('#department').val(data.department);
            }
        });
    });
});