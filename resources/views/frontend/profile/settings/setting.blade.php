@extends('frontend.layouts.app')

@section('content')
<!--  -->
<div class="container my-3">
    <div class="d-flex justify-content-between">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">CGTrue</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
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
                <a href="{{route('profile.setting')}}" class="list-group-item py-3 list-group-item-action active" aria-current="true" style="font-size: 0.75rem;">
                    <i class="fa-solid fa-bolt"></i>
                    Settings
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
                <div class="">
                    <h3 class="mt-2">Account Settings</h3>
                    <p>Update your profile info, change password notification settings</p>
                </div>
                @if (session('msg'))
                    <div class="alert alert-{{ session('alert-type') }} mt-3">
                        {{ session('msg') }}
                    </div>
                @endif

                <div class="mt-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">MAIN SETTINGS</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="link1-tab" data-bs-toggle="tab" href="#link1" role="tab"
                                aria-controls="link1" aria-selected="false">PAYMENT AGREEMENT</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="link2-tab" data-bs-toggle="tab" href="#link2" role="tab"
                                aria-controls="link2" aria-selected="false">CHANGE PASSWORD</a>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h5 class="my-4">Account Settings</h5>
                            <form action="{{route('profile.setting.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"><strong>Email</strong></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        value="{{auth()->user()->email}}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><strong>Birthday</strong></label>
                                    <input type="date" class="form-control" name="birthday" 
                                    value="{{ auth()->user()->metadata?->birthday ? \Carbon\Carbon::parse(auth()->user()->metadata?->birthday)->format('Y-m-d') : '' }}">
                                    @error('birthday')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><strong>Your Avatar</strong></label>
                                    <div class="d-flex">
                                        <img src="{{asset('storage/avatars/' . auth()->user()->metadata?->avatar)}}" width="100" height="100" alt="">
                                        <div class="ms-3">
                                            <p><strong>Note: </strong> the avatar should note exceed 100x100 dimensions
                                                (in pixels) and it sholud be smaller than 1 MB in file size. Accepable
                                                formats: jpg, jpeg.</p>
                                            <label for="upload-avatar" class="btn btn-primary">Upload avatar</label>
                                            <input type="file" id="upload-avatar" name="avatar" style="display: none;">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <h5 class="my-4">Professional Information</h5>

                                <div class="mb-3">
                                    <label for="yourself" class="form-label"><strong>A few sentences about
                                            yourself</strong></label>
                                    <textarea style="height: 128px;" name="about" class="form-control">{{ auth()->user()->metadata?->about }}</textarea>
                                    @error('about')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <hr>

                                <h5 class="my-4">Personal Information</h5>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                        <strong>Your Name</strong>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="name" value="{{auth()->user()->name}}">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                        <strong>Company Name</strong>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="company" value="{{ auth()->user()->metadata?->company }}">
                                        @error('company')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                        <strong>Address 1</strong>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address1" id="inputEmail3"
                                            value="{{ auth()->user()->metadata?->address1 }}">
                                        @error('address1')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                        <strong>Address 2</strong>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address2" id="inputEmail3" value="{{ auth()->user()->metadata?->address2 }}">
                                        @error('address2')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                        <strong>City</strong>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="city" value="{{ auth()->user()->metadata?->city }}">
                                        @error('city')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                        <strong>Country</strong>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="country" value="{{ auth()->user()->metadata?->country }}">
                                        @error('country')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                        <strong>Province</strong>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="province" value="{{ auth()->user()->metadata?->province }}">
                                        @error('province')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                        <strong>Postal Code</strong>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="postcode" value="{{ auth()->user()->metadata?->postal_code }}">
                                        @error('postcode')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">
                                        <strong>Telephone</strong>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="telephone" value="{{ auth()->user()->metadata?->telephone }}">
                                        @error('telephone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <hr>

                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary" type="submit">Update Information</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="link1" role="tabpanel" aria-labelledby="link1-tab">
                            <h5 class="my-4">Artist Account Settings</h5>
                            <p class="m-0">ATTENTION: If you make changes to your payment information, then potentially
                                you may not be paid until the next payment cycle.</p>
                            <p>Example: For payment information changed on January 15th, you may not receive your
                                royalties until March 1st.</p>
                            <form>
                                <div class="card" style="width: 512px;">
                                    <div class="card-header">
                                        <strong>Payment Processing</strong>
                                    </div>
                                    <div class="card-body" style="text-align: left;">
                                        <h5 class="card-title">PAYMENT OPTION:</h5>
                                        <div class="form-check my-2">
                                            <input class="form-check-input" type="radio" checked name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Paypal
                                            </label>
                                        </div>
                                        <div class="">
                                            <input type="text" class="form-control" value="abcxyz@gmail.com">
                                        </div>
                                        <p class="card-text mt-3"><strong>WHEN: Owed at least $10</strong></p>
                                        <p style="font-size: 12px;">Your account balance are paid monthly on the first
                                            business day at the month it the first is on a werkend or a holiday, you
                                            will he paird on the next business day.</p>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center my-5">
                                    <button class="btn btn-primary" type="button">Update Information</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="link2" role="tabpanel" aria-labelledby="link2-tab">
                            <h5 class="mt-4">Change Password</h5>
                            <p class="m-0">Warning: we will never ask for your password via email or by other means.
                                Please make sure you keep your password safe.</p>
                            <form action="{{ route('profile.change-password') }}" method="POST" class="mt-4">
                                @csrf
                            
                                <div class="mb-3">
                                    <label for="current_password" class="form-label">Current password</label>
                                    <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
                                            id="current_password" name="current_password" required>
                                    @error('current_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror" 
                                            id="new_password" name="new_password" required>
                                    @error('new_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            
                                <div class="mb-3">
                                    <label for="new_password_confirmation" class="form-label">Password confirmation</label>
                                    <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" 
                                            id="new_password_confirmation" name="new_password_confirmation" required>
                                    @error('new_password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            
                                <div class="d-flex justify-content-center my-5">
                                    <button class="btn btn-primary" type="submit">Change Password</button>
                                </div>
                            </form>
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