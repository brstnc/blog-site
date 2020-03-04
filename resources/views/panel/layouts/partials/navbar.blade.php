<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a style="color:white" href="{{ route('panel.index') }}">Anasayfa</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" style="color:white" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">{{\Illuminate\Support\Facades\Auth::user()->name}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}">Çıkış</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
