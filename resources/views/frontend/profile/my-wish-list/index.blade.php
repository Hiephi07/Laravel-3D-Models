@extends('frontend.layouts.app')

@section('content')
    <!--  -->
    <div class="container my-3">
        <div class="d-flex justify-content-between">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">CGTrue</a></li>
                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Wish List</li>
                </ol>
            </nav>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-2 sidebar text-white p-0" style="height: auto; background-color: #293541;">
                <div class="d-flex flex-column align-items-center my-5">
                    <img src="{{asset('storage/avatars/' . auth()->user()->metadata?->avatar)}}" width="100" height="100" class="rounded-circle" alt="Creator Avatar">
                    <div>
                        <h5 class="my-3 text-center">{{auth()->user()->name}}</h5>
                    </div>
                </div>

                <div class="list-group">
                    <a href="/dashboard" class="border border-0 py-3 text-white list-group-item list-group-item-action"
                        style="font-size: 0.75rem; background-color: #293541;">
                        <i class="fa-solid fa-house"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('profile.upload') }}"
                        class="border border-0 py-3 text-white list-group-item list-group-item-action"
                        aria-current="true" 
                        style="font-size: 0.75rem; background-color: #293541;">
                        <i class="fa-solid fa-plus"></i>
                        Publishing
                    </a>
                    <a href="{{ route('profile.myModel') }}"
                        class="border border-0 py-3 text-white list-group-item list-group-item-action"
                        style="font-size: 0.75rem; background-color: #293541;">
                        <i class="fa-solid fa-gear"></i>
                        My Model
                    </a>
                    <a href="{{ route('profile.setting') }}"
                        class="border border-0 py-3 text-white list-group-item list-group-item-action"
                        style="font-size: 0.75rem; background-color: #293541;">
                        <i class="fa-solid fa-gear"></i>
                        Setting
                    </a>
                    <a href="{{ route('profile.purchase') }}"
                        class="border border-0 py-3 text-white list-group-item list-group-item-action"
                        style="font-size: 0.75rem; background-color: #293541;">
                        <i class="fa-solid fa-box-archive"></i>
                        Purchases
                    </a>
                    <a href="{{ route('profile.saleReport') }}"
                        class="border border-0 py-3 text-white list-group-item list-group-item-action"
                        style="font-size: 0.75rem; background-color: #293541;">
                        <i class="fa-solid fa-dollar-sign"></i>
                        Sales Reports
                    </a>
                    <a href="{{ route('profile.productReport') }}"
                        class="border border-0 py-3 text-white list-group-item list-group-item-action"
                        style="font-size: 0.75rem; background-color: #293541;">
                        <i class="fa-solid fa-cube"></i>
                        Product Reports
                    </a>
                    <a href="{{ route('wish-list.index') }}"
                        class="border border-0 py-3 text-white list-group-item list-group-item-action active"
                        style="font-size: 0.75rem;">
                        <i class="fa-solid fa-cube"></i>
                        My Wish List
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-10 mb-5 px-md-4">
                <!-- Wish List Content -->
                <div class="">
                    <h1 class="h4 fw-bold mb-4">My wish list</h1>
                    <div class="d-flex align-items-center mb-4">
                        <input class="form-control me-2" placeholder="Search query" type="text"/>
                        <select class="form-select me-2">
                            <option>All types</option>
                        </select>
                        <select class="form-select me-2">
                            <option>All categories</option>
                        </select>
                        <button class="btn btn-primary">Filter</button>
                    </div>
                    <div class="row g-4">
                        <!-- Product Card -->
                        @foreach ($wishlists as $wishlist)
                        <div class="col-md-2">
                            <div class="card">
                                <img src="{{ asset('storage/products/'. $wishlist->product->productMedia->thumbnail) }}" class="card-img-top" alt="{{ $wishlist->product->title }}">
                                <div class="card-body text-start p-2">
                                    <h6 class="card-title text-danger">{{ $wishlist->product->price }}
                                        <span>
                                            <del class="text-secondary">$9.00</del>
                                            <span class="text-small text-danger" style="font-size: 12px">-40%</span>
                                        </span>
                                    </h6>
                                    <p class="card-text text-truncate">{{ $wishlist->product->title }}</p>
                                    <div class="d-flex align-items-center justify-content-evenly">
                                        <div class="">
                                            <i class="fa-solid fa-less-than"></i>
                                            <i class="fa-solid fa-greater-than"></i>
                                        </div>
                                        <a href="/cart" class="icon-link">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                        <input type="checkbox" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        
                        <!-- Repeat Product Card 11 more times -->
                        <!-- You can copy the above block for additional product cards -->
                    </div>

                    <div class="mt-5">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">2</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn btn-sm btn-danger me-2">Remove selected</button>
                        <button class="btn btn-sm btn-primary me-2">Add selected models to cart</button>
                        <button class="btn btn-sm btn-success me-2">Add all models to cart</button>
                        <button class="btn btn-sm btn-secondary">Go to my purchases</button>
                    </div>
                </div>
                
            </main>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        
    </script>
@endsection
