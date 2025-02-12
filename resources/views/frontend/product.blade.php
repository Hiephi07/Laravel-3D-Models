@extends('frontend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
@endsection

@section('content')
    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <!-- Left Column: Image Carousel -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">3D Models</a></li>
                    <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                    <li class="breadcrumb-item"><a href="#">Chair</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Armchair Renmi 3D model</li>
                </ol>
            </nav>

            <div class="col-md-9">
                <!-- Carousel chính -->
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://media.designconnected.com/vfs/84268a1046e0d20d8d1f07434facf204_1/d2e93ea08d77b5ef9b02a2b753d80bb7.jpg"
                                height="640px" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://media.designconnected.com/vfs/31b31f6d310a071edae7a02b86f85253_1/a6800ab0b69fabe650a0be9fe86eaf09.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://media.designconnected.com/vfs/311fdd07965aad7ba7c0a40ddcc64d24_1/63d84447c6a22938024f630b2fa99d4a.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Các ảnh con bên dưới -->
                <div class="thumbnail-container">
                    <img src="https://media.designconnected.com/vfs/84268a1046e0d20d8d1f07434facf204_1/d2e93ea08d77b5ef9b02a2b753d80bb7.jpg"
                        alt="Thumbnail 1" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="thumbnail active-thumbnail">
                    <img src="https://media.designconnected.com/vfs/31b31f6d310a071edae7a02b86f85253_1/a6800ab0b69fabe650a0be9fe86eaf09.jpg"
                        alt="Thumbnail 2" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="thumbnail">
                    <img src="https://media.designconnected.com/vfs/311fdd07965aad7ba7c0a40ddcc64d24_1/63d84447c6a22938024f630b2fa99d4a.jpg"
                        alt="Thumbnail 3" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="thumbnail">
                </div>

                <!-- Tabs Section -->
                <div class="mt-4">
                    <ul class="nav nav-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description" role="tab">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments"
                                role="tab">Comments</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                                role="tab">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content p-4 border border-top-0">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <!-- Description Section -->
                            <h5 class="mb-4">Description</h5>

                            <!-- Additional Services -->
                            <h6>Additional Services</h6>
                            <p>
                                If you purchase our model, we provide the following customization services at a reasonable
                                fee,
                                allowing you to access our team of top-notch artists for exclusive customizations. Let our
                                extensive
                                years of creative experience enhance your ideas and make your work even more captivating.
                            </p>
                            <ul>
                                <li>$200–$900: Customize a character animation for less than 4 seconds.</li>
                                <li>$150: Convert the character to UE5 format, including model, textures, hair, rigging
                                    controllers, and animations.</li>
                            </ul>

                            <!-- Introduction -->
                            <h6>Introduction</h6>
                            <p>
                                This is a high-quality coracias caudatus model with high-quality 4K maps, fur, riggings, and
                                5 realistic animations.
                                The feathers are all made and layered after real reference, and the body feathers are made
                                as facets. Each piece of
                                feather has a separate controller and can be controlled separately, and there is also a
                                preset wing-folding controller.
                                This model is made with Blender and Cycles renderer at real-world scale. It consists of the
                                body, eyes, and all feathers
                                (multiple objects).
                            </p>

                            <!-- Polygons Details -->
                            <h6>Polygons</h6>
                            <ul>
                                <li>Body: vertices 32,291; polygons 32,232</li>
                                <li>Eyes: vertices 3,144; polygons 3,136</li>
                                <li>Feathers: vertices 233,637; polygons 164,471</li>
                                <li>Total: vertices 275,072; polygons 199,839</li>
                            </ul>

                            <!-- Formats -->
                            <h6>Formats</h6>
                            <p>There is a Blender project and an Fbx file without rigging or animation.</p>

                            <!-- Show More -->
                            <p class="show-more">Show more ▼</p>

                        </div>
                        <div class="tab-pane fade" id="comments" role="tabpanel">User comments...</div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel">Product reviews...</div>
                    </div>

                    <!-- Tags -->
                    <div class="my-3">
                        <div>
                            <i class="fa-solid fa-tag px-3"></i>
                            <!-- <button type="button" class="btn btn-outline-secondary btn-sm"
                                    style="font-size: 12px; padding: 2px 4px;">
                                    render
                                </button> -->


                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">render</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">pillow</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">furniture</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">chair</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">interior</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">modern</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">seat</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">design</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">sofa</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">living</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">room</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">modern chair</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">casa</button>
                            <button type="button" class="btn btn-outline-secondary btn-sm fs-6"
                                style="padding: 2px 4px;">comfort</button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Product Details -->
            <div class="col-md-3">
                <div class="border p-3 mb-3">
                    <h4>Armchair Rand 3D Model</h4>
                    <p class="text-success h4 my-4">$28.00 <del class="text-muted">$33.00</del></p>
                    <button class="btn btn-warning btn-lg w-100 my-3">Add to Cart</button>
                </div>

                <div class="border p-3 mb-3">
                    <div class="info-card">
                        <!-- Creator Information -->
                        <div class="d-flex align-items-center mb-4">
                            <img src="./images/50.png" class="rounded-circle me-3" alt="Creator Avatar">
                            <div>
                                <h5 class="mb-0">GAN Studio</h5>
                                <p class="mb-0"><span class="rating">★★★★★</span> (3 reviews)</p>
                                <small class="text-muted">Contributor Since 2016</small>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary btn-sm mb-3 w-100">Contact</button>
                    </div>
                </div>

                <div class="border p-3 mb-3">
                    <!-- 3D Model Formats -->
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="h6">3D Model Formats</th>
                                <th scope="col" class="h6">Format limitations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Autodesk 3ds Max (.max)</td>
                                <td>35.3 MB</td>
                            </tr>
                            <tr>
                                <td>3D Studio (.3ds)</td>
                                <td>35.3 MB</td>
                            </tr>
                            <tr>
                                <td>OBJ (.obj, .mtl)</td>
                                <td>35.3 MB</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="border p-3 mb-3">
                    <!-- 3D Model Details -->
                    <table class="table table-borderless fs-6">
                        <thead>
                            <tr>
                                <th scope="col" class="h6">3D Model Details</th>
                                <th scope="col" class="h6"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Publish Date</td>
                                <td>2023-10-21</td>
                            </tr>
                            <tr>
                                <td>Model ID</td>
                                <td>#4851725</td>
                            </tr>
                            <tr>
                                <td>Animated</td>
                                <td class="text-danger">✘</td>
                            </tr>
                            <tr>
                                <td>Rigged</td>
                                <td class="text-danger">✘</td>
                            </tr>
                            <tr>
                                <td>VR/AR / Low-poly</td>
                                <td class="text-danger">✘</td>
                            </tr>
                            <tr>
                                <td>PBR</td>
                                <td class="text-danger">✘</td>
                            </tr>
                            <tr>
                                <td>Textures</td>
                                <td class="text-success">✔</td>
                            </tr>
                            <tr>
                                <td>Materials</td>
                                <td class="text-success">✔</td>
                            </tr>
                            <tr>
                                <td>UV Mapping</td>
                                <td class="text-success">✔</td>
                            </tr>
                            <tr>
                                <td>Unwrapped UVs</td>
                                <td>Unknown</td>
                            </tr>
                            <tr>
                                <td>Ready for 3D Printing</td>
                                <td class="text-danger">✘</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <!-- Related Products -->
        <div class="mt-5">
            <h4 class="text-center mb-3">Related Products</h4>
            <div class="row related-products">
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
                <div class="col-md-2 mb-3">
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
    </div>
@endsection
