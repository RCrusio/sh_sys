
<div class="sidebar">
    <div class="logo-details">
      <img src="assets/img/deped.png" style="width: 80px;" alt="">
      <span class="logo_name">School Health</span>
    </div>
    <ul class="nav-links">

    <li>
        <a href="user_dash.php">
        <i class='bx bxs-dashboard'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="user_dash.php">try</a></li>
        </ul>
      </li>
      <li>
  
        
        <div class="iocn-link">
          <a >
            <i class='bx bx-collection' ></i>
            <span class="link_name">Forms</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" >Forms</a></li>
          <li><a href="user_sdhcp_add.php">SDHCP Form</a></li>
          <li><a href="">Achievement Form</a></li>
        </ul>
      
      </li>
      
      <li>  
        <div class="iocn-link">
          <a>  
          <i class='bx bx-history'></i>
          <span class="link_name">Reports</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name">Reports</a></li>
          <li><a href="user_sdhcp.php">SDHCP Report</a></li>
          <li><a href="">Achievement Report</a></li>
        </ul>
      </li>

      <li>
        <a href="try.php">
          <i class='bx bx-history'></i>
          <span class="link_name">try</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="try.php">try</a></li>
        </ul>
      </li>
      <li>
        <a href="user_account.php">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Account</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="user_account.php">Account</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        
      </div>
      <div class="name-job">
        <div class="profile_name"><?php echo $row["name"]; ?></div>
        <div class="job"><?php echo $row["status"]; ?></div>
      </div>
      <a href="php/logout.php">
        <i class='bx bx-log-out'></i></a>
    </div>
  </li>
</ul>
</div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
</section>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
