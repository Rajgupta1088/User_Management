      <ul class="sidebar navbar-nav sidebar_text">
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url('user/Dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="text_col">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('user/User_profile'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span class="text_col">My Profile</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('user/Change_password'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span class="text_col">Change Pasword</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('user/Login/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span class="text_col">Log Out</span></a>
        </li>

      </ul>