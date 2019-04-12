@extends('layouts.lead')

@section('title')

Fasthousing-Home
@endsection
@section('content')


<!-- Navbar and Title section-->
<section class="header-section" id="title">
        <div class="container-fluid">
            <!-- Navbar -->
            @include('layouts.nav')
            <!-- data-aos="flip-left" data-aos-offset="200"
     data-aos-delay="50" data-aos-duration="1000" data-aos-mirror="true" data-aos-once="false"  -->
            <!-- Title -->
            <div class="jumbotron text-center bg-transparent" id="jumbo">
                <h1 class="hero-heading">Find and Rent your next Property</h1>
                <p>It's just a Search Away!</p>
                <!--              Search Form-->
                <div class="container">
                    <form method="POST" action="#" class="form-inline ">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12" id="padd">
                                

                                    <select class="custom-select align-items-center border-radius-left" id="inlineFormCustomSelect">
                                        <option selected disabled="disabled">Type</option>
                                        <option value="1">Flat/Rooms</option>
                                        <option value="2">House</option>
                                    </select>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12" id="padd1">
                                <label class="sr-only" for="inlineFormInputGroupUsername2">Location</label>
                            
                                    <input type="text" class="form-control no-border-radius no-border-right no-border-left no-border-bottom" id="inlineFormInputGroupUsername2" placeholder="Location e.g city" style="font-size: 0.84rem;">
                            
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12" id="padd2">
                                
                                    <select class="custom-select align-items-center no-border-left" id="inlineFormCustomSelect">
                                        <option selected disabled="disabled">Duration</option>
                                        <option value="1">Long Term</option>
                                        <option value="2">Short Term</option>
                                    </select>
                                
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12" id="padd3">
                                
                                <button type="submit" id="hero-btn" class="media-no-border-radius-left bg-orange btn btn-primary"><i class="fa fa-search"></i>Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>    


            </div>
            



        </div>
        </div>
    </section>

    <!--    Properties Section-->
    <section class="mobile-property-margin" id="rentProperties">
        <div class="container properties-body">
            <div class="container-fluid">
                <div class="row">
                    <!--   properties Main Header-->
                    <div class="col-md-12">
                        <h2 class="properties-h2">Featured Houses</h2>
                    </div>

                    <!-- Properties-->
                    <div class="container">

                        <!--    Long term Properties-->
                        <!--     Long-Term Properties Header-->
                        <div class="col-md-12 mt-3" id="longTermProperties">
                            <h3 class="orange-text text-center h3block-size mb-2">Long Term</h3>
                        </div>

                        <!-- Long term properties cards-->
                        <div class="row" id="long-row">

                            <!--     Long term properties Card 1-->
                            <div class="col-sm-6 col-md-6 col-lg-3" id="term">
                                <div class="card mb-2">

                                    <!--Card Header Image-->
                                    <img class="card-img-top" src="img/faster.jpg">
                                    <!--Product Heading-->
                                    <h5 class="card-title mb-1 pt-1 pr-2 pl-2">4 Bedroom House Bungalow Apartment.</h5>
                                    <!--    Card Body-->
                                    <div class="card-body pt-1 pl-3 pr-3">

                                        <!--   Location-->
                                        <p class="card-text mb-1">Portharcourt</p>
                                        <!--   Price-->
                                        <h6 class="price-tag"><span>&#8358;</span>25,000</h6>
                                        <!--   Product Features-->
                                        <p class="card-text font-small">
                                            <span class="mr-1 pr-1"><i class="fa fa-home"></i>4 rooms</span>
                                            <span class="mr-1 pr-1"><i class="fa fa-bath"></i>4 baths</span>
                                            <span class="mr-1"><i class="fa fa-bath"></i>5 toilets</span>
                                        </p>
                                        <!-- Product Card CTA-->
                                        <a href="#" class="card-link btn btn-sm btn-block btn-warning text-white">
                                            <i class="fa fa-home mr-1"></i>View Details
                                        </a>

                                    </div>

                                </div>
                            </div>


                            <!--    Long term properties Card 2-->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="card mb-2"id="long-term">

                                    <!--Card Header Image-->
                                    <img class="card-img-top" src="img/faster.jpg">
                                    <!--Product Heading-->
                                    <h5 class="card-title mb-1 pt-1 pr-2 pl-2">4 Bedroom House Bungalow Apartment.</h5>
                                    <!--    Card Body-->
                                    <div class="card-body pt-1 pl-3 pr-3">

                                        <!--   Location-->
                                        <p class="card-text mb-1">Portharcourt</p>
                                        <!--   Price-->
                                        <h6 class="price-tag"><span>&#8358;</span>25,000</h6>
                                        <!--   Product Features-->
                                        <p class="card-text font-small">
                                            <span class="mr-1 pr-1"><i class="fa fa-home"></i>4 rooms</span>
                                            <span class="mr-1 pr-1"><i class="fa fa-bath"></i>4 baths</span>
                                            <span class="mr-1"><i class="fa fa-bath"></i>5 toilets</span>
                                        </p>
                                        <!-- Product Card CTA-->
                                        <a href="#" class="card-link btn btn-sm btn-block btn-warning text-white">
                                            <i class="fa fa-home mr-1"></i>View Details
                                        </a>

                                    </div>

                                </div>
                            </div>



                            <!--   Long term properties Card 3-->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="card mb-2">

                                    <!--Card Header Image-->
                                    <img class="card-img-top" src="img/faster.jpg">
                                    <!--Product Heading-->
                                    <h5 class="card-title mb-1 pt-1 pr-2 pl-2">4 Bedroom House Bungalow Apartment.</h5>
                                    <!--    Card Body-->
                                    <div class="card-body pt-1 pl-3 pr-3">

                                        <!--   Location-->
                                        <p class="card-text mb-1">Portharcourt</p>
                                        <!--   Price-->
                                        <h6 class="price-tag"><span>&#8358;</span>25,000</h6>
                                        <!--   Product Features-->
                                        <p class="card-text font-small">
                                            <span class="mr-1 pr-1"><i class="fa fa-home"></i>4 rooms</span>
                                            <span class="mr-1 pr-1"><i class="fa fa-bath"></i>4 baths</span>
                                            <span class="mr-1"><i class="fa fa-bath"></i>5 toilets</span>
                                        </p>
                                        <!-- Product Card CTA-->
                                        <a href="#" class="card-link btn btn-sm btn-block btn-warning text-white">
                                            <i class="fa fa-home  mr-1"></i>View Details
                                        </a>

                                    </div>

                                </div>
                            </div>



                            <!--                        Long term properties Card 4-->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="card mb-2">

                                    <!--Card Header Image-->
                                    <img class="card-img-top" src="img/faster.jpg">
                                    <!--Product Heading-->
                                    <h5 class="card-title mb-1 pt-1 pr-2 pl-2">4 Bedroom House Bungalow Apartment.</h5>
                                    <!--    Card Body-->
                                    <div class="card-body pt-1 pl-3 pr-3">

                                        <!--   Location-->
                                        <p class="card-text mb-1">Portharcourt</p>
                                        <!--   Price-->
                                        <h6 class="price-tag"><span>&#8358;</span>25,000</h6>
                                        <!--   Product Features-->
                                        <p class="card-text font-small">
                                            <span class="mr-1 pr-1"><i class="fa fa-home"></i>4 rooms</span>
                                            <span class="mr-1 pr-1"><i class="fa fa-bath"></i>4 baths</span>
                                            <span class="mr-1"><i class="fa fa-bath"></i>5 toilets</span>
                                        </p>
                                        <!-- Product Card CTA-->
                                        <a href="#" class="card-link btn btn-sm btn-block btn-warning text-white">
                                            <i class="fa fa-home mr-1"></i>View Details
                                        </a>

                                    </div>

                                </div>
                            </div>




                        </div>

                        <!-- View More Long-term Link-->
                        <div class="mb-3" style="float:right;" id="more">
                            <a href="#">
                                <button type="button" class="btn btn-sm btn-outline-warning">View more Long Term Properties</button>
                            </a>
                        </div>




                        <!--   Short term Properties-->
                        <!--Short-Term Properties Header-->
                        <div class="col-md-12 mt-5" id="shortTermProperties">
                            <h3 class="orange-text text-center h3block-size mb-3">Short Term</h3>
                        </div>

                        <!-- Short Term properties cards-->
                        <div class="row" id="short-row">



                            <!-- Short term properties Card 1-->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="card mb-2">

                                    <!--Card Header Image-->
                                    <img class="card-img-top" src="img/faster.jpg">
                                    <!--Product Heading-->
                                    <h5 class="card-title mb-1 pt-1 pr-2 pl-2">4 Bedroom House Bungalow Apartment.</h5>
                                    <!--    Card Body-->
                                    <div class="card-body pt-1 pl-3 pr-3">

                                        <!--   Location-->
                                        <p class="card-text mb-1">Portharcourt</p>
                                        <!--   Price-->
                                        <h6 class="price-tag"><span>&#8358;</span>25,000</h6>
                                        <!--   Product Features-->
                                        <p class="card-text font-small">
                                            <span class="mr-1 pr-1"><i class="fa fa-home"></i>4 rooms</span>
                                            <span class="mr-1 pr-1"><i class="fa fa-bath"></i>4 baths</span>
                                            <span class="mr-1"><i class="fa fa-bath"></i>5 toilets</span>
                                        </p>
                                        <!-- Product Card CTA-->
                                        <a href="#" class="card-link btn btn-sm btn-block btn-warning text-white">
                                            <i class="fa fa-home mr-1"></i>View Details
                                        </a>

                                    </div>

                                </div>
                            </div>


                            <!-- Long term properties Card 2-->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="card mb-2">

                                    <!--Card Header Image-->
                                    <img class="card-img-top" src="img/faster.jpg">
                                    <!--Product Heading-->
                                    <h5 class="card-title mb-1 pt-1 pr-2 pl-2">4 Bedroom House Bungalow Apartment.</h5>
                                    <!--    Card Body-->
                                    <div class="card-body pt-1 pl-3 pr-3">

                                        <!--   Location-->
                                        <p class="card-text mb-1">Portharcourt</p>
                                        <!--   Price-->
                                        <h6 class="price-tag"><span>&#8358;</span>25,000</h6>
                                        <!--   Product Features-->
                                        <p class="card-text font-small">
                                            <span class="mr-1 pr-1"><i class="fa fa-home"></i>4 rooms</span>
                                            <span class="mr-1 pr-1"><i class="fa fa-bath"></i>4 baths</span>
                                            <span class="mr-1"><i class="fa fa-bath"></i>5 toilets</span>
                                        </p>
                                        <!-- Product Card CTA-->
                                        <a href="#" class="card-link btn btn-sm btn-block btn-warning text-white">
                                            <i class="fa fa-home mr-1"></i>View Details
                                        </a>

                                    </div>

                                </div>
                            </div>



                            <!-- Long term properties Card 3-->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="card mb-2">

                                    <!--Card Header Image-->
                                    <img class="card-img-top" src="img/faster.jpg">
                                    <!--Product Heading-->
                                    <h5 class="card-title mb-1 pt-1 pr-2 pl-2">4 Bedroom House Bungalow Apartment.</h5>
                                    <!--    Card Body-->
                                    <div class="card-body pt-1 pl-3 pr-3">

                                        <!--   Location-->
                                        <p class="card-text mb-1">Portharcourt</p>
                                        <!--   Price-->
                                        <h6 class="price-tag"><span>&#8358;</span>25,000</h6>
                                        <!--   Product Features-->
                                        <p class="card-text font-small">
                                            <span class="mr-1 pr-1"><i class="fa fa-home"></i>4 rooms</span>
                                            <span class="mr-1 pr-1"><i class="fa fa-bath"></i>4 baths</span>
                                            <span class="mr-1"><i class="fa fa-bath"></i>5 toilets</span>
                                        </p>
                                        <!-- Product Card CTA-->
                                        <a href="#" class="card-link btn btn-sm btn-block btn-warning text-white">
                                            <i class="fa fa-home mr-1"></i>View Details
                                        </a>

                                    </div>

                                </div>
                            </div>



                            <!--Long term properties Card 4-->
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="card mb-2">

                                    <!--Card Header Image-->
                                    <img class="card-img-top" src="img/faster.jpg">
                                    <!--Product Heading-->
                                    <h5 class="card-title mb-1 pt-1 pr-2 pl-2">4 Bedroom House Bungalow Apartment.</h5>
                                    <!--    Card Body-->
                                    <div class="card-body pt-1 pl-3 pr-3">

                                        <!--   Location-->
                                        <p class="card-text mb-1">Portharcourt</p>
                                        <!--   Price-->
                                        <h6 class="price-tag"><span>&#8358;</span>25,000</h6>
                                        <!--   Product Features-->
                                        <p class="card-text font-small">
                                            <span class="mr-1 pr-1"><i class="fa fa-home"></i>4 rooms</span>
                                            <span class="mr-1 pr-1"><i class="fa fa-bath"></i>4 baths</span>
                                            <span class="mr-1"><i class="fa fa-bath"></i>5 toilets</span>
                                        </p>
                                        <!-- Product Card CTA-->
                                        <a href="#" class="card-link btn btn-sm btn-block btn-warning text-white">
                                            <i class="fa fa-home mr-1"></i>View Details
                                        </a>

                                    </div>

                                </div>
                            </div>




                        </div>


                        <!-- View More Short-term Link-->
                        <div class="mb-3" style="float:right;" id="more">
                            <a>
                                <button type="button" class="btn btn-sm btn-outline-warning">View more Short Term Properties</button>
                            </a>
                        </div>

                    </div>

                    <!-- properties Footer-->
                    <div class="col-md-12 mt-2 mb-1">
                        <a href="#">
                            <button type="button" class="btn btn-md btn-outline-warning more-all-footer">View more Houses</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="gradient-colored-section text-center" id="cta">
        <div class="container-fluid container-pad">
            <h4 class="cta-heading mt-4">Register as an Agent and List your Property Today.</h4>
            <a href="/register" class="btn-floating mx-1">
                <button class="agent-cta-button btn btn-lg btn-light" type="button">
                    <i class="fa fa-edit"></i> Register</button>
            </a>

            <!-- <button class="download-button btn btn-lg btn-dark" type="button"><i class="fa fa-play"></i> Download</button>-->
        </div>
    </section>










@endsection