@include('layouts.header')
    {{-- @include('layouts.navbar') --}}
    <div class="comming-soon position-relative min-vh-100 py-4">
        <div class="container">
            <div class="row text-center justify-content-center mb-4">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="mt-5">
                        <img src="/images/logos/small.png" class="img-fluid" alt="Dr Aroh's Logo">
                    </div>
                    <h1 class="text-white">Coming Soon</h1>
                    <p class="text-green">Our website is currently under Construction. We Should be done shortly. Thank you for your patience.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="row timers">
                        <div class="col-6 col-lg-3 mb-4">
                            <div class="bg-red time-block text-white font-weight-bold p-4 rounded">
                                <div class="days p-3">Days</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4">
                            <div class="bg-green time-block text-white font-weight-bold p-4 rounded">
                                <div class="hours p-3">Hours</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4">
                            <div class="bg-darkly time-block text-white font-weight-bold p-4 rounded">
                                <div class="minutes p-3">Minutes</div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4">
                            <div class="bg-skyblue time-block text-white font-weight-bold p-4 rounded">
                                <div class="seconds p-3">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('layouts.bottom') --}}
@include('layouts.footer')