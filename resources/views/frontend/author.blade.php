@extends('frontend.layouts.app')

@section('content')
<!-- Main Content -->
<div class="container mt-4 mb-5">
    <div class="row">
        <!-- Left Column: Image Carousel -->
        <div class="col-md-3">
            <div class="border p-3">
                <div class="info-card">
                    <!-- Creator Information -->
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{asset('assets/img/100.png')}}" class="rounded-circle" alt="Creator Avatar">
                        <div>
                            <h5 class="my-3 text-center">GAN Studio</h5>
                        </div>
                    </div>
                    <button class="btn btn-outline-primary btn-sm mb-3 w-100">Contact</button>
                </div>
            </div>

            <div class="border p-2">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <i class="fa-regular fa-star" style="color: gray;"></i>
                            </td>
                            <td>
                                Ranting
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                                <i class="fa-solid fa-star" style="color: #ffd700;"></i>
                            </td>
                            <td><strong>4.9/5</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-hashtag" style="color: gray;"></i>
                            </td>
                            <td>
                                Reputaion
                            </td>
                            <td><strong>468872</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-brands fa-rocketchat" style="color: gray;"></i>
                            </td>
                            <td>
                                Response Rate
                            </td>
                            <td><strong>85%</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-regular fa-comment" style="color: gray;"></i>
                            </td>
                            <td>
                                Response Time
                            </td>
                            <td><strong>5h3</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-eye" style="color: gray;"></i>
                            </td>
                            <td>
                                Model Views
                            </td>
                            <td><strong>567.9k</strong></td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa-solid fa-heart" style="color: gray;"></i>
                            </td>
                            <td>
                                Model Likes
                            </td>
                            <td><strong>16912</strong></td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="border p-2">
                <button class="btn d-flex justify-content-between align-items-center w-100" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                    aria-controls="collapseExample">
                    <span><strong>About</strong></span>
                    <i class="fa-solid fa-arrow-up"></i>
                </button>

                <!-- Collapse Content -->
                <div class="collapse show p-2" id="collapseExample">
                    Some placeholder content for the collapse component. This panel is hidden by default but revealed
                    when the user activates the relevant trigger.
                </div>
            </div>

            <div class="border p-4">
                <p><strong>Skills</strong></p>

                <button type="button" class="btn btn-outline-secondary my-1">3D Modeling</button>
                <button type="button" class="btn btn-outline-secondary my-1">Rigging</button>
                <button type="button" class="btn btn-outline-secondary my-1">Texturing</button>
                <button type="button" class="btn btn-outline-secondary my-1">Particles</button>
                <button type="button" class="btn btn-outline-secondary my-1">Animating</button>
            </div>

            <div class="border p-4">
                <p><strong>3D Software</strong></p>

                <button type="button" class="btn btn-outline-secondary my-1">Blender</button>
            </div>
        </div>


        <!-- Right -->
        <div class="col-md-9">
            <div>
                <img src="https://as1.ftcdn.net/v2/jpg/02/69/46/64/1000_F_269466462_TSTNamqXizg1r85NWdwpWmzfxV5tRaZl.jpg"
                    alt="" height="256px" width="100%" style="object-fit: cover;" class="border">
            </div>

            <!-- Related Products -->
            <div class="mt-5">
                <div class="row related-products">
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0008.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://cdn.3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0001.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0008.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://cdn.3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0001.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0008.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://cdn.3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0001.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0008.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://cdn.3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0001.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0008.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://cdn.3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0001.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0008.jpg"
                                    class="w-100" alt="Curtain">
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
                    <div class="col-md-3 mb-3">
                        <div class="product-card">
                            <div class="product-image m-4 position-relative">
                                <img src="https://cdn.3dmodels.org/wp-content/uploads/Furniture/Alberta/003_Alberta_Celine_Sofa/Alberta_Celine_Sofa_1000_0001.jpg"
                                    class="w-100" alt="Curtain">
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

                    <!-- Add more products -->
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation example" class="mt-3">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection