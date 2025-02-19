<!-- BEGIN TOP NAVIGATION MENU -->
<div class="top-menu">
    <ul class="nav navbar-nav pull-right">

    @auth
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <li class="dropdown dropdown-user dropdown-dark">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img alt="" class="img-circle" src="/assets/layouts/layout3/img/avatar9.jpg">
                <span class="username username-hide-mobile">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
                <li>
                    <a href="/logout">
                        <i class="icon-key"></i> Log Out </a>
                </li>
            </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
    @else
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <li class="dropdown dropdown-user dropdown-dark">
            <a href="/register" class="text-xs font-bold uppercase font-green">Register</a>
        </li>
        <li class="dropdown dropdown-user dropdown-dark">
            <a href="/login" class="ml-6 text-xs font-bold uppercase font-green">Log In</a>
        </li>
        <!-- END USER LOGIN DROPDOWN -->

    @endauth

    </ul>
</div>
<!-- END TOP NAVIGATION MENU -->