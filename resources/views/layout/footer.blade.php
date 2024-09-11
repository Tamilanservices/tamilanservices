<div class="bg-dark text-white py-3">
    <!-- <div class="container py-4">
        <div class="row">
            <div class="col-4">
                <h6 class="mb-3">Quick Links</h6>
            </div>
            <div class="col-4">
                <h6 class="mb-3">Contact us</h6>
                <div class="">

                </div>
            </div>
            <div class="col-4">
                <h6 class="mb-3">Enquiry</h6>
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-12">
                        <input type="tel" class="form-control" id="phone" value="" placeholder="Phone no*" required>
                        <div class="invalid-feedback">Please enter your mobile no </div>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" id="commends" rows="3" placeholder="Commends*" required></textarea>
                        <div class="invalid-feedback">Please enter your commends</div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
    <div class="container d-flex justify-content-between">
        <div class="font-13">Copyright 2024 All rights reserved</div>
        <div class="d-flex align-content-center justify-content-end">
            <i class="fa-brands fa-facebook-f me-3"></i>
            <i class="fa-brands fa-instagram me-3"></i>
            <i class="fa-brands fa-x-twitter me-3"></i>
            <i class="fa-brands fa-youtube me-3"></i>
            <i class="fa-brands fa-whatsapp"></i>
        </div>
    </div>

</div>

<div class="modal fade" id="login_popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header px-4">
        <h1 class="modal-title fs-5">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form class="needs-validation d-none signup" novalidate>
            <div class="mb-3 position-relative">
                <!-- <label for="phone" class="form-label">Mobile *</label> -->
                <input type="tel" class="form-control pl-50" id="phone" placeholder="Enter Your Mobile No" required>
                <span class="phone-code">+91</span>
                <div class="invalid-feedback">Please enter your mobile no </div>
            </div>
            <div class="mb-3">
                <!-- <label for="phone" class="form-label">Full Name *</label> -->
                <input type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
                <div class="invalid-feedback">Please enter your name </div>
            </div>
            <div class="mb-3">
                <!-- <label for="phone" class="form-label">City *</label> -->
                <select class="selectpicker w-100" data-style="form-select border" id="district" data-live-search="true" required>
                    <option selected disabled value="">Select Your District </option>
                    <option value="1">Salem</option>
                    <option value="2">Erodu</option>
                    <option value="3">Dharmapuri</option>
                </select>
                <div class="invalid-feedback">Select your city</div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Save</button>
            </div>
            <div class="d-block text-center mt-3">
                <a href="javascript:void(0)" class="login-form">Login</a>
            </div>
        </form>
        <form class="needs-validation login" novalidate>
            <div class="mb-3 position-relative">
                <!-- <label for="phone" class="form-label">Mobile *</label> -->
                <input type="tel" class="form-control pl-50" id="phone" placeholder="Enter Your Mobile No" required>
                <span class="phone-code">+91</span>
                <div class="invalid-feedback">Please enter your mobile no </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
            <div class="d-block text-center mt-3">
                <a href="javascript:void(0)" class="signup-form">Sign up</a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="listing_popup">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header px-4">
        <h1 class="modal-title fs-5">Add Your Business</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('business-info') }}" method="post">
          @csrf
          <div class="modal-body p-4">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Business Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" placeholder="Enter Your Business Name" required>
                <div class="invalid-feedback">Please enter your business name </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="district" class="form-label">District<span class="text-danger">*</span></label>
                <select class="selectpicker w-100" data-style="form-select border" id="district" data-live-search="true" required>
                    <option selected disabled value="">Select Your City</option>
                    <option value="1">All City</option>
                    <option value="2">Salem</option>
                    <option value="3">Dharmapuri</option>
                </select>
                <div class="invalid-feedback">Select your city</div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Mobile No<span class="text-danger">*</span></label>
                <div class="position-relative">
                    <input type="tel" class="form-control pl-50" id="phone" placeholder="Enter Your what's up no" required>
                    <span class="phone-code">+91</span>
                </div>
                <div class="invalid-feedback">Please enter your mobile no </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="adress" placeholder="Enter Your business Address">
                <div class="invalid-feedback">Please enter your Sub Title </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" placeholder="Enter Your business photo">
                <div class="invalid-feedback">Please enter your Sub Title </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Short Discription </label>
                <input type="text" class="form-control" id="name" placeholder="Enter Your Short Discription">
                <div class="invalid-feedback">Please enter your Short Discription </div>
            </div>
            <div class="col-12">
                <label for="discription" class="form-label"> Discription</label>
                <div class="summernote"></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary px-4" value="Save">
      </div>
      </form>
    </div>
  </div>
</div>
