<ul>
    <li class="{{ (request()->is('user-dashboard*')) ? 'active' : '' }}">
        <a href="{{url('user-dashboard')}}"><i class="las la-search-plus"></i>Profile Overview</a>
    </li>
    <li class="{{ (request()->is('user-edit*')) ? 'active' : '' }}">
        <a href="{{url('user-edit')}}"><i class="las la-user-circle"></i>Manage Profile</a>
    </li>
    <li class="{{ (request()->is('user-cart*')) ? 'active' : '' }}">
        <a href="{{url('user-cart')}}"><i class="las la-shopping-cart"></i>Cart</a>
    </li>
    <li class="{{ (request()->is('user-order*')) ? 'active' : '' }}">
        <a href="{{url('user-order')}}"><i class="las la-list-alt"></i>Order Details</a>
    </li>
    <li class="{{ (request()->is('user-wishlist*')) ? 'active' : '' }}">
        <a href="{{url('user-wishlist')}}"><i class="las la-heart"></i>wishlist</a>
    </li>
    <li class="{{ (request()->is('user-history*')) ? 'active' : '' }}">
        <a href="{{url('user-history')}}"><i class="las la-history"></i>History</a>
    </li>
    <li>
        <a href="{{url('/')}}"><i class="las la-sign-out-alt"></i>Logout</a>
    </li>
</ul>