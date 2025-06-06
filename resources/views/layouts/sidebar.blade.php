 <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Menu Utama
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/user" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Kelola Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/jenis" class="nav-link">
                  <i class="fas fa-chart-bar nav-icon"></i>
                  <p>Kelola Data Jenis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dokumen" class="nav-link">
                  <i class="fas fa-folder-open nav-icon"></i>
                  <p>Kelola Data Dokumen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="#" class="nav-link" id="logout-link" name="archive">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>Logout</p>
            </a>
        </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

      <script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah link default

        Swal.fire({
            title: 'Konfirmasi Logout',
            text: "Apakah Anda yakin ingin keluar?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke URL logout
                window.location.href = '/postlogout';
            }
        });
    });
</script>