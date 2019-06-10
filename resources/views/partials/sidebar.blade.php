@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
     <div style="text-align: block"><img class="dashboard_icon" src="{{ url('quickadmin/images/dashboard.png') }}"></div>
        <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('/admin/home') }}"><img class="brand-logo" alt="Chameleon admin logo" src="{{ asset('images/appointment.png') }}"/>
              <!-- <h3 class="brand-text">{{ config('app.name') }}</h3> --></a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="nav-item"> <a href="{{ url('/admin/home') }}"><i class="ft-home"></i><span class="menu-title" data-i18n="">@lang('quickadmin.qa_dashboard')</span></a>
          </li>
          @can('appointment_access')
          <li class="nav-item"><a href="{{ route('admin.appointments.index') }}"><i class="fa fa-calendar"></i><span class="menu-title" data-i18n="">@lang('quickadmin.appointments.title')</span></a>
          </li>
          @endcan
           @can('client_access')
          <li class="nav-item"><a href="{{ route('admin.clients.index') }}"> <i class="fa fa-user"></i><span class="menu-title" data-i18n="">@lang('quickadmin.clients.title')</span></a>
          </li>
           @endcan
             @can('employee_access')
          <li class="nav-item"><a href="{{ route('admin.employees.index') }}"> <i class="fa fa-suitcase"></i></i><span class="menu-title" data-i18n="">@lang('quickadmin.employees.title')</span></a>
          </li>
           @endcan
           @can('service_access')
          <li class="nav-item"><a href="{{ route('admin.services.index') }}"> <i class="fa fa-hourglass"></i><span class="menu-title" data-i18n="">@lang('quickadmin.services.title')</span></a>
          </li>
           @endcan
             @can('user_management_access')
                <li class="nav-item">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span class="title sidebar_heading"><b>@lang('quickadmin.user-management.title')</b></span>
                        <span class="fa arrow sidebar_heading"></span>
                    </a>
                    <ul class="sub-menu">

                        @can('role_access')
                            <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span class="title"><b>
                                @lang('quickadmin.roles.title')
                            </b>
                            </span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                                <a href="{{ route('admin.users.index') }}">
                                    <i class="fa fa-user"></i>
                                    <span class="title"><b>
                                @lang('quickadmin.users.title')
                            </b>
                            </span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
          @can('working_hour_access')
          <li class=" nav-item"><a href="{{ route('admin.working_hours.index') }}"> <i class="fa fa-hourglass"></i><span class="menu-title" data-i18n="">@lang('quickadmin.working-hours.title')</span></a>
          </li>
           @endcan
          <li class=" nav-item"><a href="{{ route('auth.change_password') }}"><i class="fa fa-key"></i><span class="menu-title" data-i18n="">Change password</span></a>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>



    </div>
</div>



{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}
