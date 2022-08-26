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
                <a class="nav-link {{ $current_file_name == 'dashboard' ? 'active' : '' }}" href="{{route('dashboard')}}">Dashboard</a>
             </li>
             <li class="nav-item">
                <a class="nav-link {{ $current_file_name == 'user-profile' ? 'active' : '' }}" href="{{route('user_profile')}}">User Profile</a>
             </li>
             <li class="nav-item">
                <a class="nav-link {{ $current_file_name == 'resume-cv' ? 'active' : '' }}" href="{{route('resume_cv')}}">Create CV</a>
             </li>
             <li class="nav-item"> {{-- job_application --}}
                  <a class="nav-link {{ $current_file_name == 'job-application' ? 'active' : '' }}" href="{{route('job_application')}}">Apply for Job</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="">Mentoring programme <code>comnig soon</code></a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="">Scholarship <code>comnig soon</code></a>
             </li>
               <li class="nav-item">
                  <a class="nav-link" href="/logout">Log Out</a>
          </ul>
       </div>
    </div>
</div>