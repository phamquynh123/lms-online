<ul class="sidebar-menu" data-widget="tree">
    <li class="user-profile treeview">
        <a href="{{ route('profile') }}">
            {{-- {{ Auth::user()->avatar}} --}}
            @if( Auth::user()->avatar != null)
                <img src=" {{ asset(config('messages.imgDefaul').Auth::user()->avatar) }}" class="a">
            @else
                <img src=" {{ asset(config('messages.linkdefaul')) }}">
            @endif
            <span>
                <span class="d-block font-weight-600 font-size-16">{{ Auth::user()->name }}</span>
                <span class="email-id">{{ Auth::user()->email }}</span>
            </span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('profile') }}"><i class="fa fa-user mr-5"></i>{{ trans('message.MyProfile') }} </a></li>
            <li>
                <a class="dropdown-item logout" href="{{ route('logout') }}">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </li>
        </ul>
    </li>

    @if (Gate::allows('statistic'))
        <li class="treeview">
            <a href="#">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                <span>{{ trans('message.MainDashboard') }}</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-caret-right"></i>{{ trans('message.general') }}</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i>{{ trans('message.student') }}</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i>{{ trans('message.teacher') }}</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i>{{ trans('message.course') }}</a></li>
                
            </ul>
        </li>
    @endif

    <li class="treeview">
        <a href="{{ asset('/admin/classes') }}">
            <i class="fa fa-address-book-o" aria-hidden="true"></i>
            <span> {{ trans('message.classMangement') }}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ asset('/admin/classes') }}">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                    {{ trans('message.classList') }}
                </a>
            </li>
            <li>
                <a href="{{ asset('/admin/course') }}">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                    Quản lí khóa học.
                </a>
            </li>
        </ul>
    </li>

    <li class="treeview">
        <a>
            <i class="fa fa-address-book-o" aria-hidden="true"></i>
            <span> {{ trans('message.peopleMangement') }}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            @if(Gate::allows('add_teacher'))
                <li>
                    <a href="{{ asset('/admin/teachers') }}">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i>
                        {{ trans('message.techearMangement') }}
                    </a>
                </li>
            @endif
            @if(Gate::allows('student_managerment'))
                <li>
                    <a href=" {{ asset('/admin/students') }} ">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        {{ trans('message.studentMangement') }}
                    </a>
                </li>
            @endif
        </ul>
    </li>

    {{-- <li class="treeview">
        <a href=" {{ asset('/admin/courses') }} ">
            <i class="fa fa-building" aria-hidden="true"></i>
            <span> {{ trans('message.courseMangement') }}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ asset('/admin/course') }}">
                    <i class="fa fa-address-book-o" aria-hidden="true"></i>
                    {{ trans('message.courseList') }}
                </a>
            </li>
        </ul>
    </li> --}}
    @if (Gate::allows('management_document'))
        <li class="treeview">
            <a href="#">
                <i class="fa fa-building" aria-hidden="true"></i>
                <span> {{ trans('message.documentMangement') }}</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ asset('/documents/theory') }}">
                        <i class="fa fa-book"></i>
                        {{ trans('message.theory') }}
                    </a>
                </li>
                <li>
                    <a href="{{ asset('/documents/exercise') }}">
                        <i class="fa fa-pen"></i>
                        {{ trans('message.exercise') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif

    @if(Gate::allows('change_status'))
        <li class="treeview">
            <a href=" {{ asset('admin/registerList') }}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span> {{ trans('message.register') }} {{ trans('message.list') }}</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ asset('admin/registerList') }}">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i>
                         {{ trans('message.register') }} {{ trans('message.list') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif

    @if(Gate::allows('change_status'))
        <li class="treeview">
            <a href=" {{ asset('permission') }} ">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span> {{ trans('message.permissionMangement') }}</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ asset('admin/permission') }}">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i>
                        {{ trans('message.permissionMangement') }}
                    </a>
                </li>
            </ul>
        </li>
    @endif
</ul>