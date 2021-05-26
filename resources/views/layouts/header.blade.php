@section('header')
    <div class="container color-gradient">
        <div class="header">
            <h1 class="judul">Xirus Gaming Studio</h1>
            <img class="img-game" src="{{ asset('assets/images/logo-game.png') }}">
            <p class="catatan"> Web ini adalah tempat share informasi game seru yang
        dapat di download gratis untuk menemani karantina di rumah
        bagi para gamers</p>
            <div class="box-nav">
        <nav>
            <ul class="box-shadow">						
                        <li>
                            <a href="#"><img class="img-icon" src="{{ asset('assets/images/logo-home.png') }}"></a>
                        </li>
                        <li>
                            <a href="#overwatch">Overwatch</a>
                            <a href="#dota2">DOTA 2</a>
                <a href="#pubg">PUBG</a>
                <a href="{{url('todolist')}}">List</a>
                            <a href="#profil">Profile</a>
                        </li>
                    </ul>		
                </nav>			
            </div>
        </div>
    </div>
@endsection