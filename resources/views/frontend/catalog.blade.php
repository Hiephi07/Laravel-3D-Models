@extends('frontend.layouts.app')

@section('content')
    <!-- Category Header -->
<div class="category-header py-4">
    <div class="container-fluid px-4">
        <h1 class="h4 mb-2">Furnishings 3D Models</h1>
        <p class="text-muted">Explore 188209 furnishings 3D models in a variety of the most popular 3D file formats</p>
    </div>
</div>

<!-- Filters Section -->
<div class="filters-section py-3 border-top border-bottom">
    <div class="container-fluid px-4">
        <div class="d-flex flex-wrap align-items-center gap-3">
            <!-- File Formats Dropdown -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button">
                    File formats
                </button>
            </div>

            <!-- License Types -->
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-outline-secondary active">Free</button>
                <button type="button" class="btn btn-outline-secondary">On sale</button>
            </div>

            <!-- Price Dropdown -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button">
                    Price
                </button>
            </div>

            <!-- Format Types -->
            <div class="format-types d-flex gap-2">
                <button class="btn btn-outline-secondary">3D print</button>
                <button class="btn btn-outline-secondary">Animated</button>
                <button class="btn btn-outline-secondary">PBR</button>
                <button class="btn btn-outline-secondary">Rigged</button>
                <button class="btn btn-outline-secondary">Low poly</button>
            </div>

            <!-- Poly Count -->
            <div class="dropdown ms-auto">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button">
                    Poly count
                </button>
            </div>

            <!-- View Toggle -->
            <div class="btn-group">
                <button class="btn btn-outline-secondary">
                    <i class="fa-solid fa-filter"></i>
                </button>
            </div>

            <!-- Sort Dropdown -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button">
                    Best Match
                </button>
            </div>

            <!-- Reset Button -->
            <div class="btn-group">
                <button class="btn btn-outline-secondary" type="button">
                    Reset
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Products Grid -->
<div class="products-section py-4">
    <div class="container-fluid px-4">
        <div class="row g-4">
            <!-- Product Card -->
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-2 col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="product-card">
                    <div class="product-image m-4 position-relative">
                        <img src="https://www.3dcadbrowser.com/th/1/127/127125.webp" class="w-100" alt="Curtain">
                        <div class="badge text-bg-secondary" style="border-radius: 20%;">$39</div>
                        <div class="product-actions">
                            <button class="btn btn-icon">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="product-info p-2">
                        <h3 class="product-title h6 mb-1">Curtain</h3>
                        <div class="product-meta text-muted small">
                            3DS MAX [+2]
                        </div>
                    </div>
                </div>
            </div>

            <!-- Repeat for other products -->
        </div>

        <!-- Pagination -->
        <div class="pagination-section mt-5">
            <div class="d-flex justify-content-between align-items-center">
                <div class="items-count text-muted">
                    32112 items
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item active"><a class="page-link" href="#">83</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="per-page text-muted">
                    Per page: 45 60 120
                </div>
            </div>
        </div>
    </div>
</div>
@endsection