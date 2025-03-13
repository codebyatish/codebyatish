@extends('front/layout');
@section('page_title','Home Page  ')
@section('container')
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <?php foreach ($home_banners as $home_banner) { ?>
                <!-- single slide item -->
                <li>
                    <div class="seq-model">
                        <img data-seq src="{{asset('storage/media/home_banners/'.$home_banner->home_banner_image)}}" alt="{{$home_banner->home_banner_name}}" />
                    </div>
                    <div class="seq-title">
                        <span data-seq>Save Up to 75% Off</span>
                        <h2 data-seq>{{$home_banner->home_banner_name}}</h2>
                        <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                        <a data-seq href="{{$home_banner->home_banner_button_link}}" class="aa-shop-now-btn aa-secondary-btn">{{$home_banner->home_banner_button_text}}</a>
                    </div>
                </li>
            <?php }  ?>
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo right -->
                <div class="col-md-12 no-padding">
                    <div class="aa-promo-right">
                        <?php foreach ($home_categories as $list) { ?>
                            <div class="aa-single-promo-right">
                                <div class="aa-promo-banner">
                                <img src="{{asset('storage/media/category/'.$list->category_image)}}" alt="img">
                                <div class="aa-prom-content">
                                    <h4><a href="{{url('category/'.$list->id)}}">{{$list->category_name}}</a></h4>
                                </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <?php $loop_count = 1; foreach ($home_categories as $list) { ?>
                        <li class="<?php echo ($loop_count == 1) ? 'in active' : '' ; ?>"><a href="#cat{{$list->id}}" data-toggle="tab">{{$list->category_name}}</a></li>
                    <?php $loop_count++;} ?>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <?php
                        $loop_count = 1;
                        foreach ($home_categories as $arrCategory) {?>
                        <!-- Start men product category -->
                        <div class="tab-pane fade <?php echo ($loop_count == 1) ? 'in active' : '' ; ?>" id="cat{{$arrCategory->id}}">
                        <ul class="aa-product-catg">
                            <?php
                                if (isset($home_products[$arrCategory->id][0])) {
                                    foreach ($home_products[$arrCategory->id] as $arrProduct) { ?>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="{{url('product/'.$arrProduct->product_slug)}}"><img src="{{asset('storage/media/'.$arrProduct->product_image)}}" alt="{{$arrProduct->product_image}}"></a>
                                                <a class="aa-add-card-btn" href="javascript:void(0)" onclick="homeAddToCart('{{$arrProduct->id}}','{{$home_product_attributes[$arrProduct->id][0]->size}}','{{$home_product_attributes[$arrProduct->id][0]->color_name}}')"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                <figcaption>
                                                <h4 class="aa-product-title"><a href="#">{{$arrProduct->product_name}}</a></h4>
                                                <span class="aa-product-price">Rs. {{$home_product_attributes[$arrProduct->id][0]->product_attribute_price}}</span><span class="aa-product-price"><del>Rs. {{$home_product_attributes[$arrProduct->id][0]->product_attribute_mrp}}</del></span>
                                                </figcaption>
                                            </figure>
                                            <!-- product badge -->
                                            {{-- <span class="aa-badge aa-sale" href="#">SALE!</span> --}}
                                        </li>
                            <?php   }
                                }else{ ?>
                                        <li><figure>No Product Available</li></figure>
                             <?php }?>
                        </ul>
                        </div>
                        <!-- / men product category -->
                    <?php $loop_count++; } ?>
                  </div>
                  <!-- quick view modal -->
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-slider">
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="{{asset('front_assets/img/view-slider/large/polo-shirt-1.png')}}">
                                              <img src="{{asset('front_assets/img/view-slider/medium/polo-shirt-1.png')}}" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="{{asset('front_assets/img/view-slider/large/polo-shirt-1.png')}}"
                                         data-big-image="{{asset('front_assets/img/view-slider/medium/polo-shirt-1.png')}}">
                                          <img src="{{asset('front_assets/img/view-slider/thumbnail/polo-shirt-1.png')}}">
                                      </a>
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="{{asset('front_assets/img/view-slider/large/polo-shirt-3.png')}}"
                                         data-big-image="{{asset('front_assets/img/view-slider/medium/polo-shirt-3.png')}}">
                                          <img src="{{asset('front_assets/img/view-slider/thumbnail/polo-shirt-3.png')}}">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="{{asset('front_assets/img/view-slider/large/polo-shirt-4.png')}}"
                                         data-big-image="{{asset('front_assets/img/view-slider/medium/polo-shirt-4.png')}}">
                                          <img src="{{asset('front_assets/img/view-slider/thumbnail/polo-shirt-4.png')}}">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>T-Shirt</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">S</a>
                                  <a href="#">M</a>
                                  <a href="#">L</a>
                                  <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo T-Shirt</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-banner-area">
            <a href="#"><img src="{{asset('front_assets/img/fashion-banner.jpg')}}" alt="fashion banner img"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#featured" data-toggle="tab">Featured</a></li>
                <li><a href="#trending" data-toggle="tab">Trending</a></li>
                <li><a href="#discounted" data-toggle="tab">Discounted</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men featured category -->
                <div class="tab-pane fade in active" id="featured">
                  <ul class="aa-product-catg aa-featured-slider">
                    <?php
                        if (isset($home_featured_products)) {
                            foreach ($home_featured_products as $arrFeaturesProduct) { ?>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="{{url('product/'.$arrFeaturesProduct->product_slug)}}"><img src="{{asset('storage/media/'.$arrFeaturesProduct->product_image)}}" alt="{{$arrFeaturesProduct->product_image}}"></a>
                                        <a class="aa-add-card-btn" href="javascript:void(0)" onclick="homeAddToCart('{{$arrFeaturesProduct->id}}','{{$home_featured_product_attributes[$arrFeaturesProduct->id][0]->size}}','{{$home_featured_product_attributes[$arrFeaturesProduct->id][0]->color_name}}')"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                        <h4 class="aa-product-title"><a href="#">{{$arrFeaturesProduct->product_name}}</a></h4>
                                        <span class="aa-product-price">Rs. {{$home_featured_product_attributes[$arrFeaturesProduct->id][0]->product_attribute_price}}</span><span class="aa-product-price"><del>Rs. {{$home_featured_product_attributes[$arrFeaturesProduct->id][0]->product_attribute_mrp}}</del></span>
                                        </figcaption>
                                    </figure>
                                    <!-- product badge -->
                                    {{-- <span class="aa-badge aa-sale" href="#">SALE!</span> --}}
                                </li>
                    <?php   }
                        }else{ ?>
                                <li><figure>No Product Available</li></figure>
                    <?php }?>
                  </ul>
                  {{-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> --}}
                </div>
                <!-- / popular product category -->

                <!-- start trending product category -->
                <div class="tab-pane fade" id="trending">
                 <ul class="aa-product-catg aa-trending-slider">
                    <!-- start single product item -->
                    <?php
                        if (isset($home_trending_products)) {
                            foreach ($home_trending_products as $arrTrendingProduct) { ?>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="{{asset('storage/media/'.$arrTrendingProduct->product_image)}}" alt="{{$arrTrendingProduct->product_image}}"></a>
                                        <a class="aa-add-card-btn" href="javascript:void(0)" onclick="homeAddToCart('{{$arrTrendingProduct->id}}','{{$home_trending_product_attributes[$arrTrendingProduct->id][0]->size}}','{{$home_trending_product_attributes[$arrTrendingProduct->id][0]->color_name}}')"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                        <h4 class="aa-product-title"><a href="#">{{$arrTrendingProduct->product_name}}</a></h4>
                                        <span class="aa-product-price">Rs. {{$home_trending_product_attributes[$arrTrendingProduct->id][0]->product_attribute_price}}</span><span class="aa-product-price"><del>Rs. {{$home_trending_product_attributes[$arrTrendingProduct->id][0]->product_attribute_mrp}}</del></span>
                                        </figcaption>
                                    </figure>
                                    <!-- product badge -->
                                    {{-- <span class="aa-badge aa-sale" href="#">SALE!</span> --}}
                                </li>
                    <?php   }
                        }else{ ?>
                                <li><figure>No Product Available</li></figure>
                    <?php }?>
                  </ul>
                  {{-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> --}}
                </div>
                <!-- / featured product category -->

                <!-- start discounted product category -->
                <div class="tab-pane fade" id="discounted">
                  <ul class="aa-product-catg aa-discounted-slider">
                    <!-- start single product item -->
                    <?php
                        if (isset($home_discounted_products)) {
                            foreach ($home_discounted_products as $arrDiscountedProduct) { ?>
                                <!-- start single product item -->
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img src="{{asset('storage/media/'.$arrDiscountedProduct->product_image)}}" alt="{{$arrDiscountedProduct->product_image}}"></a>
                                        <a class="aa-add-card-btn" href="javascript:void(0)" onclick="homeAddToCart('{{$arrDiscountedProduct->id}}','{{$home_discounted_product_attributes[$arrDiscountedProduct->id][0]->size}}','{{$home_discounted_product_attributes[$arrDiscountedProduct->id][0]->color_name}}')"><span class="fa fa-shopping-cart"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                        <figcaption>
                                        <h4 class="aa-product-title"><a href="#">{{$arrDiscountedProduct->product_name}}</a></h4>
                                        <span class="aa-product-price">Rs. {{$home_discounted_product_attributes[$arrDiscountedProduct->id][0]->product_attribute_price}}</span><span class="aa-product-price"><del>Rs. {{$home_discounted_product_attributes[$arrDiscountedProduct->id][0]->product_attribute_mrp}}</del></span>
                                        </figcaption>
                                    </figure>
                                    <!-- product badge -->
                                    {{-- <span class="aa-badge aa-sale" href="#">SALE!</span> --}}
                                </li>
                    <?php   }
                        }else{ ?>
                                <li><figure>No Product Available</li></figure>
                    <?php }?>
                  </ul>
                   {{-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> --}}
                </div>
                <!-- / latest product category -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->



  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
                <?php  foreach ($home_brands as $home_brand) { ?>
                    <li><a href="#"><img src="{{asset('storage/media/brands/'.$home_brand->brand_image)}}" alt="{{$home_brand->brand_name}}"></a></li>
                <?php }?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->
  <input type="hidden" id="product_quantity" name="product_quantity" value="1">
  <form id="addToCart">
    <input type="hidden" id="size_id" name="size_id">
    <input type="hidden" id="color_id" name="color_id">
    <input type="hidden" id="qty" name="qty" value="1">
    <input type="hidden" id="product_id" name="product_id">
    @csrf
 </form>

@endsection
