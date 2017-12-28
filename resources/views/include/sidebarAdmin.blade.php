<div class="sidebar" data-color="green" data-image="{{ URL::asset('img/sidebar-5.jpg') }}">
    <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/" class="simple-text">
                        MUTABA'AH GURU DAARUL 'ILMI
                    </a>
                </div>
                <ul class="nav">
                   
                    <li>
                        <a class="nav-link" href="/">
                            <i class="nc-icon nc-bank"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('view_anggota')}}">
                            <i class="fa fa-address-card-o"></i>
                            <p>Anggota</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('mutabaah_hariini') }}">
                            <i class="fa fa-newspaper-o"></i>
                            <p>Mutabaah Hari Ini</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        @guest
                        <a class="nav-link active bg-green" href="{{route('login')}}">
                            <i class="nc-icon nc-single-02"></i>
                            <strong>LOGIN</strong>
                        </a>
                        @else
                            <a class="nav-link active bg-danger"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                <strong>LOGOUT</strong>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </a>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>