<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('admin/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->name }}
            </div>
            <div class="email">
                {{auth()->user()->email}}
            </div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">

                    <li>
                        <a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{(request()->routeIs('author.index') || request()->routeIs('tag.index') || request()->routeIs('category.index')) ? 'active' : ''}}">
                    <a href="javascript:void(0);" class="menu-toggle ">
                        <i class="material-icons">fiber_new</i>
                        <span>Managment</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{request()->routeIs('country.index') ? 'active' : ''}}">
                            <a href="{{route('country.index')}}">Country</a>
                        </li>
                        <li class="{{request()->routeIs('slider.index') ? 'active' : ''}}">
                            <a href="{{route('slider.index')}}">Sliders</a>
                        </li>
                        <li class="{{request()->routeIs('universty.index') ? 'active' : ''}}">
                            <a href="{{route('universty.index')}}">Universty </a>
                        </li>
                        <li class="{{request()->routeIs('partner.index') ? 'active' : ''}}">
                            <a href="{{route('partner.index')}}">Partners</a>
                        </li>
                        <li class="{{request()->routeIs('video.index') ? 'active' : ''}}">
                            <a href="{{route('video.index')}}">Videoes</a>
                        </li>


                    </ul>
                </li>
            </ul>
        </div>

    <div class="legal">
        <div class="copyright">
            © 2019 <a href="javascript:void(0);">Mrmax.az</a>
            <p>Site by <a target="_blank" href="https://www.facebook.com/Nizamializadah">Nizami Alizade</a></p>

        </div>
    </div>
</aside>