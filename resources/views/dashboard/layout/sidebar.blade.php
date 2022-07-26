<div class="col-lg-3 col-md-4">
    <!-- Collapse -->
    <div class="single_price_table_content wow fadeInUp" data-wow-delay="0.2s">
       <div class="card-body">
          <!-- Heading -->
          <h6 class="text-uppercase ">
             Account
          </h6>
          <?php $current_file_name = basename($_SERVER['REQUEST_URI'], ".php"); ?>
          <ul class="nav-dashboard">
             <li class="nav-item">
                <a class="nav-link {{ $current_file_name == 'dashboard' ? 'active' : '' }}" href="user-profile.html">Dashboard</a>
             </li>
             <li class="nav-item">
                <a class="nav-link {{ $current_file_name == 'user_profile' ? 'active' : '' }}" href="user-profile.html">User Profile</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="social-profiles.html">Create CV</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="my-properties.html">Apply for Job</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="favorite-properties.html">Mentoring programme</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="add-property.html">Scholarship</a>
             </li>
          </ul>
       </div>
    </div>
</div>