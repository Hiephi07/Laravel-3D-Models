@extends('frontend.layouts.app')

@section('content')
    <!--  -->
    <div class="container my-3">
        <div class="d-flex justify-content-between">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">CGTrue</a></li>
                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Model Upload</li>
                </ol>
            </nav>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-2 sidebar text-white p-0" style="height: auto; background-color: #293541;">
                <div class="d-flex flex-column align-items-center my-5">
                    <img src="{{ asset('assets/img/100.png') }}" class="rounded-circle" alt="Creator Avatar">
                    <div>
                        <h5 class="my-3 text-center">GAN Studio</h5>
                    </div>
                </div>

                <div class="list-group">
                    <a href="/dashboard" class="border border-0 py-3 text-white list-group-item list-group-item-action"
                        style="font-size: 0.75rem; background-color: #293541;">
                        <i class="fa-solid fa-house"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('profile.upload') }}"
                        class="border border-0 py-3 text-white list-group-item list-group-item-action active"
                        aria-current="true" style="font-size: 0.75rem;">
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
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-10 mb-5 px-md-4">
                @if (session('msg'))
                    <div class="alert alert-{{ session('alert-type') }} mt-3">
                        {{ session('msg') }}
                    </div>
                @endif
                <form action="{{route("profile.upload.handle")}}" enctype="multipart/form-data" method="POST" class="mb-3 mt-3">
                    @csrf
                    <div class="row border border-1">
                        <div class="col-md-8 p-3">
                            <h6>Upload files</h6>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Model file</label>
                                <input class="form-control" type="file" name="media_url" id="formFile">
                                @error('media_url')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile2" class="form-label">Thumbnail (1 max Minimum size:
                                    1200x1200px.)</label>
                                <input class="form-control" type="file" name="thumbnail" id="formFile2">
                                @error('thumbnail')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile3" class="form-label">Preview (12 max Minimum size:
                                    1920x1080px.)</label>
                                <input class="form-control" type="file" name="image_url" id="formFile3">
                                @error('image_url')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4"></div>
                    </div>

                    <div class="row border border-1 mt-3 py-3 px-2">
                        <h6>Details</h6>

                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Title <span
                                    class="text-danger">*</span></label>
                            <div class="d-flex justify-content-between">
                                <input type="text" name="title" class="form-control rounded-start rounded-0"
                                    id="exampleFormControlInput1">
                                <select class="form-select rounded-end rounded-0" name="type_model" aria-label="Default select example"
                                    style="width: auto;">
                                    <option value="3D model">3D model</option>
                                    <option value="3D print model">3D print model</option>
                                </select>
                            </div>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @error('type_model')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="">
                            <label for="exampleFormControlInput1" class="form-label">Description<span
                                    class="text-danger">*</span></label>
                            <div id="editor">Hello, World!</div>
                            <input type="hidden" name="description">
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="" style="margin-top: 96px;">
                            <label for="exampleFormControlInput1" class="form-label">Tags<span
                                    class="text-danger">*</span></label>
                            <!-- Tạo select với một vài lựa chọn ban đầu -->
                            <select class="form-control" id="tags" name="tags[]" multiple="multiple"></select>
                            @error('tags')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row border border-1 mt-3 py-3 px-2">
                        <h6>Categories and Subcategories</h6>

                        <div class="mb-5 ">
                            <div class="row">
                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Category <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="category_id" aria-label="Default select example">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="form-label">Sub Category <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" aria-label="Default select example">
                                        @foreach ($subCategories as $category)
                                            <option>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('sub_category')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border border-1 mt-3 py-3 px-2">
                        <h6>Pricing and license</h6>

                        <div class="mb-5 ">
                            <div class="row">
                                <div class="col-6 mt-3">
                                    <label for="exampleFormControlInput1" class="form-label">Price <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" name="price" class="form-control" value="">
                                    </div>
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6 mt-3">
                                    <label for="exampleFormControlInput1" class="form-label">License <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" name="license" aria-label="Default select example">
                                        <option value="fee" selected>Royalty Fee</option>
                                        <option value="free">Royalty Free</option>
                                    </select>
                                    @error('license')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border border-1 mt-3 py-3 px-2">
                        <p>Please note: </p>

                        <!-- Trường ẩn để gửi trạng thái -->
                        <input type="hidden" name="status" id="status" value="Draft">

                        <div class="input-group mb-3 d-flex justify-content-end">
                            <button class="btn btn-outline-secondary me-3" type="submit" style="min-width: 80px" 
                                    onclick="document.getElementById('status').value='Draft'">
                                Draft
                            </button>

                            <button class="btn btn-primary" type="submit" style="min-width: 80px" 
                                    onclick="document.getElementById('status').value='Publish'">
                                Publish
                            </button>
                        </div>
                    </div>
                </form>
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
        $(document).ready(function () {
            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],
                placeholder: "Enter tags",
                multiple: true
            });
        });
    </script>

    <script>
        document.querySelector('form').onsubmit = function () {
            document.querySelector('input[name="description"]').value = quill.root.innerHTML;
        };
    </script>
@endsection
