@extends('layout.master')

@section('content')
<div class="container py-4">
    <!-- ADD's -->
    <div class="card p-3 mb-3 h-150p text-center">
        ADD's
    </div>
    <div class="row g-3 mb-3">
        <div class="col-md-9">
            <div class="row align-items-center mb-3">
                <div class="col">
                    <h2 class="font-22 fw-semibold mb-0">Service Listing</h2>
                </div>
                <div class="col-auto">
                    <input type="search" class="form-control" placeholder="Search Service">
                </div>
            </div>
            <div class="card p-3 mb-3">
                <div class="row g-3">
                    <div class="col-md-auto">
                        <img src="/images/company-profile.png" alt="serive" width="150" height="150" class="W-100 object-">
                    </div>
                    <div class="col-md">
                        <a href="/details" class="font-22 comp-name">Tamilan Service</a>
                        <div class="d-flex my-2">
                            <div class="ratings me-2 fw-bold">
                                5 <span class="material-icons ms-1 font-12">star</span>
                            </div>
                            <span class="text-primary">127 Ratings</span>
                        </div>
                        <p class="text-muted mb-2 d-flex text-capitalize fw-semibold">
                            <span class="material-icons me-2 text-warning">menu_book</span> All Services Provided Here
                        </p>
                        <address class="m-0 d-flex align-items-center text-capitalize">
                            <span class="material-icons me-1 text-danger">location_on</span>1/44, near maniyammal kovil, chinnanur, salem-636122.
                        </address>
                    </div>
                    <div class="col-md-auto">
                        <div class="d-flex flex-column justify-content-center gap-2 h-100">
                            <div><a href="tel:+919994979498" class="btn btn-outline-secondary contact"> <img src="/images/telephone.png" alt="serive" width="25" height="25" class=""></a></div>
                            <div><a href="https://wa.me/+919994976498" class="btn btn-outline-secondary contact"><img src="/images/whatsup.png" alt="serive" width="30" height="30" class=""></a></div>
                            <div><a href="#" class="btn btn-outline-secondary contact"><img src="/images/rating.png" alt="serive" width="30" height="30" class=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-3 mb-3">
                <div class="row g-3">
                    <div class="col-md-auto">
                        <img src="/images/company-profile.png" alt="serive" width="150" height="150" class="W-100 object-">
                    </div>
                    <div class="col-md">
                        <a href="/details" class="font-22 comp-name">Tamilan Service</a>
                        <div class="d-flex my-2">
                            <div class="ratings me-2 fw-bold">
                                5 <span class="material-icons ms-1 font-12">star</span>
                            </div>
                            <span class="text-primary">127 Ratings</span>
                        </div>
                        <p class="text-muted mb-2 d-flex text-capitalize fw-semibold">
                            <span class="material-icons me-2 text-warning">menu_book</span> All Services Provided Here
                        </p>
                        <address class="m-0 d-flex align-items-center text-capitalize">
                            <span class="material-icons me-1 text-danger">location_on</span>1/44, near maniyammal kovil, chinnanur, salem-636122.
                        </address>
                    </div>
                    <div class="col-md-auto">
                        <div class="d-flex flex-column justify-content-center gap-2 h-100">
                            <div><a href="tel:+919994979498" class="btn btn-outline-secondary contact"> <img src="/images/telephone.png" alt="serive" width="25" height="25" class=""></a></div>
                            <div><a href="https://wa.me/+919994976498" class="btn btn-outline-secondary contact"><img src="/images/whatsup.png" alt="serive" width="30" height="30" class=""></a></div>
                            <div><a href="#" class="btn btn-outline-secondary contact"><img src="/images/rating.png" alt="serive" width="30" height="30" class=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card p-3">
                <div class="row g-3">
                    <div class="col-md-auto">
                        <img src="/images/company-profile.png" alt="serive" width="150" height="150" class="W-100 object-">
                    </div>
                    <div class="col-md">
                        <a href="/details" class="font-22 comp-name">Tamilan Service</a>
                        <div class="d-flex my-2">
                            <div class="ratings me-2 fw-bold">
                                5 <span class="material-icons ms-1 font-12">star</span>
                            </div>
                            <span class="text-primary">127 Ratings</span>
                        </div>
                        <p class="text-muted mb-2 d-flex text-capitalize fw-semibold">
                            <span class="material-icons me-2 text-warning">menu_book</span> All Services Provided Here
                        </p>
                        <address class="m-0 d-flex align-items-center text-capitalize">
                            <span class="material-icons me-1 text-danger">location_on</span>1/44, near maniyammal kovil, chinnanur, salem-636122.
                        </address>
                    </div>
                    <div class="col-md-auto">
                        <div class="d-flex flex-column justify-content-center gap-2 h-100">
                            <div><a href="tel:+919994979498" class="btn btn-outline-secondary contact"> <img src="/images/telephone.png" alt="serive" width="25" height="25" class=""></a></div>
                            <div><a href="https://wa.me/+919994976498" class="btn btn-outline-secondary contact"><img src="/images/whatsup.png" alt="serive" width="30" height="30" class=""></a></div>
                            <div><a href="#" class="btn btn-outline-secondary contact"><img src="/images/rating.png" alt="serive" width="30" height="30" class=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card h-100 p-3 d-flex align-items-center justify-content-center bg-muted">
                ADDs
            </div>
        </div>
    </div>
    <!-- ADD's -->
    <div class="card rounded p-3 mb-3 h-150p text-center">
        ADD's
    </div>

</div> 
@endsection
