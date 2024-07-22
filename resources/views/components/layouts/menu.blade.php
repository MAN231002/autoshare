<!-- BEGIN MEGA MENU -->
<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
<div class="hor-menu  ">
    <ul class="nav navbar-nav">
        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
            <a href="/"> Home
                <span class="arrow"></span>
            </a>
        </li>
        <li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown  ">
            <a href="javascript:;"> Vehicle Types
                <span class="arrow"></span>
            </a>
            <ul class="dropdown-menu" style="min-width: 310px">
                <li>
                    <div class="mega-menu-content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="mega-menu-submenu">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="/categories/{{ $category->slug }}"> {{ ucwords($category->name) }} </a>
                                        </li>
                                     @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        @auth
            <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                <a href="/create"> New Post
                    <span class="arrow"></span>
                </a>
            </li>
            <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown ">
                <a href="/manage/{{ auth()->user()->username }}"> Manage
                    <span class="arrow"></span>
                </a>
            </li>
        @endauth
    </ul>
</div>
<!-- END MEGA MENU -->