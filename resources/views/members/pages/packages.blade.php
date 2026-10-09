@extends('members.layouts.app')

@section('content')
    <div class="mt-5">
        <div class="banner banner-color mt-0 row align-items-center">
            <div class="col-xl-1 col-lg-2 col-md-12 p-0 text-center">
                <i class="fa fa-user-circle text-primary" style="font-size: 42px;" aria-hidden="true"></i>
            </div>
            <div class="page-content col-xl-6 col-lg-5 col-md-12">
                <h3 class="mb-1">Welcome back, <span class="font-weight-bold text-primary">Devid Antoni</span></h3>
                <p class="mb-0 fs-16">Choose a package that suits your goals.</p>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 mt-3 mt-lg-0">
                <div class="card border-0 shadow-sm mb-0">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center mb-3">
                            <span class="avatar avatar-md bg-primary text-white brround mr-3 d-flex align-items-center justify-content-center">
                                <i class="fa fa-ticket" aria-hidden="true"></i>
                            </span>
                            <div>
                                <h5 class="mb-1">Buy with E-PIN</h5>
                                <small class="text-muted">Enter your E-PIN to continue</small>
                            </div>
                        </div>
                        <label for="epin" class="sr-only">E-PIN</label>
                        <div class="input-group">
                            <input id="epin" name="epin" type="text" class="form-control" placeholder="Enter E-PIN" autocomplete="off">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-lock mr-1" aria-hidden="true"></i> Continue
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $packages = [
            ['name' => 'Level5VTCT', 'price' => '6000', 'points' => '3500 RP/BP', 'theme' => 'primary', 'button' => 'btn-primary'],
            ['name' => 'Level7VTCT', 'price' => '7000', 'points' => '3500 RP/BP', 'theme' => 'secondary', 'button' => 'btn-warning'],
            ['name' => 'E2TFranchise', 'price' => '25000', 'points' => '20000 RP/BP', 'theme' => 'success', 'button' => 'btn-success'],
            ['name' => 'E2TSubFranchise', 'price' => '5000', 'points' => '4000 RP/BP', 'theme' => 'info', 'button' => 'btn-danger'],
        ];
    @endphp

    <div class="row mt-5">
        @foreach ($packages as $package)
            <div class="col-sm-6 col-xl-3 {{ $package['theme'] }}">
                <div class="princing-item mb-4">
                    <div class="pricing-divider text-center">
                        <h3 class="text-light">{{ $package['name'] }}</h3>
                        <h4 class="my-0 display-2 text-light font-weight-normal mb-3">
                            <span class="h3">$</span>{{ $package['price'] }}
                        </h4>
                        <svg class="pricing-divider-img" enable-background="new 0 0 300 100" height="100px" preserveAspectRatio="none" viewBox="0 0 300 100" width="300px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                            <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                            <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                        </svg>
                    </div>
                    <div class="br-br-0 br-bl-0 bg-white mt-0 shadow text-center">
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><b>{{ $package['name'] }}</b></li>
                            <li class="list-group-item border-bottom-0"><b>{{ $package['points'] }}</b></li>
                        </ul>
                        <div class="card-footer">
                            <button type="button" class="btn {{ $package['button'] }} btn-block">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection