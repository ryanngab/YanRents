{{-- awal content --}}
<div class="body-main h-100">
    <div class="row g-0 h-100">
        {{-- <div class="collapse navbar-collapse" id="navbarScroll">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div> --}}
        <div class="sidebar col-lg-2 collapse d-lg-block" id="openClose">
            <a href="/dash"
            @if (request()->route()->uri == '/dashboard') class="active"
                @endif> <i class="bi bi-house p-2"></i>Dashboard</a>
            <a href="/dashboard/user"
            @if (request()->route()->uri == '/dashboard/user') class="active"
                @endif> <i class="bi bi-person p-2"></i> Peminjam</a>
            @can('Admin')

                <a href="/dashboard"
                @if (request()->route()->uri == '/dashboard/project') class="active"
                    @endif> <i class="bi bi-book p-2"></i>Project</a>
                <a href="/dashboard/category
                "@if (request()->route()->uri == '/dashboard/category') class="active"
                    @endif> <i class="bi bi-tags p-2"></i>Category</a>
            @endcan
            {{-- <div class="dropdown" style="margin-top: 290px">
                <hr>
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>{{ auth()->user()->name}}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" id="">
                    <li><a class="dropdown-item" href="/">Website</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt te"></i></i> Logout</button>
                    </form>
                </ul>
            </div> --}}
        </div>
        <div class="content col-lg-10">
            @yield('content')
        </div>
    </div>
</div>
{{-- Akhir conten --}}

