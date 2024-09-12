@extends('layout.master')

@section('content')
<div class="container py-4">
    <h1 class="font-24 mb-3">Add Your Business</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('business-info') }}" method="post">
                @csrf
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
                    <div class="col-12 mb-3">
                        <label for="discription" class="form-label"> Discription</label>
                        <div class="summernote"></div>
                    </div>
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary px-4 ms-2" value="Save">
                    </div>
                </div>
            </form>  
        </div>
    </div>
</div> 
@endsection
