$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.select2-document').select2();
    $('#classDetail').DataTable({
        processing: true,
        serverSide: true,
        ajax: $('#classDetail').attr('data-url'),
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'is_test', name: 'is_test' },
            { data: 'schedule_time', name: 'schedule_time' },
            { data: 'action', name: 'action' },
        ],
    });

    $('#edit-info').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            dataType: 'JSON',
            method: 'post',
            cache: false,
            contentType: false,
            processData: false,
            data: new FormData(this),
            url: route('editinfo'),
            success: function(response){
                toastr.info(response.success);
                location.reload();
            }
        })
    });

    $('#addLessionDocument').on('change', function(e) {
        var lesson_id = $('#addTheory').attr('data-lessonid');
        var document_id = $('option:selected', this).attr('data-documentid');
        var html = `<div data-lessonid="`+ lesson_id +`" data-documentid="`+ document_id +`">`+ $('#addLessionDocument').val() +`
                        <button class="addtheory">add</button>
                    </div>`
        $('.appendTheory').append(html);
    });
    $(document).on('click', '.addtheory', function(e) {
        e.preventDefault();
        var formData = new FormData();
        formData.append('lesson_id', $(this).parent().attr('data-lessonid'));
        formData.append('document_id', $(this).parent().attr('data-documentid'));
        $.ajax({
            dataType: 'JSON',
            method: 'post',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            url: route('editlessionDocument'),
            success: function(response){
                toastr.info(response.success);
                location.reload();
            }
        });
    });

    $('#addLessionExercise').on('change', function(e) {
        var lesson_id = $('#addExercise').attr('data-lessonid');
        var exercise_id = $('option:selected', this).attr('data-exerciseid');
        var html = `<div data-lessonid="`+ lesson_id +`" data-exerciseid="`+ exercise_id +`">`+ $(this).val() +`
                        <button class="addexercise">add</button>
                    </div>`
        $('.appendExercise').append(html);
    });

    $(document).on('click', '.addexercise', function(e) {
        e.preventDefault();
        var formData = new FormData();
        formData.append('lesson_id', $(this).parent().attr('data-lessonid'));
        formData.append('exercise_id', $(this).parent().attr('data-exerciseid'));
        // formData.append('deadline', $('#a').val());
        $.ajax({
            dataType: 'JSON',
            method: 'post',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            url: route('editlessionExercise'),
            success: function(response){
                toastr.info(response.success);
                location.reload();
            }
        });
    })

    $('.addclass').on('click', function() {
        var id = $('#classDetail').attr('data-id');
        var formData = new FormData();
        formData.append('name', $('#classname').val());
        formData.append('num_of_lesson', $('#num-lesson').val());
        formData.append('schedule_time', $('#classtimestudy').val());
        formData.append('class_id', id);
        formData.append('description', $("#description").val());
        formData.append('is_test', $("#type").val());

        $.ajax({
            dataType: 'JSON',
            method: 'post',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            url: route('addLesson'),
            success: function(response){
                toastr.info(response.success);
                $('#addNewleson').modal('hide');
                $('#classDetail').DataTable().ajax.reload(null, false);
            },
            error:function(jqXHR, textStatus, errorThrown){
                if (jqXHR.responseJSON.errors.name !== undefined){
                    toastr.error(jqXHR.responseJSON.errors.name[0]);
                }
                if (jqXHR.responseJSON.errors.num_of_lesson !== undefined){
                    toastr.error(jqXHR.responseJSON.errors.num_of_lesson[0]);
                }
                if (jqXHR.responseJSON.errors.schedule_time !== undefined){
                    toastr.error(jqXHR.responseJSON.errors.schedule_time[0]);
                }
            }
        });
    })
})

