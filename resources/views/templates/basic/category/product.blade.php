 @forelse($products as $product)
     <div class="col-lg-4 col-sm-6">
         <div class="product-item">
             <span class="product-item__badge">@lang('New')</span>
             <div class="product-item__thumb">
                 <a href="{{ route('product.details', $product->id) }}">
                     <img src="{{ getImage(getFilePath('products') . '/' . $product->image, getFileSize('products')) }}"
                         alt="">
                     <div class="product-item__content">
                         <h6 class="product-item__title"> {{ __($product->name) }} </h6>
                     </div>
                 </a>
             </div>
             <div class="product-item__bottom">
                 <ul class="rating-list">
                     @for ($i = 1; $i <= 5; $i++)
                         @if ($product->ratings >= $i)
                             <li class="rating-list__item">
                                 <i class="las la-star"></i>
                             </li>
                         @else
                             <li class="single-rating-item fs-14">
                                 <i class="fa-solid fa-star"></i>
                             </li>
                         @endif
                     @endfor

                 </ul>
                 <div class="product-item__price">
                     <span class="product-item__price__new">{{ gs('cur_sym') }}
                         {{ __($product->sales_price) }}
                     </span>
                     <span class="product-item__price__old">{{ gs('cur_sym') }}
                         {{ __($product->regular_price) }}
                     </span>
                 </div>
                 <button class="product-item__btn btn btn--white w-100">@lang('Add to Cart')</button>
             </div>

         </div>
     </div>
 @empty
     <div class="empty-message text-center py-5">
         <h3 class="text-center">@lang('No items for this category')</h3>
     </div>
 @endforelse


 @if ($products->hasPages())
     {{ $products->links('pagination::bootstrap-5') }}
 @endif
