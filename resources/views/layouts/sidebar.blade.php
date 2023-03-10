<div class="modal sidebarMenu -left fade" id="mdllSidebar-connected" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            @auth
            <div class="modal-header d-block pb-1">

                <!-- un-user-profile -->
                <div class="un-user-profile">
                    <div class="image_user">
                        <picture>
                            <source srcset="images/avatar/11.webp" type="image/webp">
                            <img src="images/avatar/11.jpg" alt="image">
                        </picture>
                    </div>
                    <div class="text-user">
                        <h3>{{auth()->user()->nama_lengkap}}</h3>
                        <p>0xe3oowe0b88...E162</p>
                    </div>
                </div>

                <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ri-close-fill"></i>
                </button>

                <!-- cover-balance -->
                <div class="cover-balance">
                    <div class="un-balance">
                        <div class="content-balance">
                            <div class="head-balance">
                                <h4>My Balance</h4>
                                <a class="btn link-addBalance" data-bs-toggle="modal" data-bs-dismiss="modal"
                                    data-bs-target="#mdllAddETH">
                                    <i class="ri-add-fill"></i>
                                </a>
                            </div>
                            <p class="no-balance">3,650 ETH</p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm-size bg-white text-dark rounded-pill" data-bs-toggle="modal"
                        data-bs-dismiss="modal" data-bs-target="#mdllUploadItem">
                        Create
                    </button>
                </div>
            </div>
            @endauth
            @guest
                <div class="modal-header">
                    <div class="welcome_em">
                        <h5>Y??koso!, {{$stgs['nama_aplikasi']}} e<span>.</span></h5>
                        <p>
                            Selamat datang di Aplikasi {{$stgs['nama_aplikasi']}}
                        </p>
                        <a href="/login" class="btn btn-md-size bg-primary text-white rounded-pill">
                            login
                        </a>
                    </div>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                @endguest
            <div class="modal-body">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="homepage.html">
                            <div class="icon_current">
                                <i class="ri-compass-line"></i>
                            </div>
                            <div class="icon_active">
                                <i class="ri-compass-fill"></i>
                            </div>
                            <span class="title_link">Discover</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="app-homes.html">
                            <div class="icon_current">
                                <i class="ri-home-5-line"></i>
                            </div>
                            <div class="icon_active">
                                <i class="ri-home-5-fill"></i>
                            </div>
                            <span class="title_link">Home Styles</span>

                            <span class="xs-badge">8</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="app-pages.html">
                            <div class="icon_current">
                                <i class="ri-pages-line"></i>
                            </div>
                            <div class="icon_active">
                                <i class="ri-pages-fill"></i>
                            </div>
                            <span class="title_link">Page Packs</span>

                            <div class="badge-circle">
                                <span class="doted_item"></span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="app-components.html">
                            <div class="icon_current">
                                <i class="ri-layout-2-line"></i>
                            </div>
                            <div class="icon_active">
                                <i class="ri-layout-2-fill"></i>
                            </div>
                            <span class="title_link">Components</span>

                        </a>
                    </li>

                    <label class="title__label">other</label>

                    <li class="nav-item">
                        <a class="nav-link" href="page-help.html">
                            <div class="icon_current">
                                <i class="ri-questionnaire-line"></i>
                            </div>
                            <div class="icon_active">
                                <i class="ri-questionnaire-fill"></i>
                            </div>
                            <span class="title_link">Help Center</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="page-about.html">
                            <div class="icon_current">
                                <i class="ri-file-info-line"></i>
                            </div>
                            <div class="icon_active">
                                <i class="ri-file-info-fill"></i>
                            </div>
                            <span class="title_link">About Unic.</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <div class="em_darkMode_menu">
                    <label class="text" for="switchDark">
                        <h3>Dark Mode</h3>
                        <p>Browsing in night mode</p>
                    </label>
                    <label class="switch_toggle toggle_lg theme-switch" for="switchDark">
                        <input type="checkbox" class="switchDarkMode theme-switch" id="switchDark"
                            aria-describedby="switchDark">
                        <span class="handle"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===================================
START THE MODAL SIDEBAR MENU - guest
==================================== -->

