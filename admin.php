<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="assets/icon.png" />
  <link rel="stylesheet" href="css/admin.css" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sehat Bersama</title>
</head>

<body>
  <!-- navbar -->
  <div class="sidebar">
    <div class="logo-details">
      <i class="bx bx-category"></i>
      <span class="logo_name">Sehat Bersama</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="pasien/pasien.php">
          <i class="bx bx-box"></i>
          <span class="links_name">Pasien</span>
        </a>
      </li>
      <li>
        <a href="pembayaran/pembayaran.php">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Pembayaran</span>
        </a>
      </li>
      <li>
        <a href="#" onclick="logout()"> <!-- Mengubah confirmLogout() menjadi logout() -->
          <i class="bx bx-log-out"></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
      </div>
      <div class="profile-details">
        <span class="admin_name">SeBer Admin</span>
      </div>
    </nav>
    <!-- end -->

    <div class="home-content">
      <h1>Selamat Datang Admin!!!!</h1>
    </div>
  </section>
</body>
<script>
  // Logout function
  function logout() {
    // Your logout logic here
    alert("You have been logged out.");
    // Redirect to login page or perform other actions as needed
    window.location.href = "login.php";
  }
</script>
</html>