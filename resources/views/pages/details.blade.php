@extends('layout.master')

@section('content')
<div class="container py-4">
    <div class="row align-items-center mb-3">
        <div class="col">
            <h2 class="font-22 fw-semibold mb-0">Service Detrails</h2>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary d-flex align-items-center"><span class="material-icons me-1 font-22">share</span>Share</button>
        </div>
    </div>
    <div class="card p-3 mb-3">
        <div class="row g-3">
            <div class="col-md-auto">
                <img src="{{ env('APP_URL') . '/tamilanservices/storage/' . $pageData['info']->photo }}" alt="serive" width="150" height="150" class="W-100 object-">
            </div>
            <div class="col-md">
                <a href="/details" class="font-22 comp-name">{{ $pageData['info']->business_name }}</a>
                <div class="d-flex my-2">
                    <div class="ratings me-2 fw-bold">
                        5 <span class="material-icons ms-1 font-12">star</span>
                    </div>
                    <span class="text-primary">127 Ratings</span>
                </div>
                <p class="text-muted mb-2 d-flex text-capitalize fw-semibold">
                    <span class="material-icons me-2 text-warning">menu_book</span> {{ $pageData['info']->shortd_discription }}
                </p>
                <address class="m-0 d-flex align-items-center text-capitalize">
                    <span class="material-icons me-1 text-danger">location_on</span>{{ $pageData['info']->address }}
                </address>

            </div>
            <div class="col-md-auto">
                <div class="d-flex flex-column justify-content-center gap-2 h-100">
                    <div><a href="tel:+91{{ $pageData['info']->phone }}" class="btn btn-outline-secondary contact"> <img src="/images/telephone.png" alt="serive" width="25" height="25" class=""></a></div>
                    <div><a href="https://wa.me/+91{{ $pageData['info']->phone }}" class="btn btn-outline-secondary contact"><img src="/images/whatsup.png" alt="serive" width="30" height="30" class=""></a></div>
                    <div><a href="#" class="btn btn-outline-secondary contact"><img src="/images/rating.png" alt="serive" width="30" height="30" class=""></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card p-3 mb-3">

    </div>
    <h5>Reviews & Ratings</h5>
    <div class="card p-3">
        <div class="d-flex mb-3">
            <img src="/images/agriculture.png" alt="Agriculture" width="50" height="50" class="me-3 rounded-circle">
            <div class="">
                <span class="font-18">Sanjeev</span>
                <div class="d-flex text-warning">
                    <span class="material-icons">star</span>
                    <span class="material-icons">star</span>
                    <span class="material-icons">star</span>
                    <span class="material-icons">star_half</span>
                    <span class="material-icons">star_border</span>
                    <span class="ms-2 text-dark">(3.5)</span>
                </div>
            </div>
        </div>
        <p class="m-0">I recently had the pleasure of using tamilan services, and I am thoroughly impressed with the experience. From start to finish, the process was seamless and exceeded my expectations.
        Firstly, the customer service was outstanding. The team was responsive, friendly, and went above and beyond to address my needs. They were patient in answering all my questions and provided detailed information that helped me make informed decisions.</p>
    </div>
</div>
@endsection
