@extends('layouts.admin')
@section('content-content')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">

            <h3 class="page-title">{{ trans('message.classMangement') }}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">{{ trans('message.class') }}: {{ $data->name }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('message.lesson') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        @if (Gate::allows('edit_lesson'))
            <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#addNewleson">{{ trans('message.addNew') }} {{ trans('message.lesson') }}</button>
            @endif
    </div>
</div>


<section class="content">
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered" id="classDetail" data-url="{{ route('classDetailDatatable', $id) }}" data-id="{{ $id }}" >
                <thead>
                    <tr>
                        <th>{{ trans('message.id') }}</th>
                        <th>{{ trans('message.name') }}</th>
                        <th>{{ trans('message.classroom.type') }}</th>
                        <th>{{ trans('message.time_study') }}</th>
                        <th>{{ trans('message.action') }}</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>

@endsection

<div id="addNewleson" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> {{ trans('message.addNew') }} {{ trans('message.lesson') }}</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form">
                    <div class="form-group">
                        <label for="">{{ trans('message.name') }}  <span class="required">*</span></label>
                        <input type="text" class="form-control" id="classname" placeholder="{{ trans('message.name') }}">
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.classroom.num_of_lesson') }} <span class="required">*</span></label>
                        <input type="text" class="form-control" id="num-lesson" placeholder={{ trans('message.classroom.num_of_lesson') }}>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.classroom.type') }} <span class="required">*</span></label>
                        <select name="type" id="type" class="form-control">
                                <option value="0" >{{ trans('message.classroom.lesson_normal') }}</option>
                                <option value="0" >{{ trans('message.classroom.lesson_test') }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.time_study') }} <span class="required">*</span></label>
                        <input type="datetime-local" class="form-control" id="classtimestudy" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">{{ trans('message.description') }}</label>
                        {{-- <input type="datetime-local" class="form-control" id="classtimestudy" placeholder="Input field"> --}}
                        <textarea style="width: 100%" id="description">
                            
                        </textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info addclass float-right">{{ trans('message.submit') }}</button> 
                <button type="button" class="btn btn-default float-right" data-dismiss="modal">{{ trans('message.close') }}</button>
            </div>
        </div>
    </div>
</div>

@section('ajax')
    <script src="{{ asset('js/classesDetail.js') }}"></script>
@endsection
