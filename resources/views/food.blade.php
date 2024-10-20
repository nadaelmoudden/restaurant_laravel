<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>We Leave A Delicious Memory For You</h2>
                    </div>
                    <p>Klassy Cafe is one of the best <a href="https://templatemo.com/tag/restaurant" target="_blank"
                            rel="sponsored">restaurant HTML templates</a> with Bootstrap v4.5.2
                        CSS framework. You can download and feel free to use this website template layout for your
                        restaurant business. You are allowed to use this template for commercial purposes.
                        <br><br>You are NOT allowed to redistribute the template ZIP file on any template donwnload
                        website. Please contact us for more information.
                    </p>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/about-thumb-01.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-02.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/about-thumb-03.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                        <img src="assets/images/about-video-bg.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">


                @foreach ($data as $data)
                    <form action="{{ url('/addcart', $data->id) }}" method="post">
                        @csrf
                        <div class="item">
                            <div class='card'
                                style="background-image: url('/foodimage/{{ $data->image }}'); background-size: cover;">
                                <div class="price">
                                    <h6>{{ $data->price }}$</h6>
                                </div>
                                <div class='info'>
                                    <h1 class='title'>{{ $data->Title }}</h1>
                                    <p class='description'>{{ $data->description }}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                    class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <input type="number" name="quantity" min="0" style="width: 80px; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">

                            <input type="submit" value="Add Cart" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">

                        </div>
                    </form>
                @endforeach





            </div>
        </div>
    </div>
</section>
