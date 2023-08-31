<section class="w3l-bottom-grids-6 py-5" id="services">
    <div class="container py-lg-5 py-md-4 py-2">
        <h5 class="title-subhny mb-2">My Services</h5>
        <h3 class="title-w3l"><span>What I </span>Do</h3>
        <div class="grids-area-hny main-cont-wthree-fea row pt-3 mt-5">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <div class="area-icon {{ $service -> icon_color }}">
                            <span class="fa {{ $service -> icon }}"></span>
                        </div>
                        <h4><a href="#feature" class="title-head">{{ $service->title }}</a></h4>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
