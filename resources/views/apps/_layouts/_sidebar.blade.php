<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item" data-menu="dashboard">
        <a href="{{ route('index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>
    <li class="menu-item" data-menu="subject">
      <a href="{{ route('schedules.create') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-detail"></i>
        <div data-i18n="Analytics">Create Subject</div>
      </a>
    </li>
    <li class="menu-item" data-menu="schedules">
        <a href="{{ route('schedules') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-table"></i>
            <div data-i18n="Analytics">Schedules</div>
        </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Master</span>
    </li>
    <li class="menu-item" data-menu="employee">
        <a href="#" class="menu-link">
            <i class="menu-icon tf-icons bx bxs-user-account"></i>
            <div data-i18n="Analytics">Employee</div>
        </a>
    </li>
    <li class="menu-item" data-menu="random-index">
        <a href="#" class="menu-link">
            <i class='menu-icon tf-icons bx bx-cog'></i>
            <div data-i18n="Analytics">Random Index</div>
        </a>
    </li>
  </ul>