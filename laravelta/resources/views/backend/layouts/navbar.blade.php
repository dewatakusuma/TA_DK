<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                @if (empty(Auth::user()->gambar))
                <img src="{{asset('images/user.png')}}" width="55" height="55" alt="User" />
                @else
                <img src="{{ asset('storage/images/foto_dokter/'.Auth::user()->gambar) }}" width="55" height="55" alt="User" />
                @endif
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                <div class="email">{{Auth::user()->email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="{{ url('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out</a>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
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
                <li>
                    <a href="/home">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('backend/profil/indexprofil/'.Auth::user()->id) }}">
                        <i class="material-icons">book</i>
                        <span>Profil</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('backend/indexpasien/'.Auth::user()->id) }}">
                        <i class="material-icons">description</i>
                        <span>Data Pasien</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="/latihan">
                        <i class="material-icons">border_color</i>
                        <span>Latihan</span>
                    </a>
                </li>
                <li>
                    <a href="/forum">
                        <i class="material-icons">question_answer</i>
                        <span>Forum</span>
                    </a>
                </li>  -->  
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">The Doctor</a>.
            </div>
            <div class="version">
                <b>Version: </b> 0.0.1
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    
            
    <!-- #END# Right Sidebar -->
</section>
