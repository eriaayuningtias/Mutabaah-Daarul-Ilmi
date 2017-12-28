<div class="sidebar" data-color="green" data-image="{{ URL::asset('img/sidebar-3.jpg') }}">
    <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
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
                        <a class="nav-link" href="{{ route('isi_mutabaah')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Isi Mutabaah</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('riwayat_mutabaah')}}">
                            <i class="nc-icon nc-single-copy-04"></i>
                            <p>Riwayat</p>
                        </a>
                    </li>
                    <li>
                    <li class="nav-item active active-pro">
                        @guest
                        <a class="nav-link active bg-green" href="{{route('login')}}">
                            <i class="fa fa-user-circle-o"></i>
                            <strong>LOGIN</strong>
                        </a>
                        @else
                            <a class="nav-link active bg-danger"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-user-circle-o"></i>
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