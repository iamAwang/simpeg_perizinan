<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>        
    </a>

    <a href="{{ route('Developer') }}" class="nav-link {{ Request::is('developer') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-tie"></i>
        <p>Developer</p>        
    </a>

    <a href="{{ route('Permission') }}" class="nav-link {{ Request::is('permission') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-signature"></i>
        <p>Permission</p>        
    </a>

    <!-- @auth
        @php
            $menus = Auth::user()->role->role_feature;
        @endphp
        @foreach ($menus as $menu)
            <a href="{{route($menu->feature->name)}}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>{{$menu->feature->name}}</p>
            </a>
        @endforeach
    @endauth -->
</li>
