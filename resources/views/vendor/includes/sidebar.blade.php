<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo"><img src="img/logo/logo.png" alt="" /> <span class="nav_name">Shophab</span> </a>
            <ul class="nav_list" id="sidebar">
                <li>
                    <a href="{{url('index')}}" class="nav_link active"> <i class="bx bx-grid-alt nav_icon"></i> <span
                            class="nav_name">Dashboard</span> </a>
                </li>
                <li>
                    <div class="icon-link ">
                        <a href="#" class="nav_link parent"> <i class='bx bxs-package'></i><span class="nav_name">My
                                Products</span> </a>
                        <i class="bx bxs-chevron-down arrow"></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="{{url('manageProduct')}}">Manage Products</a></li>
                        <li><a href="{{url('addProduct')}}">Add Products</a></li>
                    </ul>
                </li>
                <li>
                    <div class="icon-link">
                        <a href="#" class="nav_link parent"> <i class='bx bx-list-ul'></i><span class="nav_name">Order</span> </a>
                        <i class="bx bxs-chevron-down arrow"></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="{{url('order')}}">Manage Order</a></li>
                        <li><a href="{{url('reviewManage')}}">Manage Review</a></li>
                    </ul>
                </li>

                <li>
                    <div class="icon-link">
                        <a href="#" class="nav_link parent"> <i class='bx bxs-cog'></i><span class="nav_name">Account &
                                Setting</span> </a>
                        <i class="bx bxs-chevron-down arrow"></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="{{url('profile')}}">Profile</a></li>
                        <li><a href="{{url('userManage')}}">User Management</a></li>
                        <li><a href="{{url('account')}}">Account Setting</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <a href="#" class="nav_link"> <i class="bx bx-log-out nav_icon"></i> <span class="nav_name">SignOut</span> </a>
    </nav>
</div>
