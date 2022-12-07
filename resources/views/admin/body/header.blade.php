<header id="page-topbar">
    <div class="navbar-header" style="background-color: black">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box"  >

                <h2 class="mt-3 " style="color: white;"  >WOOZATH</h2>
            </div>

            {{-- <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button> --}}

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>

        </div>

        <div class="d-flex">


            {{-- <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle avatarx-1 " width="70px" style="margin-right: -17px" src="{{ asset('logo/logoavg.png') }}" alt="">
                    <span class="d-none d-xl-inline-block">{{ Auth::user()->username }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button> --}}
                @php
            $id = Auth::user()->id;
            $admindata = App\Models\User::find($id);
            @endphp
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ (!empty($admindata->profile_image))? url('upload/admin_images/'.$admindata->profile_image):url('upload/no_image.png') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{$admindata->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                    <a class="dropdown-item" href="{{ route('change.password') }}"><i class="ri-key-line align-middle me-1"></i> Change Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                    {{-- <form action="{{ route('logout') }}" method="POST">
                        @csrf
                            <button class="dropdown-item text-danger" >
                                <i class="ri-shut-down-line align-middle me-1 text-danger"></i>
                                 <span>Logout</span>
                            </button>
                    </form> --}}
                </div>
            {{-- </div> --}}
        </div>
    </div>
</header>
