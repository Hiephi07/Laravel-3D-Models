@extends('frontend.layouts.app')

@section('content')
    <!--  -->
<div class="container my-3">
    <div class="d-flex justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">CGTrue</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Reports</li>
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
                <a href="{{route('profile.purchase')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-box-archive"></i>
                    Purchases
                </a>
                <a href="{{route('profile.saleReport')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-dollar-sign"></i>
                    Sales Reports
                </a>
                <a href="{{route('profile.productReport')}}" class="list-group-item py-3 list-group-item-action active" aria-current="true" style="font-size: 0.75rem;">
                    <i class="fa-solid fa-cube"></i>
                    Product Reports
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <main class="col-md-10 mb-5 ">
            <div class="border border-1 p-3">
                <div class="">
                    <h3 class="mt-2">Top Sellers</h3>
                    <p>See your top selling products over any timeframe.</p>
                </div>

                <form class="d-flex align-items-center justify-content-center" role="search" style="width: 50%;">
                    <div class="">
                        <p class="mb-0 me-1" style="width: 96px;"><b>Date Range: </b></p>
                    </div>
                    <input type="date" name="" id="" class="form-control">
                    <b class="mx-2"> - </b>
                    <input type="datetime" name="" id="" class="form-control" value="10/10/2024">
                    <button class="btn btn-outline-success ms-2" type="button">Search</button>
                </form>


                <div class="mt-3 row">
                    <div class="col-8">
                        <table class="table border border-1 align-middle">
                            <thead>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Total Sales</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>
                                <tr>
                                    <td>894987</td>
                                    <td>Apple iMac With Retina 5K Display</td>
                                    <td>$90.29</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <!-- Pagination -->
                                        <div class="d-flex justify-content-between">
                                            <!-- Pagination on the left -->
                                            <nav aria-label="Table Pagination">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled">
                                                        <span class="page-link">Previous</span>
                                                    </li>
                                                    <li class="page-item active" aria-current="page">
                                                        <span class="page-link">1</span>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>

                                            <!-- Buttons on the right -->
                                            <div class="d-flex">
                                                <button class="btn btn-outline-primary btn-sm ms-2 px-3">Export</button>
                                                <div class="d-flex align-items-center ms-2">
                                                    <label for="perPage" class="me-2">Per page:</label>
                                                    <select id="perPage" class="form-select form-select-sm"
                                                        style="width: auto;">
                                                        <option value="10">10</option>
                                                        <option value="15" selected>15</option>
                                                        <option value="20">20</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
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