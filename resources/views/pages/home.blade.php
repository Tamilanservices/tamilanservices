@extends('layout.master')

@section('content')
<div class="container py-4">
    <!-- ADD's -->
    <div class="card rounded p-3 mb-3 h-150p text-center">
        ADD's
    </div>
    <div class="row align-items-center mb-3">
        <div class="col">
            <h2 class="font-22 fw-semibold mb-0">Services</h2>
        </div>
        <div class="col-auto">
            <select class="selectpicker w-200px font-12" data-style="form-select border bg-white" id="search" data-live-search="true" required title="Select Categories">
                <!-- <option selected disabled value="">Select Categories</option> -->
                <option value="1">Electrical Plumbing</option>
                <option value="2"> Agriculture </option>
                <option value="3"> Academy </option>
                <option value="4"> Repairs & Services </option>
            </select>
        </div>
    </div>
    <div class="card p-4 mb-3">
        <div class="card-content">
            <div class="row row-cols-12 g-3">
                <div class="col text-center">
                    <div class="category">
                        <a href="/listing" class="d-block"><img src="/images/plumber.png" alt="Electrical Plumbing" width="64" height="64"><br/> Electrical Plumbing</a>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="category">
                        <a href="/listing" class="d-block"><img src="/images/agriculture.png" alt="Agriculture" width="64" height="64"><br/> Agriculture </a>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="category">
                        <a href="/listing" class="d-block"><img src="/images/academy.png" alt="Academy" width="64" height="64"><br/> Academy </a>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="category">
                        <a href="/listing" class="d-block"><img src="/images/mechanic.png" alt="Repairs & Services" width="64" height="64"><br/> Repairs & Services </a>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="category">
                        <a href="/listing" class="d-block"><img src="/images/net.png" alt="Wire Netting" width="64" height="64"><br/>Wire Netting </a>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
    <!-- ADD's -->
    <div class="card rounded p-3 mb-3 h-150p text-center">
        ADD's
    </div>
</div>
@endsection




