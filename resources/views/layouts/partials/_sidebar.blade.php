<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
      <div>
        <p class="app-sidebar__user-name">John Doe</p>
        <p class="app-sidebar__user-designation">Frontend Developer</p>
      </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="{{ route('home') }}">
              <i class="app-menu__icon fa fa-dashboard"></i>
              <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('kategori.index') }}">
              <i class="app-menu__icon fa fa-list"></i>
              <span class="app-menu__label">Kategori</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('kecamatan.index') }}">
              <i class="app-menu__icon fa fa-list"></i>
              <span class="app-menu__label">Kecamatan</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="{{ route('wisata.index') }}">
              <i class="app-menu__icon fa fa-pie-chart"></i>
              <span class="app-menu__label">Data Wisata</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="charts.html">
              <i class="app-menu__icon fa fa-sign-out"></i>
              <span class="app-menu__label">Logout</span>
            </a>
        </li>
    </ul>
  </aside>
