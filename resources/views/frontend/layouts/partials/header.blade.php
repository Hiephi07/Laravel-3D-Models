<header class="py-2">
    <div class="container-fluid px-4">
        <div class="row align-items-center">
            <div class="col-auto">
                <a href="/" class="logo">
                    <img src="path/to/logo.png" alt="CGTrue" height="30">
                </a>
            </div>
            <div class="col border-3 border-end pe-3">
                <div class="d-flex justify-content-between">
                    <div class="dropdown me-3">
                        <button class="btn btn-outline-secondary dropdown-toggle border-0" type="button">
                            3D MODELS
                        </button>
                    </div>
                    <div class="search-box flex-grow-1">
                        <input type="text" class="form-control" placeholder="Search 3D models">
                        <button class="search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    @if (!auth()->check())
                    <div class="d-flex gap-3">
                        <a href="{{route('register')}}" class="btn btn-outline-primary rounded-pill">Register</a>
                        <a href="{{route("login")}}" class="btn btn-outline-primary rounded-pill" style="min-width: 80px;">Login</a>
                    </div>
                    @else 
                    <div class="">
                        <button class="btn btn-outline-primary">Upload model</button>
                        <a href="#" class="icon-link ms-3">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge">0</span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            @if (auth()->check())
            <div class="col-auto">
                <div class="d-flex align-items-center gap-4">

                    <div class="header-icons">
                        <a href="#" class="icon-link">
                            <i class="far fa-heart"></i>
                            <!-- <span class="badge">0</span> -->
                        </a>
                        <a href="#" class="icon-link">
                            <i class="fa-regular fa-envelope"></i>
                            <!-- <span class="badge">0</span> -->
                        </a>
                        <a href="#" class="icon-link">
                            <i class="fa-regular fa-bell"></i>
                            <!-- <span class="badge">0</span> -->
                        </a>
                        <div class="dropdown">
                            <button class="btn bg-transparent border-0 dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="far fa-user"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li class="mt-2">
                                    <a class="dropdown-item d-flex align-items-center" href="{{route('profile.dashboard')}}">
                                        <i class="fa-solid fa-house me-2" style="width: 20px;"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <hr>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="fa-solid fa-plus me-2" style="width: 20px;"></i>
                                        Publishing
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="fa-solid fa-gear me-2" style="width: 20px;"></i>
                                        My Model
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="fa-solid fa-dollar-sign me-2" style="width: 20px;"></i>
                                        My Sales
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="fa-solid fa-plus me-2" style="width: 20px;"></i>
                                        Public Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="fa-solid fa-plus me-2" style="width: 20px;"></i>
                                        Publishing
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="fa-solid fa-plus me-2" style="width: 20px;"></i>
                                        <i class="fa-solid fa-bookmark"></i>
                                        <i class="fa-regular fa-address-book"></i>
                                        Publishing
                                    </a>
                                </li>
                                <li class="mt-2">
                                    <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</header>