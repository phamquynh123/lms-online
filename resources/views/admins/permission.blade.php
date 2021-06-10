@extends('layouts.admin')
@section('content-content')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">{{ trans('message.studentList') }}</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('message.studentList') }}</li>
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


    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p><b>{{ trans('message.permissions') }}</b></p>
            <button class="btn btn-info float-right permissionrole-add" data-toggle="modal" data-type="permission" data-target="#permissionrole-add">{{ trans('message.addNew') }} {{ trans('message.permissions') }}</button>
            <div class="clear"></div>
            <table class="table table-hover" id="permissionn" data-url="{{ route('permission.datatable') }}">
                <thead>
                    <tr>
                        <th>{{ trans('message.id') }}</th>
                        <th>{{ trans('message.name') }}</th>
                        <th>{{ trans('message.description') }}</th>
                        <th style="width: 80px">{{ trans('message.action') }}</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <p><b>{{ trans('message.role') }}</b></p>
            <button class="btn btn-info float-right permissionrole-add" data-type="role" data-toggle="modal" data-target="#permissionrole-add">{{ trans('message.addNew') }} {{ trans('message.role') }}</button>
            <div class="clear"></div>
            <table class="table table-hover" id="role" data-url="{{ route('permission.datatableRole') }}">
                <thead>
                    <tr>
                        <th>{{ trans('message.id') }}</th>
                        <th>{{ trans('message.name') }}</th>
                        <th>{{ trans('message.description') }}</th>
                        <th>{{ trans('message.action') }}</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="clear"></div>
        <hr class="error">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <p><b>{{ trans('message.permissions_role') }}</b></p>
            <button class="btn btn-info float-right" data-toggle="modal" data-target="#add-permissionrole">{{ trans('message.addNew') }} {{ trans('message.role') }}</button>
            <div class="clear"></div>
            <table class="table table-hover" id="permissionrole" data-url="{{ route('permission.datatablePermissionRole') }}">
                <thead>
                    <tr>
                        <th>{{ trans('message.id') }}</th>
                        <th>{{ trans('message.role') }}</th>
                        <th>{{ trans('message.permissions') }}</th>
                        <th>{{ trans('message.action') }}</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

        </div>
    </div>
</section>
@endsection

{{-- add permission or role edit story --}}
<div id="permissionrole-add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">{{ trans('message.addNew') }}</h2>
            </div>
            <div class="modal-body">
                <form id="form_validation" method="POST">
                    @csrf
                    <input type="hidden" name="type" class="type-add">
                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.name') }}</label>
                            <input type="text" class="form-control" id="" placeholder="Input field" name="name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.display_name') }}</label>
                            <input type="text" class="form-control" id="" placeholder="Input field" name="display_name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.description') }}</label>
                            <input type="text" class="form-control" id="" placeholder="Input field" name="description">
                        </div>
                    </div>

                    <button class="btn btn-primary waves-effect" id="addRoleOrPermission" type="submit" data-dismiss="modal">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- edit permission --}}
<div id="permission-edit" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">{{ trans('message.edit') }} {{ trans('message.permissions') }}</h2>
            </div>
            <div class="modal-body">
                <form id="permission-editt" method="POST">
                    @csrf
                        <input type="hidden" id="permission-id" name="id">

                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.name') }}</label>
                            <input type="text" class="form-control" id="permission-name" placeholder="Input field" name="name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.display_name') }}</label>
                            <input type="text" class="form-control" id="permission-display_name" placeholder="Input field" name="display_name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.description') }}</label>
                            <input type="text" class="form-control" id="permission-description" placeholder="Input field" name="description">
                        </div>
                    </div>
                    <div class="form-group float-right">
                        <button class="btn bg-deep-purple waves-effect float-right" type="submit">{{ trans('message.submit') }}</button>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>

    </div>
</div>

{{-- edit role --}}
<div id="role-edit" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">{{ trans('message.edit') }} {{ trans('message.role') }}</h2>
            </div>
            <div class="modal-body">
                <form id="role-editt" method="POST">
                    @csrf
                        <input type="hidden" id="role-id" name="id">

                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.name') }}</label>
                            <input type="text" class="form-control" id="role-name" placeholder="Input field" name="name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.display_name') }}</label>
                            <input type="text" class="form-control" id="role-display_name" placeholder="Input field" name="display_name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.description') }}</label>
                            <input type="text" class="form-control" id="role-description" placeholder="Input field" name="description">
                        </div>
                    </div>
                    <div class="form-group float-right">
                        <button class="btn bg-deep-purple waves-effect float-right" type="submit">{{ trans('message.submit') }}</button>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>

    </div>
</div>

{{-- add pẻmission-role --}}
<div id="permissionrole-add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">{{ trans('message.addNew') }}</h2>
            </div>
            <div class="modal-body">
                <form id="" method="POST">
                    @csrf
                    <input type="text" name="type" class="type-add">
                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.name') }}</label>
                            <input type="text" class="form-control" id="" placeholder="Input field" name="name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="form-line">
                            <label for="">{{ trans('message.display_name') }}</label>
                            <input type="text" class="form-control" id="" placeholder="Input field" name="display_name">
                        </div>
                    </div>
                    </div>

                    <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>

    </div>
</div>

{{-- edit  permission-role --}}
<div id="permissionrole-edit" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">{{ trans('message.edit') }} {{ trans('message.permissions') }} - {{ trans('message.role') }}</h2>
            </div>
            <div class="modal-body">
                <span><b>{{ trans('message.role') }} : </b></span></h3><span class="rolename"></span> <br>
                <b>{{ trans('message.permissions') }} : </b>
                <div class="list-permission-per-people">
                    <p><b>{{ trans('message.permissions') }}</b></p>
                </div>
                <div>
                    <form action="" method="POST" role="form" id = >
                        @csrf
                        <div class="form-group">
                            <div class="form-line">
                                <label for="">{{ trans('message.addNew') }} {{ trans('message.permissions') }} cho <span class="rolename"></span></label>
                                <select name="" id="" class="selectpermission form-control">
                                </select>
                            </div>
                        </div>

                        <button type="" class="btn btn-primary" id="addPermissionRole">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@section('ajax')
    <script src="{{ asset('js/permission.js') }}"></script>
@endsection
