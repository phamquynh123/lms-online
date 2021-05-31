$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#course-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: route('course.datatable'),
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action' },
        ],
    });
});

$('.submit-add').on('click', function(e) {
    e.preventDefault();
    var formData1 = new FormData();
    formData1.append('name', $('#add-name').val());
    formData1.append('description', $('#add-des').val());
    $.ajax({
        type: 'post', 
        url: route('course.add'),
        processData: false,
        contentType: false,
        data: formData1,
        dataType: 'JSON', 
        success: function (response) {
            $('#course-table').DataTable().ajax.reload(null, false);
            $('#addNewUser').modal('hide');
            if (response.error == true) {
                $('#add-name').val('');
                $('#add-des').val();
                toastr.error(response.success);
            } else {
                toastr.success(response.success);
            }
        },  
        error:function(jqXHR, textStatus, errorThrown){
            if (jqXHR.responseJSON.errors.name !== undefined){
                toastr.error(jqXHR.responseJSON.errors.name[0]);
            }
            if (jqXHR.responseJSON.errors.email !== undefined){
                toastr.error(jqXHR.responseJSON.errors.email[0]);
            }
        }
    })
})

$(document).on('click', '.edit', function() {
    var id =$(this).attr('data-id');
    $('#myModal').modal('show');
    $.ajax({
        type: 'get', 
        url: route('course.show', id),
        processData: false,
        contentType: false,
        dataType: 'JSON', 
        success: function (response) {
            $('.submit-edit').attr('data-id', response.id);
            $('#showname').val(response.name);
            $('#showdes').val(response.description);
            $('#shownote').val(response.note);

            console.log(response);
        },  
        error:function(jqXHR, textStatus, errorThrown){
           
        }
    })
})

$(document).on('click', '.submit-edit', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var formdata = new FormData();
    formdata.append('name', $('#showname').val());
    formdata.append('description', $('#showdes').val());
    formdata.append('note', $('#shownote').val());
    $.ajax({
        dataType: 'JSON',
        method: 'post',
        cache: false,
        contentType: false,
        processData: false,
        data: formdata,
        url: route('course.update', id),
        success: function(response){
            $('#course-table').DataTable().ajax.reload(null, false);
            $('#myModal').modal('hide');
            toastr.success(response.success);
        },
        error:function(jqXHR, textStatus, errorThrown){
            
        }
    })
})
