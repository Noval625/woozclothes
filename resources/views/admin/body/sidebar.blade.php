<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                @php
                $id = Auth::user()->id;
                $admindata = App\Models\User::find($id);
                @endphp
                <img  class="rounded-circle avatar-xl" src="{{ (!empty($admindata->profile_image))? url('upload/admin_images/'.$admindata->profile_image):url('upload/no_image.webp') }}" alt="Card image cap">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->username  }}</h4>
                <span class="text-muted"><i class="align-middle font-size-14 text-success"></i>{{ Auth::user()->name  }}</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect" >
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.barang.index') }}" class=" waves-effect" >
                        <i class="ri-calendar-2-line"></i>
                        <span>Produk</span>
                    </a>
                </li>


                <li>
                    <a href="/" class="waves-effect" >
                        <i class="ri-numbers-fill"></i>
                        <span>Transaksi</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
