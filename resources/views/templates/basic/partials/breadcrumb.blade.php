@php
    $breadcrumbContent = getContent('breadcrumb.content', true);
@endphp
<section class="breadcrumb bg-img"
    data-background-image="{{ frontendImage('breadcrumb', $breadcrumbContent->data_values?->breadcrumb_img) }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb__wrapper">
                    <h2 class="breadcrumb__title">{{ __($pageTitle) }}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
