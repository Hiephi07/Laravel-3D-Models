@extends('frontend.layouts.app')

@section('content')
    <!--  -->
<div class="container my-3">
    <div class="d-flex justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">CGTrue</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Purchases</li>
            </ol>
        </nav>

    </div>
</div>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar text-white p-0" style="height: auto; background-color: #293541;">
            <div class="d-flex flex-column align-items-center my-5">
                <img src="{{asset('assets/img/100.png')}}" class="rounded-circle" alt="Creator Avatar">
                <div>
                    <h5 class="my-3 text-center">GAN Studio</h5>
                </div>
            </div>

            <div class="list-group">
               <a href="/dashboard" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
                <a href="{{route('profile.upload')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-plus"></i>
                    Publishing
                </a>
                <a href="{{route('profile.myModel')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-gear"></i>
                    My Model
                </a>
                <a href="{{route('profile.setting')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-gear"></i>
                    Setting
                </a>
                <a href="{{route('profile.purchase')}}" class="list-group-item py-3 list-group-item-action active" aria-current="true" style="font-size: 0.75rem;">
                    <i class="fa-solid fa-bolt"></i>
                    Purchases
                </a>
                <a href="{{route('profile.saleReport')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-dollar-sign"></i>
                    Sales Reports
                </a>
                <a href="{{route('profile.productReport')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-cube"></i>
                    Product Reports
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <main class="col-md-10 mb-5 ">
            <div class="border border-1 p-3">
                <div class="">
                    <h3 class="mt-2">My Purchases</h3>
                    <p>Browse through your purchased items</p>
                </div>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search your downloads"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="button">Search</button>
                </form>

                <div class="d-flex justify-content-between mt-3">
                    <div class="search-box">
                        <select class="form-select">
                            <option selected>All marketplaces</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <label class="btn btn-outline-dark" for="btncheck1">Date Purchased</label>

                        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                        <label class="btn btn-outline-dark" for="btncheck2">Title</label>

                        <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                        <label class="btn btn-outline-dark" for="btncheck3">My Rating</label>

                        <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                        <label class="btn btn-outline-dark" for="btncheck4">Recent Updates</label>
                    </div>


                </div>

                <div class="mt-3 row">
                    <div class="col-6">
                        <table class="table border border-1 align-middle">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="https://bizweb.dktcdn.net/100/017/070/products/pvn2774-75-cup-bong-da-202-vang-1671435810.jpg?v=1672021383987"
                                            alt="" width="128" height="128">
                                    </td>
                                    <td>
                                        <strong>Premier League Trophy</strong>
                                        <p class="text-primary mt-1">Regular license</p>
                                    </td>
                                    <td>
                                        <button class="btn btn-success" style="width: 156px;">
                                            Download
                                            <i class="fa-solid fa-down-long"></i>
                                        </button>
                                        <div class="card mt-2" style="width: 156px;">
                                            <div class="card-body">
                                                <!-- <h5 class="card-title">Card title</h5> -->
                                                <h6 class="card-subtitle mb-2 text-body-secondary">Rate this item</h6>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="https://bizweb.dktcdn.net/100/017/070/products/pvn2774-75-cup-bong-da-202-vang-1671435810.jpg?v=1672021383987"
                                            alt="" width="128" height="128">
                                    </td>
                                    <td>
                                        <strong>Premier League Trophy</strong>
                                        <p class="text-primary mt-1">Regular license</p>
                                    </td>
                                    <td>
                                        <button class="btn btn-success" style="width: 156px;">
                                            Download
                                            <i class="fa-solid fa-down-long"></i>
                                        </button>
                                        <div class="card mt-2" style="width: 156px;">
                                            <div class="card-body">
                                                <!-- <h5 class="card-title">Card title</h5> -->
                                                <h6 class="card-subtitle mb-2 text-body-secondary">Rate this item</h6>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="https://bizweb.dktcdn.net/100/017/070/products/pvn2774-75-cup-bong-da-202-vang-1671435810.jpg?v=1672021383987"
                                            alt="" width="128" height="128">
                                    </td>
                                    <td>
                                        <strong>Premier League Trophy</strong>
                                        <p class="text-primary mt-1">Regular license</p>
                                    </td>
                                    <td>
                                        <button class="btn btn-success" style="width: 156px;">
                                            Download
                                            <i class="fa-solid fa-down-long"></i>
                                        </button>
                                        <div class="card mt-2" style="width: 156px;">
                                            <div class="card-body">
                                                <!-- <h5 class="card-title">Card title</h5> -->
                                                <h6 class="card-subtitle mb-2 text-body-secondary">Rate this item</h6>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="https://bizweb.dktcdn.net/100/017/070/products/pvn2774-75-cup-bong-da-202-vang-1671435810.jpg?v=1672021383987"
                                            alt="" width="128" height="128">
                                    </td>
                                    <td>
                                        <strong>Premier League Trophy</strong>
                                        <p class="text-primary mt-1">Regular license</p>
                                    </td>
                                    <td>
                                        <button class="btn btn-success" style="width: 156px;">
                                            Download
                                            <i class="fa-solid fa-down-long"></i>
                                        </button>
                                        <div class="card mt-2" style="width: 156px;">
                                            <div class="card-body">
                                                <!-- <h5 class="card-title">Card title</h5> -->
                                                <h6 class="card-subtitle mb-2 text-body-secondary">Rate this item</h6>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="https://bizweb.dktcdn.net/100/017/070/products/pvn2774-75-cup-bong-da-202-vang-1671435810.jpg?v=1672021383987"
                                            alt="" width="128" height="128">
                                    </td>
                                    <td>
                                        <strong>Premier League Trophy</strong>
                                        <p class="text-primary mt-1">Regular license</p>
                                    </td>
                                    <td>
                                        <button class="btn btn-success" style="width: 156px;">
                                            Download
                                            <i class="fa-solid fa-down-long"></i>
                                        </button>
                                        <div class="card mt-2" style="width: 156px;">
                                            <div class="card-body">
                                                <!-- <h5 class="card-title">Card title</h5> -->
                                                <h6 class="card-subtitle mb-2 text-body-secondary">Rate this item</h6>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-5 float-end">
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
        </main>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    const quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $("#tags").select2({
        tags: true,
    })
</script>
@endsection