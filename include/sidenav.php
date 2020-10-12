<nav id="sidebar" class="bg-dark">
  <div class="sidebar-header bg-dark">
    <div class="rounded shadow-sm text-center bg-dark">
      <img src="<?php echo '../'.$fetch['USER_PHOTO'];?>" alt="profile picture" width="100" class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm">
      <ul class="list-unstyled components">
        <li class="active bg-light">
          <a href="#accmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <h5 class="text-color-dark"><?php echo $fetch['USER_FNAME']." ". $fetch['USER_MNAME']?></h5>
          </a>
          <ul class="collapse list-unstyled text" id="accmenu">
            <li>
              <a href="profile.php?e">Edit Profile</a>
            </li>
            <li>
              <a href="../classes/logout.php">Sign out</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>

  </div>

  <ul class="list-unstyled components text-light">
    <li class=" <?php if($current_page == 'Home') echo 'active' ?>">
      <a href="index.php">
        <i class="fa fa-home"></i>
        Home
      </a>
    </li>
    <li class=" <?php if($current_page == 'Donation') echo 'active' ?>">
      <a href="donation.php">
        <i class="fa fa-gift" aria-hidden="true"></i>
        Doniations
      </a>
    </li>
    <li class=" <?php if($current_page == 'Profile') echo 'active' ?>">
      <a href="profile.php">
        <i class="fa fa-user" aria-hidden="true"></i>
        Profile
      </a>
    </li>
  </ul>
</nav>
