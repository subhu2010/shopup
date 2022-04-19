<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu ' id="header-toggle"></i> </div>
    <div class="search">
        <input type="text" class="searchTerm" placeholder="What are you looking for?">
        <button type="submit" class="searchButton">
            <i class="las la-search"></i>
        </button>
    </div>
    <ul class="user-wrap">
        <!-- Nav Item - Alerts -->
        <li>
            <a class="" href="#" role="button" data-bs-toggle="modal" data-bs-target="#alertsDropdown">
                <i class="las la-bell"></i>
                <span class="badge badge-danger badge-counter">3+</span>
            </a>

        </li>


        <!-- Nav Item - Messages -->
        <li>
            <a class="" href="#" role="button" data-bs-toggle="modal" data-bs-target="#messagesDropdown">
                <i class="las la-envelope"></i>
                <span class="badge badge-danger badge-counter">7</span>
            </a>

        </li>
        <li>
            <div class="user dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="https://i.imgur.com/hczKIze.jpg" alt="">
                <div class="user__info custom-head">
                    <h6>John Doe</h6>
                </div>
            </div>
            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                <li><a href="add.php">Profile</a></li>
                <li><a href="userManage.php">User Management</a></li>
                <li><a href="view.php">Account Setting</a></li>
                <li><a href="view.php">Chat Setting</a></li>
                <li><a class="" href="#">signout</a></li>
            </ul>

        </li>
    </ul>
</header>

@include('vendor.includes.modal')