<!-- <div class="page-header-inner">
    <div class="page-header-inner">
        <div class="navbar-header">
            <a href="{{ url('/') }}"
               class="navbar-brand">
                @lang('quickadmin.quickadmin_title')
            </a>
        </div>
        <a href="javascript:;"
           class="menu-toggler responsive-toggler"
           data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li>
                   <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"><b>@lang('quickadmin.qa_logout')</b></span>
                </a>
                </li>
            </ul>
        </div>
    </div>
</div> -->

  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item">    <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"><b>@lang('quickadmin.qa_logout')</b></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // $('.sidebar_heading').css('display','none');
    // $('.page-content-wrapper .page-content').css('margin-left', '50px');
    // $('.page-sidebar').css('width', '49px');
    // $(' .page-sidebar .page-sidebar-menu .sub-menu li > a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu .sub-menu li > a ').css('padding', '0px 6px 6px 8px');
    $('.dashboard_icon').on('click',function(){
      if($('.sidebar_heading:visible').length != 0)
      {
        $('.sidebar_heading').css('display','none');
        $('.page-content-wrapper .page-content').css('margin-left', '50px');
        $('.page-sidebar').css('width', '49px');
        $(' .page-sidebar .page-sidebar-menu .sub-menu li > a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu .sub-menu li > a ').css('padding', '0px 6px 6px 8px');
      }else{
        $('.sidebar_heading').css('display','unset');
        $('.page-content-wrapper .page-content').css('margin-left', '235px');
        $('.page-sidebar').css('width', '235px');
        $(' .page-sidebar .page-sidebar-menu .sub-menu li > a, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover .page-sidebar-menu .sub-menu li > a ').css('padding', '6px 15px 6px 43px');
      }
    });
  })
</script> -->