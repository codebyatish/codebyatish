@extends('front/layout')
@section('page_title','Cart Page')
@section('container')

 <!-- Cart view section -->
 <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="cart-view-area">
            <div class="cart-view-table">
              <form action="">
                <?php  if (isset($cart_items[0])) { ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php  foreach ($cart_items as $cart_item) { ?>
                                <tr id="cart_box_{{$cart_item->product_attribute_id}}">
                                    <td><a class="remove" href="javascript:void(0)" onclick="deleteCartProduct('{{$cart_item->product_id}}','{{$cart_item->size}}','{{$cart_item->color_name}}','{{$cart_item->product_attribute_id}}')"><fa class="fa fa-close"></fa></a></td>
                                    <td><a href="#"><img src="{{asset('storage/media/'.$cart_item->product_attribute_image)}}" alt="{{$cart_item->product_attribute_image}}"></a></td>
                                    <td><a class="aa-cart-title" href="{{url('product/'.$cart_item->product_slug)}}">{{$cart_item->product_name}}</a></td>
                                    <td>Rs. {{$cart_item->product_attribute_price}}</td>
                                    <td><input class="aa-cart-quantity" type="number" id="product_quantity_{{$cart_item->product_attribute_id}}" value="{{$cart_item->product_quantity}}" onchange="updateCart('{{$cart_item->product_id}}','{{$cart_item->size}}','{{$cart_item->product_quantity}}','{{$cart_item->color_name}}','{{$cart_item->product_attribute_id}}','{{$cart_item->product_attribute_price}}')"></td>
                                    <td id="total_price_{{$cart_item->product_attribute_id}}">Rs. {{ $totalItemPrice = $cart_item->product_attribute_price * $cart_item->product_quantity }}</td>
                                </tr>
                            <?php } ?>
                                <tr>
                                    <td colspan="6" class="aa-cart-view-bottom">
                                    <div class="aa-cart-coupon">
                                        <input class="aa-coupon-code" type="text" placeholder="Coupon">
                                        <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                                    </div>
                                    <input class="aa-cart-view-btn" type="button" value="Checkout">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php }  ?>
              </form>
              <!-- Cart Total view -->
              <div class="cart-view-total">
                <h4>Cart Totals</h4>
                <table class="aa-totals-table">
                  <tbody>
                    <tr>
                      <th>Subtotal</th>
                      <td>$450</td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td>$450</td>
                    </tr>
                  </tbody>
                </table>
                <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->
  <form id="addToCart">
    <input type="hidden" id="size_id" name="size_id">
    <input type="hidden" id="color_id" name="color_id">
    <input type="hidden" id="qty" name="qty">
    <input type="hidden" id="product_id" name="product_id">
    @csrf
 </form>
@endsection

