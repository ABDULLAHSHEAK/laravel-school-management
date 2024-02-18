<div class="buy_link">
    Single License : 2800 taka | Unlimited License : 5600 taka | <a href="https://themesbazar.com/institute/"
        target="_blank"> Theme Details </a> | <a
        href="https://popularit.com.bd/index.php?rp=/store/wordpress-theme/institute-theme-unlimited-license-1"
        target="_blank"> Buy Now (Single License) </a> | <a href="https://popularit.com.bd/cart.php?a=add&pid=164"
        target="_blank"> Buy Now (Unlimited License) </a>
</div>

{{-- -------- top nav -------  --}}
<div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="col-md-4">
                    <?php
                    $current_date = date('d');
                    $current_year = date('Y');
                    $current_month = date('F');
                    $current_day = date('l');
                    $current_time = date('h:i A');

                    echo $current_day . ' , ' . $current_date . ' ' . $current_month . ' , ' . $current_year . ' || ' . " <span id='clock'></span>";
                    ?>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    Principal Mail : principalinfo@gmail.com
                    <span><a href="{{url('login')}}" class="btn btn-primary">Login</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- -------- top nav -------- --}}

{{-- ------------ school info -------------------- --}}
<div class="school_details">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12 text-center">
                <img src="{{ asset('image/site_setting') }}/{{$SiteSetting->gov_logo}}" class="gov_img">
            </div>
            <div class="col-lg-8 col-12 text-center">
                <div class="block clear school_info">
                    <h1 style="margin: 0">{{$SiteSetting->school_name}} </h1>
                    <h3 class="school_info">{{$SiteSetting->school_address}} - <strong> স্থাপিত - </strong> {{$SiteSetting->establis_date}} </h3>
                    <h3 class="school_info">ইআইআইএন নং- {{$SiteSetting->eiin_number}}, স্কুল কোড নং- {{$SiteSetting->school_code}}</h3>
                </div>
            </div>
            <div class="col-lg-2 col-12 text-center">
                <img src="{{ asset('image/site_setting') }}/{{$SiteSetting->school_logo}}" alt="gov-image" class="gov_img">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <section class="menu_section" id="myHeader">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="menu-area" class="menu_area">
                    <div class="menu_bottom">
                        <nav role="navigation" class="navbar navbar-default mainmenu">

                            <div class="navbar-header">
                                <button type="button" SiteSetting-target="#navbarCollapse" SiteSetting-toggle="collapse"
                                    class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div id="navbarCollapse" class="collapse navbar-collapse">
                                <div class="menu-main-menu-container">
                                    <ul id="menu-main-menu" class="nav navbar-nav">
                                        <li itemscope="itemscope" id="menu-item-25"
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-25 active">
                                            <a title="হোম" href="">হোম</a>
                                        </li>
                                        {{-- ----- committee ----  --}}

                                        <li itemscope="itemscope" id="menu-item-34"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-34 dropdown">
                                            <a title=" পরিচালনা পরিষদ" href="#" SiteSetting-toggle="dropdown"
                                                class="dropdown-toggle" aria-haspopup="true"> পরিচালনা পরিষদ <span
                                                    class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li itemscope="itemscope" id="menu-item-35"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-35">
                                                    <a title="পরিচালনা কমিটি" href="{{route('directors')}}">পরিচালনা কমিটি</a>
                                                </li>
                                                <li itemscope="itemscope" id="menu-item-33"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-33">
                                                    <a title="কর্মকর্তা" href="#">কর্মকর্তা</a>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- ---- teacher ------  --}}
                                        <li itemscope="itemscope" id="menu-item-24"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
                                            <a title="শিক্ষকমন্ডলী" href="3">
                                                শিক্ষকমন্ডলী
                                            </a>
                                        </li>
                                        {{-- ----- student -----  --}}
                                        <li itemscope="itemscope" id="menu-item-20"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
                                            <a title="শিক্ষার্থী" href="#">শিক্ষার্থী</a>
                                        </li>
                                        {{-- ---------- notice .............  --}}
                                        <li itemscope="itemscope" id="menu-item-22"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
                                            <a title="নোটিশ" href="#">নোটিশ</a>
                                        </li>
                                        {{-- ----------- academy ----------  --}}

                                        <li itemscope="itemscope" itemtype="" id="menu-item-36"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-36 dropdown">
                                            <a title="একাডেমি" href="#" SiteSetting-toggle="dropdown"
                                                class="dropdown-toggle" aria-haspopup="true">একাডেমি
                                                <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li itemscope="itemscope" id="menu-item-37"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-37">
                                                    <a title="ক্লাস রুটিন" href="#">ক্লাস রুটিন</a>
                                                </li>
                                                <li itemscope="itemscope" id="menu-item-37"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-37">
                                                    <a title="সিলেবাস" href="#">সিলেবাস</a>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- ---------- result .............  --}}
                                        <li itemscope="itemscope" id="menu-item-22"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
                                            <a title="ফলাফল" href="#">ফলাফল</a>
                                        </li>
                                        {{-- ------- gellery -------  --}}
                                        <li itemscope="itemscope" id="menu-item-38"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-38 dropdown">
                                            <a title="গ্যালারী" href="#" SiteSetting-toggle="dropdown"
                                                class="dropdown-toggle" aria-haspopup="true">
                                                গ্যালারী
                                                <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li itemscope="itemscope" id="menu-item-21"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21">
                                                    <a title="ফটো গ্যালারী" href="#">ফটো
                                                        গ্যালারী</a>
                                                </li>
                                                <li itemscope="itemscope" id="menu-item-19"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
                                                    <a title="ভিডিও গ্যালারী" href="#">ভিডিও
                                                        গ্যালারী</a>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- ------- about -------  --}}

                                       <li itemscope="itemscope" id="menu-item-38"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-38 dropdown">
                                            <a title="আমাদের সম্পর্কে" href="#" SiteSetting-toggle="dropdown"
                                                class="dropdown-toggle" aria-haspopup="true">
                                                আমাদের সম্পর্কে
                                                <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li itemscope="itemscope" id="menu-item-21"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21">
                                                    <a title="সংক্ষিপ্ত ইতিহাস" href="#">সংক্ষিপ্ত ইতিহাস</a>
                                                </li>
                                                <li itemscope="itemscope" id="menu-item-19"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
                                                    <a title="লক্ষ্য ও উদ্দেশ্য" href="#">লক্ষ্য ও উদ্দেশ্য</a>
                                                </li>
                                                <li itemscope="itemscope" id="menu-item-19"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19">
                                                    <a title="আমাদের কথা" href="#">আমাদের কথা</a>
                                                </li>
                                            </ul>
                                        </li>
                                        {{-- ----- contact --------  --}}
                                        <li itemscope="itemscope" id="menu-item-23"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23">
                                            <a title="যোগাযোগ" href="#">যোগাযোগ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>


<div class="top-scroll-section">
    <div class="container">
        <div class="row">
            <div class="top_scroll">
                <div class="col-md-2 col-sm-3">
                    <div class="top_scrool_1">
                        নোটিশ </div>
                </div>
                <div class="col-md-10 col-sm-9">
                    <div class="top_scrool_2">
                        <marquee direction="left" scrollamount="4px" onmouseover="this.stop()"
                            onmouseout="this.start()">
                           <a href=" https://www.facebook.com/masitacademy">
                 বিঃ দ্রঃ ঃ- এইটি PHP দিয়ে তৈরি স্কুল ম্যানেজমেন্ট ওয়েবসাইট এর ডেমো ভার্সন অরজিনাল ওয়েবসাইট সম্পর্ন LARAVEL দিয়ে ডেভেলপ করা হয়েছে ।
                </a>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
