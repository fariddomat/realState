
<nav class="navbar navbar-dark navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-light" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-sm text-light active text-capitalize" aria-current="page">{{ str_replace('-', ' ', Route::currentRouteName()) }}</li>
            </ol>
            <h6 class="font-weight-bolder mb-0 text-light  text-capitalize">{{ str_replace('-', ' ', Route::currentRouteName()) }}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            </div>

            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <form method="POST" action="{{ route('logout') }}" class="" id="logout-form">
                        @csrf
                    <button type="submit"  class="nav-link text-body font-weight-bold px-0">

                        <i class="material-icons opacity-10">logout</i>
                    </button>
                    </form>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
