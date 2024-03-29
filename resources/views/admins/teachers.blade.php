@extends('layouts.admin')
@section('content-content')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">{{ trans('message.techearMangement') }}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">{{ trans('message.teacherList') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        @if(Gate::allows('teacher_managerment'))
            <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#addNewUser">{{ trans('message.addNew') }}</button>
        @endif
    </div>
</div>

<section class="content">
    <div class="box">
        <div class="box-body">
            @if(Gate::allows('add_teacher'))
            <table class="table table-bordered" id="user-table" data-url="{{ route('datatables.user', config('messages.roleTeacher')) }}" data-status={{ route('changestatus') }}>
                <thead>
                    <tr>
                        <th>{{ trans('message.id') }}</th>
                        <th>{{ trans('message.name') }}</th>
                        <th>{{ trans('message.email') }}</th>
                        <th>{{ trans('message.avatar') }}</th>
                        <th>{{ trans('message.status') }}</th>
                        <th>{{ trans('message.created_at') }}</th>
                        <th>{{ trans('message.action') }}</th>
                    </tr>
                </thead>
            </table>
            <label class="switch switch-border switch-danger">
                <input type="checkbox" id="" checked="">
                <span class="switch-indicator"></span>
                <span class="switch-description"></span>
            </label>
            @endif
        </div>
    </div>
</section> 

@endsection
{{-- modal add New  --}}
<div id="addNewUser" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ trans('message.addNew') }}</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" novalidate id="addUser" data-url="{{ route('addUser', config('messages.roleTeacher')) }}">
                    @csrf

                    <legend>{{ trans('message.addNew') }} {{ trans('message.teacher') }}</legend>
                
                    <div class="form-group">
                        <label for="">{{ trans('message.name') }}</label>
                        <input type="text" class="form-control" id="add-name" name="name" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.email') }}</label>
                        <input type="text" class="form-control" id="add-email" name="name" placeholder="Input field">
                    </div>
                </form>
            </div>
            <div class="modal-footer float-right">
                <button type="button" class="btn btn-default float-right" data-dismiss="modal">{{ trans('message.close') }}</button>
                <button type="button" class="btn btn-info float-right submit-add">{{ trans('message.submit') }}</button> 
            </div>
        </div>

    </div>
</div>
{{-- edit infor  --}}

{{--  show info --}}
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ trans('message.teacher') }}</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" id="a">
                    <div class="form-group">
                        <label for="">{{ trans('message.id') }}: </label>
                        <p type="text" id="showid" placeholder="Input field"></p>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.name') }} : </label>
                        <span type="text" id="showname" placeholder="Input field"></span>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.email') }}: </label>
                        <span type="text" id="showemail" placeholder="Input field"></span>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.avatar') }}</label>
                        <img src="" alt="" id="showavatar" class="img-avatar" data-img={{ asset(config('messages.imgDefaul')) }}>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.status') }} : </label>
                        <span type="text" id="showstatus" placeholder="Input field"></span>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.class') }} : </label>
                        <span type="text" id="showclass" placeholder="Input field"></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

@section('ajax')
    <script src="{{ asset('js/teacher.js') }}"></script>
@endsection
