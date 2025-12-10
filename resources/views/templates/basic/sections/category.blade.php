@php
    use App\Models\Category;
    $categoryContent = getContent('category.content', true);
    $categories = Category::orderBy('status', 'desc')->get();

@endphp
<div class="category-section my-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <span class="section-heading__subtitle"> {{ __($categoryContent->data_values?->subtitle) }} </span>
                    <h3 class="section-heading__title"> {{ __($categoryContent->data_values?->title) }} </h3>
                </div>
            </div>
        </div>
        <div class="category-wrapper">
            @foreach ($categories as $category)
                <a href="{{ route('category.index', $category->id) }}" class="category-item">
                    <div class="category-item__thumb">
                        <img src="{{ getImage(getFilePath('categoryList') . '/' . $category->image ?? '') }}"
                            alt="@lang('image')">
                    </div>
                    <h6 class="category-item__title"> {{ __($category->name) }} </h6>
                </a>
            @endforeach
        </div>
    </div>
</div>
