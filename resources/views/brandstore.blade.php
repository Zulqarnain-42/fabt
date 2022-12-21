@extends('layout.main')
@section('content')
    <main class="shop-page style-5">
        <section class="shop section-padding pt-50">
            <div class="container">
                <div class="section-head text-center mb-80 style-5">
                    <h2 class="mb-20"> <span> Store </span> </h2>
                    <div class="page-links color-999">
                        <a href="/" class="me-2">
                            Home
                        </a>
                        <span class="me-2">/</span>
                        <a href="/" class="color-000">
                            Future Art Broadcast Trading Store
                        </a>
                    </div>
                </div>
                <div class="row gx-4">
                    <div class="col-lg-3">
                        <div class="filter">
                            <div class="filter-card mb-30">
                                <div class="card-title">
                                    <span>Categories</span>
                                </div>
                                <div class="form-check category-checkRadio">
                                    <input class="form-check-input" type="radio" name="category" id="category1">
                                    <label class="form-check-label cat-link" for="category1">
                                        All Categories
                                    </label>
                                </div>
                                <div class="form-check category-checkRadio">
                                    <input class="form-check-input" type="radio" name="category" id="category2">
                                    <label class="form-check-label cat-link" for="category2">
                                        Marketing & SEO
                                    </label>
                                </div>
                                <div class="accordion" id="accordionExample">
                                    <div class="">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="/collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Technology
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="/accordionExample">
                                            <div class="ps-3 mb-10">
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category3" checked>
                                                    <label class="form-check-label cat-link" for="category3">
                                                        PC & Laptop
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category4">
                                                    <label class="form-check-label cat-link" for="category4">
                                                        Hardware
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category5">
                                                    <label class="form-check-label cat-link" for="category5">
                                                        mobile & tablet
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category6">
                                                    <label class="form-check-label cat-link" for="category6">
                                                        accessories
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="/collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Electronic
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="/accordionExample">
                                            <div class="ps-3 mb-10">
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category7">
                                                    <label class="form-check-label cat-link" for="category7">
                                                        PC & Laptop
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category8">
                                                    <label class="form-check-label cat-link" for="category8">
                                                        Hardware
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category9">
                                                    <label class="form-check-label cat-link" for="category9">
                                                        mobile & tablet
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="/collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Course
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="/accordionExample">
                                            <div class="ps-3 mb-10">
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category10">
                                                    <label class="form-check-label cat-link" for="category10">
                                                        PC & Laptop
                                                    </label>
                                                </div>
                                                <div class="form-check category-checkRadio">
                                                    <input class="form-check-input" type="radio" name="category"
                                                        id="category11">
                                                    <label class="form-check-label cat-link" for="category11">
                                                        Hardware
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check category-checkRadio">
                                    <input class="form-check-input" type="radio" name="category" id="category12">
                                    <label class="form-check-label cat-link" for="category12">
                                        Event
                                    </label>
                                </div>
                            </div>
                            <div class="filter-card">
                                <div class="card-title d-flex justify-content-between">
                                    <span>Filter</span>
                                    <a href="/" class="text-uppercase fw-normal fs-10px">
                                        <i class="bi bi-arrow-repeat me-1"></i> Reset All
                                    </a>
                                </div>
                                <div class="filter-card-item">
                                    <div class="sub-tilte d-flex align-items-center justify-content-between">
                                        <span>Brands</span>
                                    </div>
                                    <div class="filter-card-body">
                                        <div class="search-group">
                                            <input type="text" placeholder="Search brand">
                                            <button> <i class="bi bi-search"></i> </button>
                                        </div>
                                        <div class="filter-card-scroll">
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck1">
                                                <label class="form-check-label" for="categoryCheck1">
                                                    All Brands
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck2">
                                                <label class="form-check-label" for="categoryCheck2">
                                                    Apple
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck3">
                                                <label class="form-check-label" for="categoryCheck3">
                                                    Samsung
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck4">
                                                <label class="form-check-label" for="categoryCheck4">
                                                    Oppo
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck5">
                                                <label class="form-check-label" for="categoryCheck5">
                                                    Sony
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck6">
                                                <label class="form-check-label" for="categoryCheck6">
                                                    Apple
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck7">
                                                <label class="form-check-label" for="categoryCheck7">
                                                    Samsung
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck8">
                                                <label class="form-check-label" for="categoryCheck8">
                                                    Oppo
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck9">
                                                <label class="form-check-label" for="categoryCheck9">
                                                    Sony
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-card-item">
                                    <div class="sub-tilte d-flex align-items-center justify-content-between">
                                        <span>Colors</span>
                                    </div>
                                    <div class="filter-card-body">
                                        <div class="filter-card-scroll">
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck10">
                                                <label class="form-check-label" for="categoryCheck10">
                                                    All Colors
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck11">
                                                <label class="form-check-label" for="categoryCheck11">
                                                    Red
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck12">
                                                <label class="form-check-label" for="categoryCheck12">
                                                    Orange
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck13">
                                                <label class="form-check-label" for="categoryCheck13">
                                                    Yellow
                                                </label>
                                            </div>
                                            <div class="form-check category-checkBox">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="categoryCheck14">
                                                <label class="form-check-label" for="categoryCheck14">
                                                    Blue
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-card-item border-0 m-0">
                                    <div class="sub-tilte d-flex align-items-center justify-content-between">
                                        <span>Price</span>
                                    </div>
                                    <div class="filter-card-body">
                                        <div class="slider-range-content">
                                            <div class="amount-input">
                                                <div class="amount">
                                                    <small>$ Min</small>
                                                    <input type="text" id="amount1" readonly>
                                                </div>
                                                <div class="amount">
                                                    <small>$ Max</small>
                                                    <input type="text" id="amount2" readonly>
                                                </div>
                                                <button>go</button>
                                            </div>
                                            <div id="slider-range"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="products-content">
                            <div class="top-filter mb-10">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <p class="color-999 fs-12px mb-3 mb-lg-0"> <span class="color-000">1 - 40</span>
                                            of 1,652 results</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="r-side">
                                            <div class="row align-items-center">
                                                <div class="col-8">
                                                    <form action="https://smartinnovates.com/items/iteck/html/contact.php"
                                                        class="form" method="post">
                                                        <div class="form-group">
                                                            <label>Sort by</label>
                                                            <select class="form-select">
                                                                <option value="" selected>Default</option>
                                                                <option value="">best seller</option>
                                                                <option value="">new products</option>
                                                                <option value="">Default</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-4">
                                                    <div class="grid-list-btns">
                                                        <span class="grid-btn bttn active">
                                                            <i class="bi bi-grid-3x3"></i>
                                                        </span>
                                                        <span class="list-btn bttn">
                                                            <i class="bi bi-list-task"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (count($collectionproducts) > 0)
                                <div class="products">
                                    <div class="row gx-2 gx-lg-4">
                                        @foreach ($collectionproducts as $product)
                                            <div class="col-6 col-lg-3 card-width">
                                                <div class="product-card">
                                                    <a href="{{ URL('product') }}{{ '/' . $product->slug }}">
                                                        <div class="img">
                                                            <img src="{{ 'https://test.fa-bt.com/' }}{{ $product->thumbnail }}"
                                                                alt="">
                                                        </div>
                                                    </a>
                                                    <div class="info">
                                                        <h6 class="category">asus</h6>
                                                        <a href="{{ URL('product') }}{{ '/' . $product->slug }}">
                                                            <h5 class="title">{{ $product->title }}</h5>
                                                        </a>
                                                        <div class="rate">
                                                            <div class="stars">
                                                                <i class="fas fa-star active"></i>
                                                                <i class="fas fa-star active"></i>
                                                                <i class="fas fa-star active"></i>
                                                                <i class="fas fa-star active"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rev">3 Reviews</span>
                                                        </div>
                                                    </div>
                                                    <div class="price">
                                                        ${{ $product->price }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="pagination style-5 color-5 justify-content-center mt-50">
                                        <a href="/" class="active">
                                            <span>1</span>
                                        </a>
                                        <a href="/">
                                            <span>2</span>
                                        </a>
                                        <a href="/">
                                            <span>3</span>
                                        </a>
                                        <a href="/">
                                            <span>4</span>
                                        </a>
                                        <a href="/">
                                            <span>...</span>
                                        </a>
                                        <a href="/">
                                            <span>20</span>
                                        </a>
                                        <a href="/">
                                            <span class="text">next <i class="fas fa-chevron-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
