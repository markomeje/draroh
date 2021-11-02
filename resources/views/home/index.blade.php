@include('layouts.header')
@include('home.partials.book')
    <div class="position-relative">
        <div class="home-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 mb-4">
                        <div class="border-bottom-gray mb-3 pb-3">
                            <div class="logo-wrapper mb-4">
                                <img src="/images/logos/large.png" class="img-fluid object-cover">
                            </div>
                            <h1 class="text-darkly font-weight-bolder"><span class="font-weight-lighter">Welcome</span> To My <span class="text-green">Profile</span></h1>
                            <div class="text-muted m-0">I'm a quintessential speaker, public intellectual, political scientist, social activist and politician, who has always had a passion for a better society.</div>
                        </div>
                        <div class="">
                            <a href="javascript:;" data-toggle="modal" data-target="#download-book" class="btn btn-lg bg-green text-white rounded px-3">
                                <div class="d-flex align-items-center">
                                    <div class="bg-white mr-2 text-green rounded-circle" style="width: 30px; height: 30px; line-height: 30px;">
                                        <i class="icofont-download"></i>
                                    </div>
                                    <div class="">Download My Free Book</div>
                                </div> 
                            </a>
                        </div>   
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="">
                            <img src="/images/banners/draroh.png" class="img-fluid" alt="Dr Aroh Chukwuemeka">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="book-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mb-4">
                    <h1 class="text-darkly">What Now? 60 Past 1960</h1>
                    <div class="text-muted mb-4">An inspired sociopolitical analysis of the form, content and confusion of Nigeria. A decade of interest and dedication to study Nigeria, how we got here, where we are and how to move forward.</div>
                    <div class="text-muted mb-4">This book shows that if we look at our history blamelessly not to find faults but force, update the Nigerian software which is about to crash, tackle our monsters which frighten us and sustain the Nigerian dream, there will be a Nigeria that can be great.</div>
                    <a href="javascript:;" data-toggle="modal" data-target="#download-book" class="btn btn-lg bg-green text-white rounded px-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-white mr-2 text-green rounded-circle" style="width: 30px; height: 30px; line-height: 30px;">
                                <i class="icofont-download"></i>
                            </div>
                            <div class="">Download My Free Book</div>
                        </div> 
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <div>
                        <img src="/images/banners/whatnow.png" class="img-fluid w-100 shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5 bg-darkly">
        <div class="container">
            <div class="text-white m-0">&copy Copyright Dr Aroh Chukwuemeka {{ date('Y') === '2021' ? date('Y') : '2021 - '. date('Y') }}</div>
        </div>
    </section>
@include('layouts.footer')