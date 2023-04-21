<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    {{-- <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar> --}}
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="EzyBank"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4 px-6">
            {{-- <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">weekend</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Today's Money</p>
                                <h4 class="mb-0">$53k</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than
                                lask week</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than
                                lask month</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">New Clients</p>
                                <h4 class="mb-0">3,462</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than
                                yesterday</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">payments</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Saldo</p>
                                <h4 class="mb-0"><button class="btn mb-0"><i class="material-icons opacity-10">refresh</i></button>R$103,30</h4>
                            </div>
                        </div>
                        <div class="card-footer p-1">
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row justify-content-between">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Conta: {{ $user->account }}</p>
                                <h4 class="text-sm mb-0">{{ $user->name }}</h4>
                            </div>
                        </div>
                        <div class="card-footer p-1">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">payments</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Saldo</p>
                                <h4 class="text-sm mb-0"><button class="btn mb-0 py-0"><i class="material-icons opacity-10">refresh</i></button>R$103,30</h4>
                                {{-- <h4 class="text-sm mb-0">GILDA THEREZINHA VARGAS RITZEL</h4> --}}
                            </div>
                        </div>
                        <div class="card-footer p-1">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="dark horizontal">
            <h5 class="card-subtitle mx-3 text-muted">Área Pix</h5>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card z-index-2 ">
                        <a href="#" class="cardbank">
                            <div class="card-header p-2"></div>
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <div class="container-fluid" style="text-align: center;">
                                    <div class="col ">
                                        <div class="row mb-4">
                                            <i class="fa-brands fa-pix fa-2xl" style="color: #2882EB"></i>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-0 " align-self="center">Fazer um PIX</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-2">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card z-index-2 ">
                        <a href="#" class="cardbank">
                            <div class="card-header p-2"></div>
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <div class="container-fluid" style="text-align: center;">
                                    <div class="col ">
                                        <div class="row mb-4">
                                            <i class="fa-solid fa-clone fa-2xl" style="color: #2882EB;"></i>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-0 " align-self="center">PIX Copia e Cola</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-2">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="card z-index-2 ">
                        <a href="#" class="cardbank">
                            <div class="card-header p-2"></div>
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <div class="container-fluid" style="text-align: center;">
                                    <div class="col ">
                                        <div class="row mb-4">
                                            <i class="fa-solid fa-money-check-dollar fa-2xl" style="color: #2882EB;"></i>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-0 " align-self="center">PIX com Dados da Conta</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-2">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card z-index-2 ">
                        <a href="#" class="cardbank">
                            <div class="card-header p-2"></div>
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <div class="container-fluid" style="text-align: center;">
                                    <div class="col ">
                                        <div class="row mb-4">
                                            <i class="fa-solid fa-money-bill-transfer fa-2xl" style="color: #2882EB;"></i>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-0 " align-self="center">Cobrança imediata</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-2">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card z-index-2 ">
                        <a href="#" class="cardbank">
                            <div class="card-header p-2"></div>
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <div class="container-fluid" style="text-align: center;">
                                    <div class="col ">
                                        <div class="row mb-4">
                                            <i class="fa-solid fa-flip-horizontal fa-key fa-2xl" style="color: #1d6df7;"></i>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-0 " align-self="center">Gerenciar chaves</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-2">
                            </div>
                        </a>
                    </div>
                </div>
                {{-- <div class="col-lg-4 mb-3">
                    <div class="card z-index-2 ">
                        <div class="card-header p-2">
                          </div>
                        <div class="card-body align-items-center d-flex justify-content-center">
                            <div class="container-fluid" style="text-align: center;">
                                <div class="col ">
                                    <div class="row">
                                        <i class="material-icons text-warning text-gradient" align-self="center">credit_card</i>
                                    </div>
                                    <div class="row">
                                        <h6 class="mb-0 " align-self="center">A DEFINIR</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-2">
                        </div>
                    </div>
                </div> --}}
            </div>
            <hr class="dark horizontal">
            <hr class="dark horizontal">
            <h5 class="card-subtitle mx-3 text-muted">Conta Bancária</h5>
            <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card z-index-2 ">
                        <a href="#" class="cardbank">
                            <div class="card-header p-2"></div>
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <div class="container-fluid" style="text-align: center;">
                                    <div class="col ">
                                        <div class="row mb-4">
                                            <i class="fa-solid fa-receipt fa-2xl" style="color: #2882EB;"></i>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-0 " align-self="center">Extrato</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-2">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card z-index-2 ">
                        <a href="#" class="cardbank">
                            <div class="card-header p-2"></div>
                            <div class="card-body align-items-center d-flex justify-content-center">
                                <div class="container-fluid" style="text-align: center;">
                                    <div class="col ">
                                        <div class="row mb-4">
                                            <i class="fa-solid fa-id-card fa-2xl" style="color: #2882EB;"></i>
                                        </div>
                                        <div class="row">
                                            <h6 class="mb-0 " align-self="center">Dados Bancários</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-2">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{-- <x-footers.auth></x-footers.auth> --}}
        </div>
    </main>
    <x-plugins></x-plugins>
    </div>
</x-layout>
