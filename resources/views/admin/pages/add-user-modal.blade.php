<div class="offcanvas offcanvas-end" tabindex="-1" id="exampleOffcanvas" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header">
      <h2 class="offcanvas-title" id="offcanvasLabel">Add Users</h2>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Content for your offcanvas goes here -->
      <!--success message alert-->

      <div id="show_success_alert"></div>
      <!--success message alert-->
      <div class="input-box">
        <form id="registerform_Authentication" class="row g-4" action="" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <input type="hidden" id="role" name="role" value="1"> --}}

            <div class="col-12">
                <div class="form-floating theme-form-floating">
                    <input type="text" class="form-control" id="username"
                    name="username"  placeholder="Full Name">
                    <label for="fullname">Full Name</label>
                </div>
                <div class="invalid-feedback" id="username-error" style="display: block;"></div>

            </div>
            <div class="col-12">
                <div class="form-floating theme-form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                    <label for="email">Email Address</label>
                </div>
                <div class="invalid-feedback" id="email-error" style="display: block;"></div>

            </div>

            <div class="col-12">
                <div class="form-floating theme-form-floating">
                    <input type="password" class="form-control" id="password"  name="password"
                        placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <div class="invalid-feedback" id="password-error" style="display: block;"></div>

            </div>
            <div class="col-12">
                <div class="form-floating theme-form-floating">
                    <select name="role" id="role" class="form-control" aria-label="Default select example">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>

                    </select>
                    <label for="password">Select Role</label>
                </div>
                <div class="invalid-feedback" id="role-error" style="display: block;"></div>

            </div>

            <div class="col-12">
                <div class="forgot-box">
                    <div class="form-check ps-0 m-0 remember-box">
                        <input class="checkbox_animated check-box" type="checkbox"
                        id="terms-conditions" name="terms" value="terms-accepted">
                        <label class="form-check-label" for="flexCheckDefault">I agree with
                            <span>Terms</span> and <span>Privacy</span></label>
                    </div>
                </div>
                <div class="invalid-feedback" id="terms-conditions-error" style="display: block;"></div>

            </div>

            <div class="col-12">
                <button class="btn btn-animation w-100" type="submit" id="register_btn">Sign Up</button>
            </div>
        </form>
    </div>
    </div>
  </div>
