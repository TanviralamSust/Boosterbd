<li>

<li><a class="dropdown-item" href="{{url('/account-payment')}}">Settings</a></li>

<a class="dropdown-item" href="{{url('/myaccount')}}">My Account</a>

<a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
    Logout
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
</li>




