@extends('frontend.layouts.app')

@section('content')
    <!--  -->
<div class="container my-3">
    <div class="d-flex justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>

        <a class="btn btn-primary" href="#" role="button">Upload 3D Model</a>
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
                <a href="/dashboard" class="list-group-item py-3 list-group-item-action active" aria-current="true"
                    style="font-size: 0.75rem;">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
                <a href="{{route('profile.upload')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action"
                    style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-plus"></i>
                    Publishing
                </a>
                <a href="{{route('profile.myModel')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action"
                    style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-gear"></i>
                    My Model
                </a>
                <a href="{{route('profile.setting')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action"
                    style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-gear"></i>
                    Setting
                </a>
                <a href="{{route('profile.purchase')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action"
                    style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-box-archive"></i>
                    Purchases
                </a>
                <a href="{{route('profile.saleReport')}}" class="border border-0 py-3 text-white list-group-item list-group-item-action"
                    style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-dollar-sign"></i>
                    Sales Reports
                </a>
                <a href="{{route('profile.productReport')}}"
                    class="border border-0 py-3 text-white list-group-item list-group-item-action"
                    style="font-size: 0.75rem; background-color: #293541;">
                    <i class="fa-solid fa-cube"></i>
                    Product Reports
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <main class="col-md-10 mb-5 px-md-4">

            <div class="row">
                <div class="col-md-6">
                    <div class="bd-callout my-3 ">
                        <strong>Heads up!</strong> As of v5.3.0, the <code>alert-variant()</code> Sass mixin is
                        </a>.
                    </div>

                    <div class="border border-2 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <b>Earning <i class="fs-6 fa-solid fa-question" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Tooltip on top"></i></b>

                                <div class="mt-2">
                                    <b class="fs-5">$69.27 <span class="fs-6 text-success">+$6.74</span></b>
                                    <p>This month</p>
                                </div>
                            </div>
                            <div class="">
                                <select class="form-select border border-0 fw-bold" style="width: auto;">
                                    <option value="1" selected>6 months</option>
                                    <option value="2">9 months</option>
                                    <option value="3">12 months</option>
                                </select>

                                <div class="" style="padding-left: .75rem;">
                                    <b class="fs-5">$3,834.79</b>
                                    <p>Lifetime</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">



                        </div>

                        <!-- Thẻ canvas để vẽ biểu đồ -->
                        <canvas id="myBarChart"></canvas>
                    </div>

                    <div class="border border-2 mt-3 p-3">
                        <h5 class="text-center mt-2">Sales Activity</h5>

                        <hr>

                        <div class="table-container">
                            <table class="table table-striped" style="font-size: .7rem;">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                    <tr>
                                        <td>2024-12-12</td>
                                        <td>Apple iMac With Retina 5K Display</td>
                                        <td>France</td>
                                        <td>$ 50.72</td>
                                        <td>$ 28.40</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bd-callout my-3 ">
                        <strong>Heads up!</strong> As of v5.3.0, the <code>alert-variant()</code> Sass mixin is
                        </a>.
                    </div>

                    <div class="border border-2 mt-3 p-3">
                        <p>Level Progress</p>
                        <table class="table align-middle" style="font-size: .6rem;">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="text-primary fa-solid fa-check"></i>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/img/bronze.png')}}" width="36" height="36" alt=""
                                            srcset="">
                                    </td>
                                    <td>
                                        Iron <br>
                                        100 points - <span>Has the confidence for trying out new things.</span>
                                    </td>
                                    <td><b>70%</b> earing rate</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
crossorigin="anonymous"></script>


<script>
// Lấy phần tử canvas
var ctx = document.getElementById('myBarChart').getContext('2d');

// Khởi tạo biểu đồ Bar Chart
var myBarChart = new Chart(ctx, {
    type: 'line', // Loại biểu đồ (cột)
    data: {
        labels: ['January', 'February', 'March', 'April', 'May'], // Nhãn trên trục X
        datasets: [{
            label: 'Sales Data', // Tiêu đề cho dãy dữ liệu
            data: [500, 800, 350, 700, 550], // Dữ liệu cho biểu đồ
            fill: false,
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Màu nền cột
            borderColor: 'rgba(54, 162, 235, 1)', // Màu viền cột
            borderWidth: 1 // Độ dày viền cột
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true // Đảm bảo trục Y bắt đầu từ 0
            }
        }
    }
});
</script>
@endsection