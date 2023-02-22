<div class="dashSideBar">
    <div class="sideHeaderPart">
        <div class="companyName">
            <h1>Gamma Fitness</h1>
            <ion-icon class="gammaChevDown" name="chevron-down-outline"></ion-icon>
            <div class="companyLogo">
                <img src="{{asset('images/gammaLogoDash.png')}}" alt="" />
            </div>
        </div>
        <div class="userLogged">
            <div class="name">
                <div class="status"></div>
                <p>Jaspreet Singh</p>
            </div>
        </div>
    </div>
    <div class="dashList">
        <ul class="dashNavbar">
            {{-- NO DROP - 1 --}}
            <li id="dash-list-1" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/dashIcon.svg')}}" alt="">
                </div>
                <div class="text">
                    <a href="#">Dashboard</a>
                </div>
            </li>

            {{-- DROP - 2 --}}
            <li id="dash-list-2" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/productsIcon.svg')}}" alt="">
                    {{-- <ion-icon name="person-outline"></ion-icon> --}}
                </div>
                <div class="text">
                    <a href="#">Products</a>
                    <div class="dropDown" id="dropdown-2">
                        <a href="">Add Product</a>
                        <a href="">Edit Product</a>
                        <a href="">Delete Product</a>
                    </div>
                </div>
                <div class="rightIcon">
                    <ion-icon id="chev-2" name="chevron-forward-outline"></ion-icon>
                    {{-- <ion-icon id="chevOpened" name="chevron-down-outline"></ion-icon> --}}
                </div>
            </li>

            {{-- DROP - 3 --}}
            <li id="dash-list-3" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/orderIcon.svg')}}" alt="">
                </div>
                <div class="text">
                    <a href="#">Orders</a>
                    <div class="dropDown" id="dropdown-3">
                        <a href="">Add Orders</a>
                        <a href="">Edit Orders</a>
                        <a href="">Delete Orders</a>
                    </div>
                </div>
                <div class="rightIcon">
                    <ion-icon id="chev-3" name="chevron-forward-outline"></ion-icon>
                </div>
            </li>

            {{-- DROP - 4 --}}
            <li id="dash-list-4" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/usersIcon.svg')}}" alt="">
                </div>
                <div class="text">
                    <a href="#">Users</a>
                    <div class="dropDown" id="dropdown-4">
                        <a href="">Add User</a>
                        <a href="">Edit User</a>
                        <a href="">Delete User</a>
                    </div>
                </div>
                <div class="rightIcon">
                    <ion-icon id="chev-4" name="chevron-forward-outline"></ion-icon>
                </div>
            </li>

            {{-- DROP - 5 --}}
            <li id="dash-list-5" class="dash-list">
                <div class="leftIcon forWork">
                    <img src="{{asset('images/invoiceIcon.svg')}}" alt="">

                </div>
                <div class="text">
                    <a href="#">Invoice</a>
                    <div class="dropDown" id="dropdown-5">
                        <a href="">Generate Invoice</a>
                        <a href="">Edit Invoice</a>
                        <a href="">Delete Invoice</a>
                    </div>
                </div>
                <div class="rightIcon">
                    <ion-icon id="chev-5" name="chevron-forward-outline"></ion-icon>
                </div>
            </li>

            {{-- DROP - 6 --}}
            <li id="dash-list-6" class="dash-list">
                <div class="leftIcon forWork">
                    <img src="{{asset('images/categoriesIcon.svg')}}" alt="">
                </div>
                <div class="text">
                    <a href="#">Categories</a>
                    <div class="dropDown" id="dropdown-6">
                        <a href="">Add Category</a>
                        <a href="">Edit Cateogory</a>
                        <a href="">Remove Category</a>
                    </div>
                </div>
                <div class="rightIcon">
                    <ion-icon id="chev-6" name="chevron-forward-outline"></ion-icon>
                </div>
            </li>

            {{-- DROP - 7 --}}
            <li id="dash-list-7" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/salesIcon.svg')}}" alt="">
                </div>
                <div class="text">
                    <a href="#">Sales</a>
                    <div class="dropDown" id="dropdown-7">
                        <a href="">New Sale</a>
                        <a href="">Manage Sales</a>
                        <a href="">Sales Return</a>
                    </div>
                </div>
                <div class="rightIcon">
                    <ion-icon id="chev-7" name="chevron-forward-outline"></ion-icon>
                </div>
            </li>

            {{-- DROP - 8 --}}
            <li id="dash-list-8" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/inventoryIcon.svg')}}" alt="">
                </div>
                <div class="text">
                    <a href="#">Inventory</a>
                    <div class="dropDown" id="dropdown-8">
                        <a href="">Stock Count</a>
                        <a href="">Purchases</a>
                    </div>
                </div>
                <div class="rightIcon">
                    <ion-icon id="chev-8" name="chevron-forward-outline"></ion-icon>
                </div>

            </li>

            {{-- DROP - 9 --}}
            <li id="dash-list-9" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/customerIcon.svg')}}" alt="">
                </div>
                <div class="text">
                    <a href="#">Customers</a>
                    <div class="dropDown" id="dropdown-9">
                        <a href="">Add Customer</a>
                        <a href="">Edit Customer</a>
                        <a href="">Remove Customer</a>
                    </div>
                </div>
                <div class="rightIcon">
                    <ion-icon id="chev-9" name="chevron-forward-outline"></ion-icon>
                </div>
            </li>

            {{-- NO DROP - 10 --}}
            <li id="dash-list-10" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/quotationIcon.svg')}}" alt="">
                    {{-- <ion-icon name="calendar-clear-outline"></ion-icon> --}}
                </div>
                <div class="text">
                    <a href="#">Quotations</a>
                </div>
            </li>

            {{-- NO DROP - 11 --}}
            <li id="dash-list-11" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/productPaymentIcon.svg')}}" alt="">
                </div>
                <div class="text">
                    <a href="#">Product Payments</a>

                </div>

            </li>

            {{-- NO DROP - 12 --}}
            <li id="dash-list-12" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/taxesIcon.svg')}}" alt="Taxes Icon">
                </div>
                <div class="text">
                    <a href="#">Taxes</a>
                </div>
            </li>

            {{-- NO DROP - 13 --}}
            <li id="dash-list-13" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/shippingIcon.svg')}}" alt="Shipping SVG">
                </div>
                <div class="text">
                    <a href="#">Shipping</a>
                </div>
            </li>

            {{-- DROP - 14 --}}
            <li id="dash-list-14" class="dash-list">
                <div class="leftIcon">
                    <img src="{{asset('images/couponsIcon.svg')}}" alt="Coupon SVG">
                </div>
                <div class="text">
                    <a href="#">Coupon</a>
                    <div class="dropDown" id="dropdown-14">
                        <a href="">Add Coupons</a>
                        <a href="">Edit Coupons</a>
                        <a href="">Remove Coupons</a>
                    </div>
                </div>
                <div class="rightIcon">
                    <ion-icon id="chev-14" name="chevron-forward-outline"></ion-icon>
                </div>
            </li>
        </ul>
    </div>
    <div class="dashFooterPart">
        <div class="chevLeft">
            <ion-icon id="sidebarShrinker" name="chevron-back-outline"></ion-icon>
        </div>
        <div class="version">
            <p>ver 1.0.1</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
    $('#dash-list-2').click(function() {
        var dashDrop = $('#dropdown-2');
        if (dashDrop.hasClass('dropDownOpen')) {
            $('#dropdown-2').removeClass('dropDownOpen');
            $('#chev-2').attr("name", "chevron-forward-outline");
        } else {
            $('#dropdown-2').addClass('dropDownOpen')
            $('#chev-2').attr("name", "chevron-down-outline");
        }
    });

    $('#dash-list-3').click(function() {
        var dashDrop = $('#dropdown-3');
        if (dashDrop.hasClass('dropDownOpen')) {
            $('#dropdown-3').removeClass('dropDownOpen');
            $('#chev-3').attr("name", "chevron-forward-outline");
        } else {
            $('#dropdown-3').addClass('dropDownOpen')
            $('#chev-3').attr("name", "chevron-down-outline");
        }
    });

    $('#dash-list-4').click(function() {
        var dashDrop = $('#dropdown-4');
        if (dashDrop.hasClass('dropDownOpen')) {
            $('#dropdown-4').removeClass('dropDownOpen');
            $('#chev-4').attr("name", "chevron-forward-outline");
        } else {
            $('#dropdown-4').addClass('dropDownOpen')
            $('#chev-4').attr("name", "chevron-down-outline");
        }
    });

    $('#dash-list-5').click(function() {
        var dashDrop = $('#dropdown-5');
        if (dashDrop.hasClass('dropDownOpen')) {
            $('#dropdown-5').removeClass('dropDownOpen');
            $('#chev-5').attr("name", "chevron-forward-outline");
        } else {
            $('#dropdown-5').addClass('dropDownOpen')
            $('#chev-5').attr("name", "chevron-down-outline");
        }
    });

    $('#dash-list-6').click(function() {
        var dashDrop = $('#dropdown-6');
        if (dashDrop.hasClass('dropDownOpen')) {
            $('#dropdown-6').removeClass('dropDownOpen');
            $('#chev-6').attr("name", "chevron-forward-outline");
        } else {
            $('#dropdown-6').addClass('dropDownOpen')
            $('#chev-6').attr("name", "chevron-down-outline");
        }
    });

    $('#dash-list-7').click(function() {
        var dashDrop = $('#dropdown-7');
        if (dashDrop.hasClass('dropDownOpen')) {
            $('#dropdown-7').removeClass('dropDownOpen');
            $('#chev-7').attr("name", "chevron-forward-outline");
        } else {
            $('#dropdown-7').addClass('dropDownOpen')
            $('#chev-7').attr("name", "chevron-down-outline");
        }
    });

    $('#dash-list-8').click(function() {
        var dashDrop = $('#dropdown-8');
        if (dashDrop.hasClass('dropDownOpen')) {
            $('#dropdown-8').removeClass('dropDownOpen');
            $('#chev-8').attr("name", "chevron-forward-outline");
        } else {
            $('#dropdown-8').addClass('dropDownOpen')
            $('#chev-8').attr("name", "chevron-down-outline");
        }
    });

    $('#dash-list-9').click(function() {
        var dashDrop = $('#dropdown-9');
        if (dashDrop.hasClass('dropDownOpen')) {
            $('#dropdown-9').removeClass('dropDownOpen');
            $('#chev-9').attr("name", "chevron-forward-outline");
        } else {
            $('#dropdown-9').addClass('dropDownOpen')
            $('#chev-9').attr("name", "chevron-down-outline");
        }
    });

    $('#dash-list-14').click(function() {
        var dashDrop = $('#dropdown-14');
        if (dashDrop.hasClass('dropDownOpen')) {
            $('#dropdown-14').removeClass('dropDownOpen');
            $('#chev-14').attr("name", "chevron-forward-outline");
        } else {
            $('#dropdown-14').addClass('dropDownOpen')
            $('#chev-14').attr("name", "chevron-down-outline");
        }
    });

    $('#sidebarShrinker').click(function() {
        var shrinkTextClass = $('.text');
        var shrinkRightIconClass = $('.rightIcon');
        var shrinkdashSideBar = $('.dashSideBar');
        var userLogged = $('.userLogged');
        var cName = $('.companyName h1');
        var cNameIcon = $('.companyName ion-icon');
        var version = $('.version');
        var chevLeft = $('.chevLeft');
        var cLogo = $('.companyLogo');
        var sideHeader = $('.sideHeaderPart');
        var prodmain = $('.productAddMain ');


        if (shrinkTextClass.hasClass('shrinkItBro') && shrinkRightIconClass.hasClass('shrinkItBro')) {
            shrinkdashSideBar.removeClass('shrinkSideBro');
            shrinkTextClass.removeClass('shrinkItBro');
            shrinkRightIconClass.removeClass('shrinkItBro');
            userLogged.removeClass('shrinkItBro');
            cName.removeClass('shrinkItBro');
            cNameIcon.removeClass('shrinkItBro');
            version.removeClass('shrinkVersion');
            $(this).removeClass('shrinkSideChev');
            $(this).attr('name', 'chevron-back-outline');
            cLogo.removeClass('shrinkcLogo');
            sideHeader.removeClass('shrinkSideHeader');
            prodmain.removeClass('shrinkprodMain');

        } else {
            shrinkdashSideBar.addClass('shrinkSideBro');
            shrinkTextClass.addClass('shrinkItBro');
            shrinkRightIconClass.addClass('shrinkItBro');
            userLogged.addClass('shrinkItBro');
            cName.addClass('shrinkItBro');
            cNameIcon.addClass('shrinkItBro');
            version.addClass('shrinkVersion');
            $(this).addClass('shrinkSideChev');
            $(this).attr('name', 'chevron-forward-outline');
            cLogo.addClass('shrinkcLogo');
            sideHeader.addClass('shrinkSideHeader');
            prodmain.addClass('shrinkprodMain');
        }
    })
</script>