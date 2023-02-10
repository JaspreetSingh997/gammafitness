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
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="person-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Leads</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="stats-chart-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Clients</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="people-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">HR</a>
                                <div class="dropDown" style="display: ;">
                                    <a href="">Employees</a>
                                    <a href="">Leaves</a>
                                    <a href="">Shift Roster</a>
                                    <a href="">Attendance</a>
                                    <a href="">Holiday</a>
                                    <a href="">Destination</a>
                                    <a href="">Department</a>
                                    <a href="">Appreciation</a>
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
                                <a href="#">Work</a>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Contracts</a>
                                    <a href="">Projects</a>
                                    <a href="">Tasks</a>
                                    <a href="">Time Logs</a>
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
                                <a href="#">Finance</a>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Proposal</a>
                                    <a href="">Estimates</a>
                                    <a href="">Invoices</a>
                                    <a href="">Payments</a>
                                    <a href="">Credit Note</a>
                                    <a href="">Expenses</a>
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
                                <a href="#">Products</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="cart-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Orders</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="headset-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Tickets</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="calendar-clear-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Events</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Messages</a>

                            </div>

                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="clipboard-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Notice Board</a>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Knowledge Base</a>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="laptop-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Assets</a>
                            </div>
                            <div class="gift">
                                <ion-icon name="gift-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="albums-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Payroll</a>
                                <div class="gift withGiftDrop">
                                    <ion-icon name="gift-outline"></ion-icon>
                                </div>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Payroll</a>
                                    <a href="">Employee Salary</a>
                                </div>
                            </div>

                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="shield-checkmark-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Recruit</a>
                                <div class="gift withGiftDrop">
                                    <ion-icon name="gift-outline"></ion-icon>
                                </div>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Dashboard</a>
                                    <a href="">Skills</a>
                                    <a href="">Jobs</a>
                                    <a href="">Job Applications</a>
                                    <a href="">Interview Schedule</a>
                                    <a href="">Offer Letters</a>
                                    <a href="">Candidate Database</a>
                                    <a href="">Reports</a>
                                    <a href="">Career Site</a>
                                </div>
                            </div>

                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="videocam-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Zoom</a>
                                <div class="gift withGiftDrop">
                                    <ion-icon name="gift-outline"></ion-icon>
                                </div>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Zoom Meeting</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon forWork">
                                <ion-icon name="cloud-circle-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Reports</a>
                                <div class="dropDown" style="display: none;">
                                    <a href="">Task Reports</a>
                                    <a href="">Time Log Report</a>
                                    <a href="">Finance Report</a>
                                    <a href="">Income Vs Expense</a>
                                    <a href="">Leave Report</a>
                                    <a href="">Attendance Report</a>
                                    <a href="">Expense Report</a>
                                </div>
                            </div>
                            <div class="rightIcon">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </div>
                        </li>
                        <li>
                            <div class="leftIcon">
                                <ion-icon name="cog-outline"></ion-icon>
                            </div>
                            <div class="text">
                                <a href="#">Settings</a>

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

                    <form action="" id="productAddForm"></form>
                    <div class="productAddBox">
                        <div class="pAddBox1">
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
                            <div class="pBoxHeading">
                                <h1>Product Variants</h1>
                            </div>
                            <div class="pBoxContainer">
                                <div class="row">
                                    <div class="col-25">
                                        <label for="pSize">Product Size</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" placeholder="Product Size" name="pSize" id="pSize" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="pColor">Product Color</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="pColor" placeholder="Product Color" name="pColor" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="pCategory">Product Category</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="pCategory" placeholder="Product Cateogry" name="pCategory" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="holeD">Hole Diameter</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="holeD" name="holeD" placeholder="Hole Diameter" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="sizeD">Size Denomination</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="sizeD" id="sizeD" placeholder="Size Denomination Available" />
                                    </div>
                                </div>
                            </div>
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
                                        <label for="pColor">Company NaProduct Color                                </div>
                                    <div class="col-75">
                                        <input type="text" id="companyName" placeholder="Company Name" name="compName" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="phoneNum">Phone Number</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="phoneNum" placeholder="Phone Number" name="phone" />
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
                }
                else 
                {
                    $('.landingP').css('display', 'none');
                }
                
            });
        })
    </script>
</body>

</html>
