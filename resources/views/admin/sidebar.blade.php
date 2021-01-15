<div class="sidebar">
    <ul class="widget widget-menu unstyled">
        <li class="active"><a href="/manager"><i class="menu-icon icon-dashboard"></i>Dashboard
        </a></li>
        <li><a href="/manager/manageproduct"><i class="menu-icon icon-bullhorn"></i>Product manager</a>
        </li>
        <li><a href="/manager/managecategory"><i class="menu-icon icon-inbox"></i>Category manager</a></li>
        <li><a href="/manager/manageaccount"><i class="menu-icon icon-tasks"></i>Account manager</a></li>
        <li><a href="/manager/managereceipt"><i class="menu-icon icon-tasks"></i>Receipt manager</a></li>
        <li><a href="/manager/code"><i class="menu-icon icon-tasks"></i>Counpon code</a></li>
    </ul>

    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="menu-icon icon-signout"></i>{{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>