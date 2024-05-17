@extends('Dashboard.master')
@section('content')
    <!-- ====================================
                                                                                              ——— PAGE WRAPPER
                                                                                              ===================================== -->
    <div class="page-wrapper">

        <!-- Header -->
        @include('Dashboard.header_page', ['title_page' => 'Team'])
        <!-- ====================================
                                                                                    ——— CONTENT WRAPPER
                                                                                    ===================================== -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="content-wrapper">
            <div class="content">
                <div class="card card-default">
                    <div class="card-header align-items-center px-3 px-md-5">
                        <h2>Contacts</h2>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-contact"> Add
                            Contact
                        </button>
                    </div>

                    <div class="card-body px-3 px-md-5">
                        <div class="row">
                            @foreach ($admins as $admin)
                                <div class="col-lg-6 col-xl-4">
                                    <div class="card card-default p-4">
                                        <a href="javascript:0" class="media text-secondary" data-toggle="modal"
                                            data-target="#modal-contact">
                                            <img src="{{ asset('build/assets/newsPage/images/AdobeStock_665610143_Preview.jpeg') }}"
                                                width="100px" height="100px" class="mr-3 img-fluid rounded"
                                                alt="Avatar Image">

                                            <div class="media-body">
                                                <h5 class="mt-0 mb-2 text-dark">{{ $admin->name }} </h5>
                                                <ul class="list-unstyled text-smoke">
                                                    <li class="d-flex">
                                                        <i class="mdi mdi-map mr-1"></i>
                                                        <span>{{ $admin->role = 1 ? 'Admin' : 'User' }}</span>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="mdi mdi-email mr-1"></i>
                                                        <span>{{ $admin->email }}</span>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="mdi mdi-phone mr-1"></i>
                                                        <span>Null</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <!-- Contact Modal -->
                <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header justify-content-end border-bottom-0">
                                <button type="button" class="btn-edit-icon" data-dismiss="modal" aria-label="Close">
                                    <i class="mdi mdi-pencil"></i>
                                </button>

                                <div class="dropdown">
                                    <button class="btn-dots-icon" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                    </div>
                                </div>

                                <button type="button" class="btn-close-icon" data-dismiss="modal" aria-label="Close">
                                    <i class="mdi mdi-close"></i>
                                </button>
                            </div>

                            <div class="modal-body pt-0">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="profile-content-left px-4">
                                            <div class="card text-center px-0 border-0">
                                                <div class="card-img mx-auto">
                                                    <img class="rounded-circle" src="images/user/u6.jpg" alt="user image">
                                                </div>

                                                <div class="card-body">
                                                    <h4 class="py-2">Albrecht Straub</h4>
                                                    <p>Albrecht.straub@gmail.com</p>
                                                    <a class="btn btn-primary btn-pill btn-lg my-4"
                                                        href="javascript:void(0)">Follow</a>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between ">
                                                <div class="text-center pb-4">
                                                    <h6 class="pb-2">1503</h6>
                                                    <p>Friends</p>
                                                </div>

                                                <div class="text-center pb-4">
                                                    <h6 class="pb-2">2905</h6>
                                                    <p>Followers</p>
                                                </div>

                                                <div class="text-center pb-4">
                                                    <h6 class="pb-2">1200</h6>
                                                    <p>Following</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="contact-info px-4">
                                            <h4 class="mb-1">Contact Details</h4>
                                            <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                                            <p>Albrecht.straub@gmail.com</p>
                                            <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                            <p>+99 9539 2641 31</p>
                                            <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                                            <p>Nov 15, 1990</p>
                                            <p class="text-dark font-weight-medium pt-4 mb-2">Event</p>
                                            <p>Lorem, ipsum dolor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Contact Button  -->
                <div class="modal fade" id="modal-add-contact" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <form action="{{ route('dashboard.team') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header px-4">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Create New Contact</h5>
                                </div>
                                <div class="form-group row mb-6">
                                    <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                                    <div class="col-sm-8 col-lg-10">
                                        <div class="custom-file mb-1">
                                            <input type="file"
                                                class="custom-file-input @error('coverImage') is-invalid @enderror"
                                                id="coverImage" name="coverImage" required>
                                            <label class="custom-file-label" for="coverImage">Choose file...</label>
                                            @error('coverImage')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="firstName">First name</label>
                                            <input type="text"
                                                class="form-control @error('firstName') is-invalid @enderror"
                                                id="firstName" name="firstName" value="{{ old('firstName') }}" required>
                                            @error('firstName')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="lastName">Last name</label>
                                            <input type="text"
                                                class="form-control @error('lastName') is-invalid @enderror"
                                                id="lastName" name="lastName" value="{{ old('lastName') }}" required>
                                            @error('lastName')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="userName">User name</label>
                                            <input type="text"
                                                class="form-control @error('userName') is-invalid @enderror"
                                                id="userName" name="userName" value="{{ old('userName') }}" required>
                                            @error('userName')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="password">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" name="password" value="{{ old('password') }}" required>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer px-4">
                                    <button type="button" class="btn btn-smoke btn-pill"
                                        data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary btn-pill">Save Contact</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
