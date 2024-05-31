<!-- Header -->
<header class="d-flex justify-content-between align-items-center p-3 bg-dark text-white">
        <div class="d-flex align-items-center">
          <a href="adminDashboard.html" class="d-flex align-items-center text-decoration-none text-white">
            <img src="<?php echo ROOT_ASSETS . '/images/pdao_logo.png" alt="PDAO Logo" width="40" height="40" class="me-2' ?>">
            <span class="fs-3">PDAO ADMIN</span>
          </a>
        </div>
        <div class="dropdown">
          <a href="#"
            class="d-flex align-items-center link-light text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo ROOT_ASSETS . 'images/user.png" alt width="32" height="32" class="rounded-circle me-2' ?>">
            <strong>Admin Account</strong>
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </header>