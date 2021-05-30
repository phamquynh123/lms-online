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

$(document).on('click', '.switch-indicator', function(e){
    var formData = new FormData();
    formData.append('id', $(this).attr('user-id'));
    formData.append('status', $(this).attr('data-status'))
    $.ajax({
        type: 'post', 
        url: $('#user-table').attr('data-status'),
        processData: false,
        contentType: false,
        data:formData,
        dataType: 'JSON', 
        success: function (response) {
            $('#user-table').DataTable().ajax.reload(null, false);
            if (response.error == true) {
                toastr.error(response.success);
            } else {
                toastr.success(response.success);
            }
        },  
        error:function(jqXHR, textStatus, errorThrown){
           
        }
    })
});

$(document).on('click', '.show-user', function() {
    var id =$(this).attr('data-id');
    var asset = $('#showavatar').attr('data-img');
    console.log(asset);
    $('#myModal').modal('show');
    $.ajax({
        type: 'get', 
        url: route('showUser', id),
        processData: false,
        contentType: false,
        dataType: 'JSON', 
        success: function (response) {
            $('#showid').text(response.data.id);
            $('#showname').text(response.data.name);
            $('#showemail').text(response.data.email);
            $('#showavatar').attr('src', asset + response.data.avatar);
            if (response.data.status == '1') {
                $('#showstatus').text('Active');
            } else {
                $('#showstatus').text('Dective');
            }

            console.log(response);
        },  
        error:function(jqXHR, textStatus, errorThrown){
           
        }
    })
})
