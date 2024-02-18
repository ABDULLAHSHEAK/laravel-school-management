      <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="{{route('home')}}" data-bs-original-title="" title="">
                            <img class="img-fluid for-white" src="{{asset('admin')}}/images/logo/full-white.png" alt="logo">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="{{route('home')}}">
                            <img class="img-fluid main-logo main-white" src="{{asset('admin')}}/images/logo/logo.png" alt="logo">
                            <img class="img-fluid main-logo main-dark" src="{{asset('admin')}}/images/logo/logo-white.png"
                                alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>
                                {{-- ----------- dashboard --------------  --}}
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{url('/dashboard')}}">
                                        <i class="ri-home-line"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                {{-- ----------- users --------------  --}}
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Users</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{url('/all-users')}}">All Users</a>
                                        </li>

                                        <li>
                                            <a href="{{url('/add-users')}}">Add New User</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- ----------- Class room --------------  --}}
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{route('view_class')}}">
                                        <i class="ri-list-check-2"></i>
                                        <span>Class-Room</span>
                                    </a>
                                </li>
                                {{-- ----------- Teachers --------------  --}}
                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-settings-line"></i>
                                        <span>Teachers</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('all_teacher')}}">All Teacher</a>
                                        </li>

                                        <li>
                                            <a href="{{url('/add-teacher')}}">Add Teacher</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- ----------- Direactors --------------  --}}
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Board Of Directores</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('all_directors')}}">All Directors</a>
                                        </li>
                                        <li>
                                            <a href="{{route('add_directors')}}">Add new Directors</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- ----------- Students --------------  --}}
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Students</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('all_students')}}">All Students</a>
                                        </li>
                                        <li>
                                            <a href="{{route('show_students')}}">Add Students</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- ----------- Notice --------------  --}}
                                  <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Notice</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('all_notice')}}">All Notice</a>
                                        </li>
                                        <li>
                                            <a href="{{route('add_notice')}}">Add Notice</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- ----------- routine --------------  --}}
                                  <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Class Routine</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('all_routine')}}">All Routine</a>
                                        </li>
                                        <li>
                                            <a href="{{route('add_routine')}}">Add Routine</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- ----------- Syllabus --------------  --}}
                                  <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Syllabus</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('all_syllabus')}}">All Syllabus</a>
                                        </li>
                                        <li>
                                            <a href="{{route('add_syllabus')}}">Add Syllabus</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- ----------- Result --------------  --}}
                                  <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Results</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('all_result')}}">All Result</a>
                                        </li>
                                        <li>
                                            <a href="{{route('add_result')}}">Add Result</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- ----------- Gallery --------------  --}}
                                  <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Gallery</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('show_photo_gallery')}}">Photo Gallery</a>
                                        </li>
                                        <li>
                                            <a href="{{route('show_video_gallery')}}">Video Gallery</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- ----------- Setting --------------  --}}
                                  <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>Setting</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('general_setting')}}">General Setting</a>
                                        </li>
                                        <li>
                                            <a href="{{route('site_setting')}}">Site Setting</a>
                                        </li>
                                        <li>
                                            <a href="{{route('site_image_setting')}}">Site Image</a>
                                        </li>
                                        <li>
                                            <a href="{{route('view_sidebar')}}">Sitebar Setting</a>
                                        </li>
                                    </ul>
                                 </li>

                                {{-- ----------- Image Slider --------------  --}}
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{route('image_slider')}}">
                                        <i class="ri-list-check-2"></i>
                                        <span>Image Slider</span>
                                    </a>
                                </li>
                                {{-- ----------- Students --------------  --}}
                                {{-- <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="media.html">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Media</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-archive-line"></i>
                                        <span>Orders</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="order-list.html">Order List</a>
                                        </li>
                                        <li>
                                            <a href="order-detail.html">Order Detail</a>
                                        </li>
                                        <li>
                                            <a href="order-tracking.html">Order Tracking</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-focus-3-line"></i>
                                        <span>Localization</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="translation.html">Translation</a>
                                        </li>

                                        <li>
                                            <a href="currency-rates.html">Currency Rates</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Coupons</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="coupon-list.html">Coupon List</a>
                                        </li>

                                        <li>
                                            <a href="create-coupon.html">Create Coupon</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="taxes.html">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Tax</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="product-review.html">
                                        <i class="ri-star-line"></i>
                                        <span>Product Review</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                                        <i class="ri-phone-line"></i>
                                        <span>Support Ticket</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-settings-line"></i>
                                        <span>Settings</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="profile-setting.html">Profile Setting</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="reports.html">
                                        <i class="ri-file-chart-line"></i>
                                        <span>Reports</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="list-page.html">
                                        <i class="ri-list-check"></i>
                                        <span>List Page</span>
                                    </a>
                                </li>  --}}
                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
