@extends('frontend.frontend_master')
@section('mainContent')
   <!-- page indicator section start -->
{{-- <section class="page-indicator">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li><a href="">food & more</a></li>
					<li><a href="">organic items</a></li>
					<li><a href="">food</a></li>
				</ul>
			</div>
		</div>
	</div>
</section> --}}
<!-- page indicator section end -->



<!-- shop page main section start -->
<section class="shop section-padding">
	<div class="container">

		<!-- top row start -->
		<div class="row">
			<!-- left part start -->
			<div class="col-md-3">

				<!-- shop left image start -->
				<div class="shop-left-image for-mob">
					<a href="">
						
					

						<!-- child item start -->
					
						<!-- child item end -->

					</a>
				</div>
				<!-- shop left image end -->

				<!-- filter for mob start -->
				<!--<div class="row filter-for-mob">-->
				<!--	<div class="col-6">-->
				<!--		<h2>filter item</h2>-->
				<!--	</div>-->
				<!--	<div class="col-6 filter-icon">-->
				<!--		<i class="fas fa-filter"></i>-->
				<!--	</div>-->
				<!--</div>-->
				<!-- filter for mob end -->

				<div class="shop-left">
					
					<!-- price filter start -->
					<!--<div class="price-filter">-->
					<!--	<h2>filter by price</h2>-->
					

						<!-- price filtering -->
	    <!--                <div class="shop-filter">-->
	    <!--                    <div id="sliderpc"></div>-->
	    <!--                </div>-->
	                    <!-- price filtering -->

	    <!--                <div class="row">-->
	    <!--                	<div class="col-md-9">-->
	    <!--                		<p>Price : <span id="spanOutputpc"></span> </p>-->
	    <!--                	</div>-->
	    <!--                	<div class="col-md-3 filter">-->
	    <!--                		<p>filter</p>-->
	    <!--                	</div>-->
	    <!--                </div>-->

	    <!--            </div>-->
					<!-- price filter end -->

                    <!-- category start -->
                    <div class="type">
                    	<h2>category</h2>
                    	
						<!-- category item  foreach loop start-->
						@foreach($viewCat as $category)
                		@if($category->has('subcategories'))
                    	<div class="row shop-category" >
                    	    <div class="col-md-8 col-8 shop-category-left">
                    	        <a >{{$category->category_name}}</a>
                    	    </div>
                    	    <div class="col-md-4 col-4">
                    	        <i class="fas fa-plus show-category" id="{{$category->id}}"></i>
                    	    </div>
                    	       
                    	   <!-- sub category drop down list start -->
                    	   <div class="sub-cat-dropdown {{$category->id}}">
                    	       <ul>
								@foreach($category->subcategories as $subcategory)
                    	           <li>
								   <a href="{{url('/products/'.$subcategory->sub_slug)}}"> {{$subcategory->sub_name}}</a>
								   </li>
								   @endforeach
                    	        
                    	       </ul>
                    	   </div>
                    	   <!-- sub category drop down list end -->
                    	    
						</div>
						@endif
						@endforeach
                    	<!-- category item  foreach loop end here-->
                    	
                    </div>
                    <!-- category end -->

				</div>

				<!-- shop left image start -->
				<div class="shop-left-image for-pc">
					<a href="">
						
					

						<!-- child item start -->
					
						<!-- child item end -->

					</a>
				</div>
				<!-- shop left image end -->

			</div>
			<!-- left part end -->


			<!-- right part start -->
			<div class="col-md-9">
				<div class="shop-right">
					
					<!-- shop right top start -->
					<div class="shop-right-top">
						<div class="row">
							
							<!-- left part start -->
							<div class="col-md-9 shop-right-top-left">
								<ul>
									{{-- <li>sort by : </li>
									<li class="click-sort sort-2" id="sort-2">price</li>
									<li class="click-sort sort-3" id="sort-3">rating</li>
									<li class="click-sort sort-4" id="sort-4">popularity</li>
									<li class="click-sort sort-5" id="sort-5">newest</li> --}}
								</ul>
							</div>
							<!-- left part end -->

							<!-- right part start -->
							<!-- <div class="col-md-3 shop-right-top-right">
								<ul>
									<li><i class="fas fa-list"></i></li>
									<li><i class="fas fa-th-large active-type"></i></li>
								</ul>
							</div> -->
							<!-- right part end -->

						</div>
					</div>
					<!-- shop right top end -->

					<!-- shop product start -->
					<div class="shop-product">

						<!-- grid wise -->
						<div class="row col-wise">
							
                            <!-- product item start -->
                            @foreach ($allproducts as $product)
                                
                          
							<div class="col-md-3 col-6 product-hover">
								<div class="product-item-01">
									<div class="product-hover-item">
									@if($product->discount !=Null)
										<p>{{$product->discount}}</p>
										@endif
										<a href="">
											<img src="{{asset('public/frontend/images/wishlist.png')}}" class="img-fluid">
										</a>
										<a class="show-product-popup" id="{{$product->id}}" data-id="{{$product->id}}" data-name="{{$product->pro_name}}"
										 data-qty_type="{{$product->qty_type}}" data-sell_price="{{$product->sell_price}}" 
										 data-image2="{{$product->image2}}" data-image1="{{$product->image1}}" data-image="{{$product->images}}" data-short_description="{{$product->short_description}}">
	                                    	<i class="fas fa-eye"></i> </a>
									</div>

									<!-- main thumbnail -->
									<img src="{{asset('public/images/'.$product->images)}}" class="img-fluid">
									<!-- main thumbnail -->

									<!-- go product details -->
                                <a href="{{url('/product/'.$product->slug)}}">
										<p>{{$product->pro_name}}</p>
										<span>{{$product->sell_price}} Tk</span>
									</a>
									<!-- go product details -->
									
									<div class="product-item-cart">
										<a  type="button" class="cart" data-id="{{$product->id}}">
											<img src="{{asset('public/frontend/images/bag.png')}}"> add to bag
										</a>
									</div>
									<ul>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
										<li><i class="fas fa-star"></i></li>
									</ul>
                                </div>
                                
                            </div>
                            @endforeach
							<!-- product item end -->



						</div>
						<!-- grid wise -->

						<!-- list wise -->
						<div class="row list-wise">
							<h2>No Product Found</h2>
						</div>
						<!-- list wise -->

					</div>
					<!-- shop product end -->

				</div>

				<!-- shop page pagination start -->
				<div class="shop-pagination">
					<div class="row">
						<div class="col-md-12">
							<ul>
                                {{ $allproducts->links() }}
								<li class="click-paginate paginate-1 active-pagination" id="paginate-1">
								
								</li>
								{{-- <li class="click-paginate paginate-2" id="paginate-2">
									<a href="">2</a>
								</li>
								<li class="click-paginate paginate-3" id="paginate-3">
									<a href="">3</a>
								</li>
								<li>
									...
								</li>
								<li class="click-paginate paginate-4" id="paginate-4">
									<a href="">10</a>
								</li> --}}
							</ul>
						</div>
					</div>
				</div>
				<!-- shop page pagination end -->

			</div>
			<!-- right part end -->
		</div>
		<!-- top row end -->

		<!-- latest product title row start -->
		<div class="row latest-product-title">
			<div class="col-md-12">
				<h2>latest <span>product</span> </h2>
			</div>
		</div>
		<!-- latest product title row end -->

		<!-- latest product row start -->
		<div class="row">
			<!-- slider start -->
			<div class="latest-product-carousel owl-carousel owl-theme">

                <!-- product item start -->
             
                
    			<div class="item">
    				<div class="col-md-12 col-12 product-hover-2">
						<div class="product-item-02">

							<!-- main thumbnail -->
								<img src="{{asset('public/images/')}}" class="img-fluid">
							<!-- main thumbnail -->

							<!-- go product details -->
							<a href="">
								<p>Organic Broccoli</p>
								<span>280.99 Tk</span>
							</a>
							<!-- go product details -->

							<div class="feature-product-hover">
								<a href="">
									<img src="{{asset('public/frontend/images/cart.png')}}"> add to bag
								</a>
							</div>

						</div>
					</div>
                </div>
              
    			<!-- product item end -->


    		</div>
    		<!-- slider end -->
		</div>
		<!-- latest product row end -->

	</div>
</section>
<!-- product quick view popup start -->
<div class="product-quick-view profile_view_1">
	<div class="container">
		<div class="row">
			<div class="col-md-12 product-quick-view-main-box" >
				<i class="fas fa-times hide-quick-view"></i>
				<div class="row">
					<!-- left part start -->
					<div class="col-md-6">
						<div class="product-main-img">
							<a href="product-details.php" >
								<span id="qck_image_main"></span>
								<span id="qck_images1"></span>
								<span id="qck_images2"></span>
								
							</a>
						</div>

						<!-- bottom image select start -->
						<div class="row product-bottom-img-row produc-quick-view-img">
							<div class="col-md-4 col-4">
							   <span id="qck_images_main"></span>
								<i class="fas fa-caret-up caret-one"></i>
							</div>
							<div class="col-md-4 col-4">
								<span id="qck_images_1"></span>
								<i class="fas fa-caret-up caret-two"></i>
							</div>
							<div class="col-md-4 col-4">
								<span id="qck_images_2"></span>
								<i class="fas fa-caret-up caret-three"></i>
							</div>
						</div>
						<!-- bottom image select end -->
					</div>
					<!-- left part end -->

					<!-- right part start -->
					<div class="col-md-6">
						<div class="product-quick-view-right">
							<h2 class="quick-view-heading" id="qck_name"></h2>

							<!-- review start -->
							<div class="row">
								<div class="col-md-6 product-quick-view-right-left">
									<ul>
										<li>
											<a href=""><i class="fas fa-star"></i></a>
										</li>
										<li>
											<a href=""><i class="fas fa-star"></i></a>
										</li>
										<li>
											<a href=""><i class="fas fa-star"></i></a>
										</li>
										<li>
											<a href=""><i class="fas fa-star"></i></a>
										</li>
										<li>
											<a href=""><i class="fas fa-star"></i></a>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<p>122 reviews</p>
								</div>
							</div>
							<!-- review end -->

							<!-- avaiablity and stock start -->
							<div class="row available">
								<div class="col-md-6">
									<h2>availablity : </h2>
								</div>
								<div class="col-md-6">
									<h2>in stock</h2>
								</div>
							</div>
							<!-- avaiablity and stock end -->

							<!-- price row start -->
							<div class="row">
								<div class="col-md-12">
									<h2 class="quick-view-heading" ><span id="qckviewsellprice"></span> tk/<span id="qckqtytype"></span></h2>
								</div>
							</div>
							<!-- price row end -->
							<div class="product-item-cart">
								<a  type="button" class="cart" data-id="{{$product->id}}">
									<img src="{{asset('public/frontend/images/bag.png')}}"> add to bag
								</a>
							</div>
							<!-- description row start -->
							<div class="row">
								<div class="col-md-12">
									<h2 >description</h2>
								</div>
								<div class="col-md-12">
								<p id="qck_short_description"></p>
								</div>
							</div>
							<!-- description row end -->

						</div>
					</div>
					<!-- right part end -->

				</div>
			</div>
		</div>
	</div>
</div>
<!-- product quick view popup  end -->
<script>
	$(document).ready(function(){
    $(".show-product-popup").click(function(){
        var productQuickView = $(this).attr('id');
        
            var id=$(this).data('id');
            var name=$(this).data('name');
            
            var sell_price=$(this).data('sell_price');
            var qtytype=$(this).data('qty_type');
			var image=$(this).data('image');
			var image1=$(this).data('image1');
            var image2=$(this).data('image2');
			var short_description=$(this).data('short_description');
			
            $('#title_qck').val(id);
            $('#qck_name').html(name);
            $('#qckviewsellprice').html(sell_price);
			$('#qckqtytype').html(qtytype);
			$('#qck_short_description').html(short_description);
            
            $('#qck_image_main').html("<img src={{ URL::to('/public/images/')}}/" + image + " width='70' class='img-fluid to-img1 block__pic' />");
			$('#qck_images_main').html("<img src={{ URL::to('/public/images/')}}/" + image + "  class='img-fluid for-img1' />");
			if(image1 !='null'){
			$('#qck_images1').html("<img src={{ URL::to('/public/images/')}}/" + image1 + " width='70' class='img-fluid to-img2 block__pic' />");
			$('#qck_images_1').html("<img src={{ URL::to('/public/images/')}}/" + image1 + " class='img-fluid for-img2' />");
			}
			if(image2 !='null'){
			$('#qck_images2').html("<img src={{ URL::to('/public/images/')}}/" + image2 + " width='70' class='img-fluid to-img3 block__pic' />");
            $('#qck_images_2').html("<img src={{ URL::to('/public/images/')}}/" + image2 + " class='img-fluid for-img3' />");
			}
        if( productQuickView != 'all' ){

            $(".product-quick-view").css({
                "opacity" : "1",
                "visibility" : "unset",
            })
            $(".product-quick-view-main-box").slideDown();
            $('html,body').css({
                "overflow" : "hidden",
            })

            $(document).click(function(divclose){
                if( $(divclose.target).closest(".show-product-popup").length == 0 && $(divclose.target).closest(".product-quick-view-main-box").length == 0 && $(divclose.target).closest(".product-main-img img").length == 0 ){
                    $(".product-quick-view").css({
                        "opacity" : "0",
                        "visibility" : "hidden",
                    })
                    $(".product-quick-view-main-box").slideUp();
                    $('html,body').css({
                    "overflow" : "auto",
                })
                }
            })

            $(".hide-quick-view").click(function(){
                $(".product-quick-view").css({
                    "opacity" : "0",
                    "visibility" : "hidden",
                })
                $(".product-quick-view-main-box").slideUp();
                $('html,body').css({
                    "overflow" : "auto",
                })
            })

        }

    })
})
</script>

<script src="{{asset('public/assets/js/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('public/assets/js/toastr/toastr.min.js')}}"></script>

<script>
	$(document).ready(function(){
		toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "2000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
	  $('.cart').on('click',function(){
		var id=$(this).data('id');
		//  alert(id);
		  $.ajax({
			type: 'get',
			url: '<?php echo url('/addCart/product/');?>/'+id,
			dataTpe:'json',
			success:function(){
				toastr["success"]("Product Add To Cart Succcessfully !!");
			}
		  });
		 });
	   
	});
	</script>
@endsection