@extends('frontend.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/mymodel.css') }}">
@endsection


@section('content')
<!--  -->
<div class="container my-3">
    <div class="d-flex justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">CGTrue</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Model</li>
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
                <a href="/dashboard" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
                <a href="{{route('profile.upload')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-plus"></i>
                    Publishing
                </a>
                <a href="{{route('profile.myModel')}}" class="list-group-item py-3 list-group-item-action active" aria-current="true" style="font-size: 0.75rem;">
                    <i class="fa-solid fa-bolt"></i>
                    My Models
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
                <a href="{{route('profile.productReport')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action" style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-cube"></i>
                    Product Reports
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <main class="col-md-10 mb-5 ">
            <div class="border border-1 p-3">
                <div class="d-flex justify-content-between">
                    <div class="search-box">
                        <input type="text" class="form-control rounded" placeholder="Search" style="width: 256px;">
                        <button class="search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-secondary">View Drafts</button>
                        <a href=".{{route('profile.upload')}}.html" class="btn text-white" style="background-color: #ff8135;">Create New
                            Product</a>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <div class="search-box">
                        <select class="form-select">
                            <option selected>Actions</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="d-flex">
                        <select class="form-select border border-0">
                            <option selected>Status:All</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select border border-0">
                            <option selected>Price: All</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select border border-0">
                            <option selected>File format: All</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="mt-3">
                    <table class="table border border-1">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th>Actions</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Categories</th>
                                <th>Price</th>
                                <th>Date Added</th>
                                <th>Date Modified</th>
                                <th>Sales</th>
                                <th>Total Sales</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-success px-2 py-1 rounded">Online</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-success px-2 py-1 rounded">Online</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-success px-2 py-1 rounded">Online</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-success px-2 py-1 rounded">Online</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-success px-2 py-1 rounded">Online</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-danger px-2 py-1 rounded">Suspened</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-success px-2 py-1 rounded">Online</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-success px-2 py-1 rounded">Online</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-warning px-2 py-1 rounded">Suspened awatting review</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-success px-2 py-1 rounded">Online</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <i class="fa-solid fa-eye"></i>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </td>
                                <td>122024</td>
                                <td>Table Lamp</td>
                                <td>Table Lamp</td>
                                <td>$9.00</td>
                                <td>Nov 02, 2024</td>
                                <td>Nov 02, 2024</td>
                                <td>3</td>
                                <td>$72.00</td>
                                <td>
                                    <span class="text-bg-success px-2 py-1 rounded">Online</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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