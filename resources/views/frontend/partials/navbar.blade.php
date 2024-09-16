<nav class="navbar container" style="display: flex; justify-content: space-between; align-items: center; background-color: #bdd6f0; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); font-family: 'Times New Roman', Times, serif; font-size: 14px;">
  <div class="navbar-logo">
      <a href="#"><img src="logo.png" alt="Scogold Ventures Logo" style="height: 40px;"></a>
  </div>
  <ul class="navbar-menu" style="list-style: none; display: flex; margin: 0; padding: 0;">
      <li class="nav-item" style="margin-right: 20px;"><a href="/" class="nav-link">Home</a></li>
      <li class="nav-item" style="margin-right: 20px;"><a href="/about" class="nav-link">About</a></li>
      <li class="nav-item dropdown" style="position: relative; margin-right: 20px;">
          <a href="/services" class="nav-link">Services</a>
          <ul class="dropdown-menu" style="position: absolute; top: 100%; left: 0; list-style: none; background-color: white; padding: 10px 0; margin: 0; display: none; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); border-radius: 5px;">
              <li style="padding: 10px 20px;"><a href="/ticket" class="dropdown-link">Air Ticketing</a></li>
              <li style="padding: 10px 20px;"><a href="/visa" class="dropdown-link">Visa Application</a></li>
              <li style="padding: 10px 20px;"><a href="/ti" class="dropdown-link">Travel Insurance</a></li>
          </ul>
      </li>
      <li class="nav-item dropdown" style="position: relative; margin-right: 20px;">
          <a href="/destinations" class="nav-link">Destinations</a>
          <ul class="dropdown-menu" style="position: absolute; top: 100%; left: 0; list-style: none; background-color: white; padding: 10px 0; margin: 0; display: none; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); border-radius: 5px;">
              <li style="padding: 10px 20px;"><a href="/beachdestinations" class="dropdown-link">Beach Destinations</a></li>
              <li style="padding: 10px 20px;"><a href="/mountain" class="dropdown-link">Mountain Destinations</a></li>
          </ul>
      </li>
      <li class="nav-item dropdown" style="position: relative; margin-right: 20px;">
          <a href="/travelblog" class="nav-link">Travel Blog</a>
          <ul class="dropdown-menu" style="position: absolute; top: 100%; left: 0; list-style: none; background-color: white; padding: 10px 0; margin: 0; display: none; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); border-radius: 5px;">
              {{-- <li style="padding: 10px 20px;"><a href="/latest-post" class="dropdown-link">Latest Blog Post</a></li> --}}
              <li style="padding: 10px 20px;"><a href="/tips" class="dropdown-link">Travel Tips</a></li>
              {{-- <li style="padding: 10px 20px;"><a href="/subscribe" class="dropdown-link">Subscribe for Updates</a></li> --}}
          </ul>
      </li>
  </ul>
  <div class="navbar-quick-access">
      <a href="#" class="quick-access-button" style="text-decoration: none; color: white; background-color: #0070C0; padding: 10px 20px; border-radius: 5px;">Quick Access</a>
  </div>
</nav>

<script>
  // Show dropdowns on hover
  document.querySelectorAll('.nav-item').forEach(item => {
      item.addEventListener('mouseenter', () => {
          const dropdown = item.querySelector('.dropdown-menu');
          if (dropdown) {
              dropdown.style.display = 'block';
          }
      });

      item.addEventListener('mouseleave', () => {
          const dropdown = item.querySelector('.dropdown-menu');
          if (dropdown) {
              dropdown.style.display = 'none';
          }
      });
  });
</script>
