<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products add - Gamma Fitness</title>

    {{-- Linking Chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="../../../resources/css/dash.css">
</head>

<body>
    <section id="productAdd">
        <div class="pAddContainer">
            <div class="dashSideBar">
                <div class="sideHeaderPart">
                    <div class="companyName">
                        <h1>Gamma Fitness</h1>
                        <ion-icon class="gammaChevDown" name="chevron-down-outline"></ion-icon>
                        <div class="companyLogo">
                            <img src="../../../resources/images/gammaLogoDash.png" alt="" />
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
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Dashboard</a>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <svg class="productsIconDashSide" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="4.4333mm"
                                    height="4.4332mm" version="1.1"
                                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                    viewBox="0 0 62.55 62.55" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <style type="text/css">
                                            <![CDATA[
                                            .str0 {
                                                stroke: #FEFEFE;
                                                stroke-width: 2.82;
                                                stroke-miterlimit: 22.9256
                                            }

                                            .fil0 {
                                                fill: #FEFEFE
                                            }
                                            ]]>
                                        </style>
                                    </defs>
                                    <g id="Layer_x0020_1">
                                        <metadata id="CorelCorpID_0Corel-Layer" />
                                        <path class="fil0 str0"
                                            d="M12.4 6.4c-5.8,2.73 -10.63,5.16 -10.76,5.37 -0.13,0.22 -0.23,9.63 -0.23,21.96 0,16.97 0.08,21.66 0.33,22.02 0.25,0.41 3.36,0.85 20.76,2.92 11.24,1.36 20.81,2.45 21.22,2.45 0.56,0 3.13,-1.5 8.93,-5.21 4.5,-2.87 8.27,-5.35 8.37,-5.54 0.13,-0.16 0.15,-9.93 0.1,-21.69 -0.13,-23.49 -0.03,-22.02 -1.73,-22.26 -3.38,-0.52 -36.07,-5.05 -36.25,-5.02 -0.13,0 -4.96,2.26 -10.74,4.99l0 0zm14.75 -1.5c0.1,0.11 -2.44,1.83 -5.65,3.79l-5.85 3.63 -3.56 -0.46c-1.96,-0.27 -3.56,-0.54 -3.56,-0.63 0,-0.08 3.31,-1.66 7.33,-3.49l7.3 -3.33 1.91 0.14c1.04,0.08 1.98,0.25 2.09,0.35l0 0zm20.3 2.76c4.25,0.6 7.76,1.15 7.81,1.2 0.05,0.03 -2.42,1.72 -5.44,3.74l-5.55 3.63 -7.76 -1.04c-4.27,-0.57 -8.01,-1.09 -8.34,-1.17 -0.48,-0.11 0.66,-0.9 5.47,-3.77 3.33,-1.99 6.05,-3.63 6.08,-3.66 0,-0.03 3.48,0.46 7.73,1.06zm10.43 9.33c0,3.36 0.08,11.87 0.18,18.91l0.15 12.82 -6.13 3.74 -6.16 3.71 0 -18.85 0.03 -18.88 5.77 -3.74c3.18,-2.05 5.85,-3.74 5.98,-3.74 0.1,-0.03 0.18,2.7 0.18,6.03l0 0zm-49.04 -2.24c2.01,0.3 3.87,0.6 4.15,0.68 0.51,0.11 0.51,0.14 -0.1,9.28 -0.33,5.02 -0.56,9.22 -0.48,9.28 0.08,0.08 1.45,-0.65 3.08,-1.64l2.92 -1.77 3 2.18c1.63,1.2 3.03,2.16 3.05,2.1 0.05,-0.06 0.2,-4.01 0.38,-8.79 0.15,-4.8 0.33,-8.79 0.38,-8.84 0.05,-0.06 3.77,0.3 8.24,0.79l8.14 0.93 0 18.85 0 18.85 -17.98 -2.02c-9.92,-1.09 -18.16,-2.05 -18.31,-2.1 -0.25,-0.08 -0.33,-4.17 -0.33,-19.24 0,-10.51 0.05,-19.1 0.1,-19.1 0.08,0 1.76,0.25 3.76,0.55l0 0z" />
                                    </g>
                                </svg>

                                {{-- <ion-icon name="person-outline"></ion-icon> --}}
                            </div>
                            <div class="text">
                                <a href="#">Products</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">Add Product</a>
                                    <a href="">Edit Product</a>
                                    <a href="">Delete Product</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="stats-chart-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Orders</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">Add Orders</a>
                                    <a href="">Edit Orders</a>
                                    <a href="">Delete Orders</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="people-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Users</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">Add User</a>
                                    <a href="">Edit User</a>
                                    <a href="">Delete User</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon forWork">
                                <ion-icon name="briefcase-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Invoice</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">Generate Invoice</a>
                                    <a href="">Edit Invoice</a>
                                    <a href="">Delete Invoice</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon forWork">
                                <ion-icon name="cash-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Categories</a>
                                <div class="dropDown" style="display:;">
                                    <a href="">Add Category</a>
                                    <a href="">Edit Cateogory</a>
                                    <a href="">Remove Category</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="bag-handle-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Sales</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">New Sale</a>
                                    <a href="">Manage Sales</a>
                                    <a href="">Sales Return</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="cart-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Inventory</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">Stock Count</a>
                                    <a href="">Purchases</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="headset-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Customers</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">Add Customer</a>
                                    <a href="">Edit Customer</a>
                                    <a href="">Remove Customer</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="calendar-clear-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Quotations</a>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Product Payments</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="clipboard-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Taxes</a>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Shipping</a>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="laptop-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Coupon</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">Add Coupons</a>
                                    <a href="">Edit Coupons</a>
                                    <a href="">Remove Coupons</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="dashFooterPart">
                    <div class="chevLeft">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                    </div>
                    <div class="version">
                        <p>ver 1.0.1</p>
                    </div>
                </div>
            </div>
            <div class="productAddMain">
                <div class="dashMainHome">
                    <div class="dMainHeader">
                        <div class="dMainTitle">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="breadcrumbs">
                            <ul class="breadC">
                                <li>Home</li>
                                <span>&bullet;</span>
                                <li>Products</li>
                                <span>&bullet;</span>
                                <li>Add</li>
                            </ul>
                        </div>
                        <div class="menuOptions">
                            <ion-icon name="search-outline"></ion-icon>
                            <ion-icon name="document-outline"></ion-icon>
                            <ion-icon name="timer-outline"></ion-icon>
                            <ion-icon name="add-circle-outline"></ion-icon>
                            <ion-icon name="notifications-outline"></ion-icon>
                            <ion-icon name="power-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="dMainCategories">
                        <ul class="dMainCategoryList">
                            <li><a href="../">Overview</a></li>
                            <li>Products</li>
                            <li>Invoice</li>
                            <li>Sales</li>
                        </ul>
                    </div>

                    <div class="productAddBox">
                        <div class="pAddBox1">
                            <form action="" id="productAddForm">
                                <div align=center>
                                    <span class="step stepActive" id="step-1">Product Details</span>
                                    <span class="step" id="step-2">Product Variants</span>
                                    <span class="step" id="step-3">Supplier Details</span>
                                </div>
                                <div class="tab" id="tab-1">
                                    <div class="productDetailsBox">
                                        <div class="pBoxHeading">
                                            <h1>Add a Product</h1>
                                        </div>
                                        <div class="pBoxContainer">
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="pname">Product Name</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="pname" id="pname"
                                                        placeholder="Product Name" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="sku">SKU</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="sku" id="sku"
                                                        placeholder="Product SKU" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="quantity">Quantity</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="quantity" id="quantity"
                                                        placeholder="Product Quantity" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="pImage">Product Image</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="pImage" id="pImage" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="bImage">Banner Image</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="bImage" id="bImage" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="gImage">Gallery Images</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="gImage" id="gImage" multiple />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="description">Product Description</label>
                                                </div>
                                                <div class="col-75">
                                                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Product Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="Stock">Stock?</label>
                                                </div>
                                                <div class="col-75">
                                                    <select name="stock" id="Stock">
                                                        <option value="" hidden>Select Stock Type</option>
                                                        <option value="yes">In Stock</option>
                                                        <option value="no">Out of Stock</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="price">Price</label>
                                                </div>
                                                <div class="col-25 prices">
                                                    <input type="text" name="oprice" id="price"
                                                        placeholder="Original Price" />
                                                    <input type="text" name="nprice" id="price"
                                                        placeholder="Discounted Price" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pBoxHeading forLandingCheck">
                                            <h1>Want a Landing Page?</h1>
                                            <input id="landingCheckBox" type="checkbox">
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="pBoxContainer landingP">
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="pname">Product Name</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="pname" id="pname"
                                                        placeholder="Product Name" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="sku">SKU</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="sku" id="sku"
                                                        placeholder="Product SKU" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="quantity">Quantity</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="quantity" id="quantity"
                                                        placeholder="Product Quantity" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="pImage">Product Image</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="pImage" id="pImage" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="bImage">Banner Image</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="bImage" id="bImage" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="gImage">Banner Image</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="gImage" id="gImage" multiple />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="description">Product Description</label>
                                                </div>
                                                <div class="col-75">
                                                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Product Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="Stock">Stock?</label>
                                                </div>
                                                <div class="col-75">
                                                    <select name="stock" id="Stock">
                                                        <option value="" hidden>Select Stock Type</option>
                                                        <option value="yes">In Stock</option>
                                                        <option value="no">Out of Stock</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="price">Price</label>
                                                </div>
                                                <div class="col-25 prices">
                                                    <input type="text" name="oprice" id="price"
                                                        placeholder="Original Price" />
                                                    <input type="text" name="nprice" id="price"
                                                        placeholder="Discounted Price" />
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <div class="nextBtns">
                                        <a id="next" href="#">Next</a>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="productVariantBox">
                                        <div class="pBoxHeading">
                                            <h1>Product Variants</h1>
                                        </div>
                                        <div class="pBoxContainer">
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="pvariant">Choose a Product Variant</label>
                                                </div>
                                                <div class="col-75">
                                                    <select id="pvariant" name="pvariants" required>
                                                        <option value="" hidden>--SELECT--</option>
                                                        <option value="size">Product Size</option>
                                                        <option value="weight">Product Weight</option>
                                                        <option value="color">Product Color</option>
                                                    </select>
                                                    <div class="btn">
                                                        <button form="pvariant">Add Variant</button>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="nextBtns">
                                        <a class="prev" id="prev-2" href="#">Prev</a>
                                        <a class="next" id="next-2" href="#">Next</a>
                                    </div>
                                </div>
                                <div class="tab" id="tab-3">
                                    <div class="supplierDetailsBox">
                                        <div class="pBoxHeading">
                                            <h1>Supplier Details</h1>
                                        </div>
                                        <div class="pBoxContainer">
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="supplierName">Supplier Name</label>
                                                </div>
                                                <div class="col-75">
                                                    <select name="supplierName" id="supplierName">
                                                        <option value="" hidden>Select Supplier Name</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="pColor">Company Name
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" id="companyName" placeholder="Company Name"
                                                        name="compName" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="phoneNum">Phone Number</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" id="phoneNum" placeholder="Phone Number"
                                                        name="phone" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="Address">Address</label>
                                                </div>
                                                <div class="col-75">
                                                    <textarea name="Address" id="Address" cols="30" rows="10" placeholder="Address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nextBtns">
                                        <a class="prev" id="prev-3" href="#">Prev</a>
                                        <a class="next" id="next" href="#">Submit</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="productAddHeader">
                    <div class="dMainTitle">
                        <h2>Dashboard</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul class="breadC">
                            <li>Home</li>
                            <span>&bullet;</span>
                            <li>Products</li>
                            <span>&bullet;</span>
                            <li>Add Product</li>
                        </ul>
                    </div>
                    <div class="pAddmenuOptions">
                        <ion-icon name="search-outline"></ion-icon>
                        <ion-icon name="document-outline"></ion-icon>
                        <ion-icon name="timer-outline"></ion-icon>
                        <ion-icon name="add-circle-outline"></ion-icon>
                        <ion-icon name="notifications-outline"></ion-icon>
                        <ion-icon name="power-outline"></ion-icon>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#landingCheckBox').change(function() {
                if (this.checked) {
                    $('.landingP').css('display', 'block');
                } else {
                    $('.landingP').css('display', 'none');
                }

            });
        })
    </script>
    <script>
        $(document).ready(function() {
            // $('#tab').click(function(){

            // });
        });
    </script>
</body>

</html>