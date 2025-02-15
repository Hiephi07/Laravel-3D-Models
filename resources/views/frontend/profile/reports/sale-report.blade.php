@extends('frontend.layouts.app')

@section('content')
    <!--  -->
<div class="container my-3">
    <div class="d-flex justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">CGTrue</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Sales</li>
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
                <a href="{{route('profile.saleReport')}}" class="list-group-item py-3 list-group-item-action active" aria-current="true" style="font-size: 0.75rem;">
                    <i class="fa-solid fa-box-archive"></i>
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
                    <h3 class="mt-2">My Sales</h3>
                    <p>An overview of your sales, monthly summary, payment information and more</p>
                </div>

                <div class="mt-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">SALES DETAILS</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="link1-tab" data-bs-toggle="tab" href="#link1" role="tab"
                                aria-controls="link1" aria-selected="false">MONTIILY SUMMARY</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="link2-tab" data-bs-toggle="tab" href="#link2" role="tab"
                                aria-controls="link2" aria-selected="false">PAYMENTS INFORMATION</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="link3-tab" data-bs-toggle="tab" href="#link3" role="tab"
                                aria-controls="link3" aria-selected="false">COUPONS</a>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row mt-3">
                                <div class="col-8 d-flex justify-content-between">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-file"></i>
                                        Generate report
                                    </button>
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label me-2"><strong>Year:
                                            </strong></label>
                                        <select class="form-select" style="width: auto;">
                                            <option value="1">2024</option>
                                            <option value="2">2023</option>
                                            <option value="3">2022</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label me-3"><strong>Month:
                                            </strong></label>
                                        <select class="form-select" style="width: auto;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <table class="table table-bordered align-middle">
                                        <thead>
                                            <tr>
                                                <th>OID</th>
                                                <th>Purchased</th>
                                                <th>Product</th>
                                                <th>Buyer</th>
                                                <th>Country</th>
                                                <th>Origin Price</th>
                                                <th>Sold For</th>
                                                <th>Payment Processing</th>
                                                <th>Earning Rate</th>
                                                <th>Final Earning</th>
                                                <th>Final Payout</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>
                                            <tr>
                                                <td>4574332</td>
                                                <td>2024-11-11</td>
                                                <td>
                                                    <a href="">Vondom Ibiza Sun Lounger</a>
                                                </td>
                                                <td>
                                                    <a href="">hello-168</a>
                                                </td>
                                                <td>Germany</td>
                                                <td>$79.00</td>
                                                <td>$59.00</td>
                                                <td>$2.13</td>
                                                <td>80%</td>
                                                <td>$6.74</td>
                                                <td>$6.74</td>
                                            </tr>

                                        </tbody>
                                    </table>

                                    <nav aria-label="Page navigation example" class="mt-5 float-end">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="link1" role="tabpanel" aria-labelledby="link1-tab">
                            <div class="row mt-3">
                                <div class="col-8 d-flex justify-content-between">
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label me-2"><strong>Year:
                                            </strong></label>
                                        <select class="form-select" style="width: auto;">
                                            <option value="1">2024</option>
                                            <option value="2">2023</option>
                                            <option value="3">2022</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <table class="table table-bordered align-middle">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Sales</th>
                                                <th>Revenue</th>
                                                <th>Avg.Earning Rate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2024 November</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 October</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 September</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 August</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 July</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 June</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 May</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 April</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 March</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 February</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                            <tr>
                                                <td>2024 January</td>
                                                <td>2</td>
                                                <td>$10.73</td>
                                                <td>73%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="link2" role="tabpanel" aria-labelledby="link2-tab">
                            <div class="row mt-3">
                                <div class="col-8 d-flex justify-content-between">
                                    <div class="row">
                                        <label for="staticEmail" class="col-sm-4 col-form-label me-2"><strong>Year:
                                            </strong></label>
                                        <select class="form-select" style="width: auto;">
                                            <option value="1">2024</option>
                                            <option value="2">2023</option>
                                            <option value="3">2022</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <table class="table table-bordered align-middle">
                                        <thead>
                                            <tr>
                                                <th>Payment Date</th>
                                                <th>Payment Method</th>
                                                <th>Transaction ID</th>
                                                <th>Revenue</th>
                                                <th>Payout Fees</th>
                                                <th>Payout Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                            <tr>
                                                <td>2024-11-22</td>
                                                <td>Paypal</td>
                                                <td>5LBHSDF8934BE6</td>
                                                <td>$5.44</td>
                                                <td class="text-primary">$0.10</td>
                                                <td>$5.34</td>
                                                <td>Paid</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <nav aria-label="Page navigation example" class="mt-5 float-end">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="link3" role="tabpanel" aria-labelledby="link3-tab">
                            <h5 class="my-4">Couponize Your Sales</h5>
                            <p>Make your clients feel special - and do it with a new feature on CGTra can now generate y
                                coupons and offer them for your buyers.</p>
                            <p>I How does it work? You set the validity time and the size of the discon share your
                                unique pode anywhere you want - on your website, email, or any other channel. You can
                                later track how many times the coupon had been used.</p>
                            <p>Choose your sales strategy wisely - and eam more. Good luck with ys!</p>

                            <div class="mt-3">
                                <table class="table table-bordered align-middle">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Discount</th>
                                            <th>Valid until</th>
                                            <th>Times used</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>FRIEND02</td>
                                            <td>80.0%</td>
                                            <td>2017-07-08 (expired)</td>
                                            <td>0/1</td>
                                            <td>
                                                <button class="btn btn-danger"><i class="fa-solid fa-x"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary">Create new one!</button>
                                </div>
                            </div>
                        </div>
                    </div>
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