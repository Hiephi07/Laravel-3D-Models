@extends('frontend.layouts.app')

@section('content')
    <!-- Hero Section -->
<section class="hero-section">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-4">Professional 3D Models for Every Project</h1>
        <div class="hero-search mx-auto">
            <input type="text" class="form-control form-control-lg" placeholder="Search 3D models">
            <button class="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</section>

<div class="category-featured">
    <!-- Category Navigation -->
    <nav class="category-nav container">
        <div class="container-fluid">
            <div class="row flex-nowrap overflow-auto justify-content-between">
                <div class="col-auto">
                    <a href="{{route('catalog')}}" class="category-item">
                        <i class="fas fa-car"></i>
                        <span>Car</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{route('catalog')}}" class="category-item">
                        <i class="fa-solid fa-person"></i>
                        <span>Character</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{route('catalog')}}" class="category-item">
                        <i class="fa-solid fa-utensils"></i>
                        <span>Food</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{route('catalog')}}" class="category-item">
                        <i class="fa-solid fa-bed"></i>
                        <span>Furniture</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{route('catalog')}}" class="category-item">
                        <i class="fa-solid fa-bath"></i>
                        <span>Household</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{route('catalog')}}" class="category-item">
                        <i class="fa-solid fa-leaf"></i>
                        <span>Flant</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{route('catalog')}}" class="category-item">
                        <i class="fa-solid fa-shuttle-space"></i>
                        <span>Space</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{route('catalog')}}" class="category-item">
                        <i class="fa-solid fa-truck"></i>
                        <span>Vehicle</span>
                    </a>
                </div>
                <div class="col-auto">
                    <a href="{{route('catalog')}}" class="category-item">
                        <i class="fa-solid fa-ship"></i>
                        <span>Watercraft</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Featured Carousel -->
    <section class="featured-section container">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12">
                    <div class="featured-carousel">
                        <!-- Main carousel items -->
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="featured-item main">
                                    <img src="https://static.vecteezy.com/system/resources/previews/039/617/725/non_2x/ai-generated-polished-shiny-beautiful-black-car-on-dark-isolated-background-for-website-or-print-design-generative-ai-free-photo.jpg"
                                        alt="Cars Collection">
                                    <div class="overlay">
                                        <h3>CARS</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="featured-item">
                                    <img src="https://s.alicdn.com/@sc04/kf/H15cd279d12d8425b940bc88327e42977b.jpg_720x720q50.jpg"
                                        alt="Character">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="featured-item">
                                    <img src="https://360view.3dmodels.org/zoom/Animals/Tiger_1000_0001.jpg"
                                        alt="Tiger">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="featured-item">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/443/045/products/vespa-50cc-vera-s-ghi.png?v=1682318535700"
                                        alt="Vespa">
                                </div>
                            </div>
                        </div>
                        <!-- Thumbnail navigation -->
                        <div class="thumbnail-nav mt-3">
                            <div class="row g-2 justify-content-center">
                                <!-- Add 5 thumbnail images -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- New Models Section -->
<section class="new-models-section">
    <div class="container-fluid px-4 mt-3">
        <h2 class="section-title mb-4">New 3D models</h2>
        <div class="row g-4">
            <!-- 12 model cards as shown in the image -->
            @foreach ($newProducts as $product)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="model-card">
                    <img src="{{asset('storage/products/' . $product->productMedia->thumbnail)}}"
                        alt="3D Model">
                    <div class="card-info">
                        <p>
                            <strong><a class="text-decoration-none text-white" href="{{route('products.detail', $product->id)}}">{{$product->title}}</a></strong>
                        </p>
                        <p>
                            <i class="fa-regular fa-comment"></i>
                            45

                            <i class="fa-regular fa-thumbs-up"></i>
                            120
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            
            <!-- Repeat for all models -->
        </div>
    </div>
</section>

<!-- Category Quick Links Section -->
<section class="category-quick-links py-4">
    <div class="container-fluid">
        <div class="quick-links-wrapper d-flex align-items-center">
            <!-- Category Links -->
            <div class="quick-links flex-grow-1 d-flex align-items-center">
                <a href="#" class="quick-link">
                    <i class="fa-brands fa-deskpro"></i>
                    <span>Pendant light</span>
                </a>

                <a href="#" class="quick-link">
                    <i class="fas fa-couch"></i>
                    <span>Sofa</span>
                </a>

                <a href="#" class="quick-link">
                    <i class="fas fa-chair"></i>
                    <span>Arm chair</span>
                </a>

                <a href="#" class="quick-link">
                    <i class="fas fa-chair"></i>
                    <span>Chair</span>
                </a>

                <a href="#" class="quick-link">
                    <i class="fas fa-table"></i>
                    <span>Table</span>
                </a>

                <a href="#" class="quick-link">
                    <i class="fas fa-door-closed"></i>
                    <span>Wardrobe & Display cabinets</span>
                </a>

                <a href="#" class="quick-link">
                    <i class="fas fa-bed"></i>
                    <span>Bed</span>
                </a>

                <a href="#" class="quick-link">
                    <i class="fas fa-coffee"></i>
                    <span>Table + Chair</span>
                </a>
            </div>

            <!-- All Models Button -->
            <div class="ms-3">
                <a href="#" class="btn btn-primary all-models-btn">
                    All Models
                </a>
            </div>

            <!-- Navigation Arrows -->
            <div class="quick-links-nav ms-3">
                <button class="nav-arrow prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="nav-arrow next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Top Artists -->
<section class="top-artists-section py-5 bg-light">
    <div class="container px-4">
        <h2 class="section-title mb-4 text-center">Top Artists This Week on CGTrue</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="artist-card">
                    <img src="http://nld.mediacdn.vn/thumb_w/540/2018/2/5/photo-1-15178030977351338145803.jpg"
                        alt="Artist Work">
                    <div class="card-body">
                        <h5>DENA BUSINESS</h5>
                        <p>382 products since 2018</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="artist-card">
                    <img src="http://nld.mediacdn.vn/thumb_w/540/2018/2/5/photo-1-15178030977351338145803.jpg"
                        alt="Artist Work">
                    <div class="card-body">
                        <h5>DENA BUSINESS</h5>
                        <p>382 products since 2018</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="artist-card">
                    <img src="http://nld.mediacdn.vn/thumb_w/540/2018/2/5/photo-1-15178030977351338145803.jpg"
                        alt="Artist Work">
                    <div class="card-body">
                        <h5>DENA BUSINESS</h5>
                        <p>382 products since 2018</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="artist-card">
                    <img src="http://nld.mediacdn.vn/thumb_w/540/2018/2/5/photo-1-15178030977351338145803.jpg"
                        alt="Artist Work">
                    <div class="card-body">
                        <h5>DENA BUSINESS</h5>
                        <p>382 products since 2018</p>
                    </div>
                </div>
            </div>
            <!-- Repeat for other artists -->
        </div>
    </div>
</section>
@endsection