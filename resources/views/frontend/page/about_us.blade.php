@include('frontend.layouts.head')
<div class="site-blocks-cover inner-page overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
                <h1 class="mb-5">The Company</h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="display-4 text-black mb-5"><strong>SEE OUR SERVICES</strong></h2>
            </div>
            @foreach ($services as $service )
            <div class="col-md-12 col-lg-12 mb-12">
                <div class="post-entry bg-white">
                    <div class="image">
                        <img src={{  asset($service->image_url) }} alt="Image" class="img-fluid">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-black">{{$service->title }}</h2>
                        <h5 class="text-details">{{$service->description }}
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="col-md-6 col-lg-6 mb-6">
                <div class="post-entry bg-white">
                    <div class="image">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="text p-4">
                        <h2 class="h2 text-black">Lorem ipsum dolor sit amet</h2>
                        <h5 class="text-details">Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error
                            perspiciatis odit ullam officia.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias fugiat facilis quasi ratione
                            ducimus ipsam!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error perspiciatis odit
                            ullam officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Alias fugiat facilis quasi ratione ducimus ipsam!
                        </h5>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>
</div>
</div>
@include('frontend.layouts.footer')
