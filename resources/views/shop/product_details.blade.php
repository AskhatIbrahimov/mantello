@extends('layouts.shop', ['page_title'=> 'Product details'])

@section('content')
<br>
<!-- breadcrumbs area start -->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="container-inner">
          <ul>
            <li class="home">
              <a href="/">Home</a>
              <span><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="home">
              <span>Shop Grid</span>
              <span><i class="fa fa-angle-right"></i></span>
            </li>
            <li class="category3"><span>Shop</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumbs area end -->
<!-- product-details Area Start -->
<div class="product-details-area">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="zoomWrapper">
          <div id="img-1" class="zoomWrapper single-zoom">
            <a>
              <img id="zoom1" src="{{asset(preg_replace('/public/', 'storage', $product->getPrimaryImage()))}}" data-zoom-image="{{asset(preg_replace('/public/', 'storage', $product->getPrimaryImage()))}}" alt="big-1">
            </a>
          </div>
          <div class="single-zoom-thumb">
            <ul class="bxslider" id="gallery_01">
              @foreach($product->getGalleryImages() as $image)
              <li>
                <a class="elevatezoom-gallery" data-update="" data-image="{{asset(preg_replace('/public/', 'storage', $image))}}" data-zoom-image="{{asset(preg_replace('/public/', 'storage', $image))}}"><img src="{{asset(preg_replace('/public/', 'storage', $image))}}" alt="zo-th-1" /></a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="product-list-wrapper">
          <div class="single-product">
            <div class="product-content">
              <h2 class="product-name"><a href="#">{{$product->title}}</a></h2>
              <div class="rating-price">  
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star"></i></a>
                  <a href="#"><i class="fa fa-star"></i></a>
                  <a href="#"><i class="fa fa-star"></i></a>
                  <a href="#"><i class="fa fa-star"></i></a>
                  <a href="#"><i class="fa fa-star"></i></a>
                </div>
                <div class="price-boxes">
                  <span class="new-price">{{$product->price}} {{$product->valut->sign}}</span>
                </div>
              </div>
              <div class="product-desc">
                <p>{!!$product->content!!}</p>
              </div>
              <p class="availability in-stock">Availability: <span>{{$product->quantity ? 'In stock' : 'Not available'}}</span></p>
              <div class="actions-e">
                <div class="action-buttons-single">
                  <div class="inputx-content">
                    <label for="qty">Quantity:</label>
                    <input type="text" name="qty" id="qty_{{$product->id}}" maxlength="12" value="1" title="Qty" class="input-text qty">
                  </div>
                  <div class="add-to-cart">
                    <a onclick="window.addToCart({{$product->id}}, $('#qty_'+{{$product->id}}).val());">Add to cart</a>
                  </div>
                  <div class="add-to-links">
                    <div class="add-to-wishlist">
                      <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                    </div>                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="single-product-tab">
          <!-- Nav tabs -->
        <ul class="details-tab">
          <li class="active"><a href="#home" data-toggle="tab">Description</a></li>
          {{-- <li class=""><a href="#messages" data-toggle="tab"> Review (1)</a></li> --}}
        </ul>
          <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="home">
            <div class="product-tab-content">
              <p>{!!$product->description!!}</p> 
            </div>
          </div>
          {{-- <div role="tabpanel" class="tab-pane" id="messages">
            <div class="single-post-comments col-md-6 col-md-offset-3">
              <div class="comments-area">
                <h3 class="comment-reply-title">1 REVIEW FOR TURPIS VELIT ALIQUET</h3>
                <div class="comments-list">
                  <ul>
                    <li>
                      <div class="comments-details">
                        <div class="comments-list-img">
                          <img src="{{asset('plugins/lavoro/img/user-1.jpg')}}" alt="">
                        </div>
                        <div class="comments-content-wrap">
                          <span>
                            <b><a href="#">Admin - </a></b>
                            <span class="post-time">October 6, 2014 at 1:38 am</span>
                          </span>
                          <p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
                        </div>
                      </div>
                    </li>                 
                  </ul>
                </div>
              </div>
              <div class="comment-respond">
                <h3 class="comment-reply-title">Add a review</h3>
                <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                <form action="#">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Name *</p>
                      <input type="text">
                    </div>
                    <div class="col-md-12">
                      <p>Email *</p>
                      <input type="email">
                    </div>
                    <div class="col-md-12">
                      <p>Your Rating</p>
                      <div class="pro-rating">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-o"></i></a>
                        <a href="#"><i class="fa fa-star-o"></i></a>
                      </div>
                    </div>
                    <div class="col-md-12 comment-form-comment">
                      <p>Your Review</p>
                      <textarea id="message" cols="30" rows="10"></textarea>
                      <input type="submit" value="Submit">
                    </div>
                  </div>
                </form>
              </div>            
            </div>
          </div> --}}
        </div>          
      </div>
    </div>
  </div>
</div>
<!-- product-details Area end -->
<!-- product section start -->
<div class="our-product-area new-product">
  <div class="container">
    <div class="area-title">
      <h2>New products</h2>
    </div>
    <!-- our-product area start -->
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="features-curosel">
            @foreach($newProducts as $product)
            <!-- single-product start -->
            <div class="col-lg-12 col-md-12">
              <div class="single-product first-sale">
                <div class="product-img">
                  <a href="{{route('Shop.Good')}}?p={{$product->id}}">
                    <img class="primary-image" src="{{asset(preg_replace('/public/', 'storage', $product->getPrimaryImage()))}}" alt="" />
                  </a>
                  <div class="action-zoom">
                    <div class="add-to-cart">
                      <a href="{{route('Shop.Good')}}?p={{$product->id}}" title="See more">More</a>
                    </div>
                  </div>
                  <div class="actions">
                    <div class="action-buttons">
                      <div class="add-to-links">
                        <div class="add-to-wishlist">
                          <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="compare-button">
                          <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                        </div>                  
                      </div>
                    </div>
                  </div>
                  <div class="price-box">
                    <span class="new-price">{{$product->price}} {{$product->valut->sign}}</span>
                  </div>
                </div>
                <div class="product-content">
                  <h2 class="product-name"><a href="#">{{$product->title}}</a></h2>
                  <p>{{substr($product->content,0,30)."..."}}</p>
                </div>
              </div>
            </div>
            <!-- single-product end -->
            @endforeach
          </div>
        </div>  
      </div>
    </div>
    <!-- our-product area end --> 
  </div>
</div>
<!-- product section end -->
@endsection