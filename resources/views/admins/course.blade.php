@extends('layouts.admin')
@section('content-content')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">{{ trans('message.manage.learning') }}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">{{ trans('message.manage.learning') }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('message.manage.course') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        @if(Gate::allows('add_student'))
            <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#addNewUser">{{ trans('message.addNew') }}</button>
        @endif
    </div>
</div>

<section class="content">
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered" id="course-table" data-url="{{ route('course.datatable') }}" width="100%">
                <thead>
                    <tr>
                        <th>{{ trans('message.id') }}</th>
                        <th>{{ trans('message.name') }}</th>
                        <th>{{ trans('message.created_at') }}</th>
                        <th>{{ trans('message.action') }}</th>
                    </tr>
                </thead>
            </table>
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
                <h4 class="modal-title">{{ trans('message.addNew') }} {{ trans('message.course') }}</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form" novalidate id="addUser" data-url="{{ route('course.add') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">{{ trans('message.name') }}</label>
                        <input type="text" class="form-control" id="add-name" name="name" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.description') }}</label>
                        <input type="text" class="form-control" id="add-des" name="description" placeholder={{ trans('message.description') }}>
                    </div>
                </form>
            {{-- </div>
            <div class="modal-footer float-right"> --}}
                <button type="button" class="btn btn-default float-right " data-dismiss="modal">{{ trans('message.close') }}</button>
                <button type="submit" class="btn btn-info float-right submit-add mr-4">{{ trans('message.submit') }}</button> 
            </div>
        </div>

    </div>
</div>

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
                    <legend>{{ trans('id') }}</legend>
                
                    <div class="form-group">
                        <label for="">{{ trans('message.id') }}</label>
                        <p type="text" class="form-control" id="showid" placeholder="Input field"></p>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.name') }}</label>
                        <p type="text" class="form-control" id="showname" placeholder="Input field"></p>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.email') }}</label>
                        <p type="text" class="form-control" id="showemail" placeholder="Input field"></p>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.avatar') }}</label>
                        <img src="" alt="" id="showavatar" class="img-avatar" data-img={{ asset(config('messages.imgDefaul')) }}>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.status') }}</label>
                        <p type="text" class="form-control" id="showstatus" placeholder="Input field"></p>
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
    <script src="{{ asset('js/course.js') }}"></script>
@endsection
