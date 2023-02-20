<?php
$conn = new mysqli('localhost', 'root', '', 'gammafitness');
?>
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
            @include('sidebar')
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
                            <li><a href="../products/">Products</a></li>
                            <li>Invoice</li>
                            <li>Sales</li>
                        </ul>
                    </div>

                    <div class="productAddBox">
                        <?php
                        if (isset($_POST['skuSub'])) 
                        {
                           $availableSkuQ = $conn->query("SELECT sku FROM product_sku ORDER BY sku DESC LIMIT 1");
                           $availSku = $availableSkuQ->fetch_array();
                
                           //$data = $slctSku->fetch_array();
                           $currD = date('d-m-y h:m:s A');
                           if ($availableSkuQ->num_rows == 1) {
                               $newSku = $availSku['sku'] + 1;
                               echo "<script>If Worked</script>";
                               $ins = $conn->query("INSERT INTO product_sku (sku, created_at, updated_at) VALUES ('$newSku', '$currD', '$currD')");

                           } else {
                               $checkIfHave = $conn->query("SELECT sku FROM product_sku");
                               if($checkIfHave->num_rows < 1)
                               {
                                   $newSku = 8001;
                                   $ins = $conn->query("INSERT INTO product_sku (sku, created_at, updated_at) VALUES ('$newSku', '$currD', '$currD')");
                               }
                               else
                               {
                                   $newSku = $availSku['sku'];
                                   $ins = $conn->query("INSERT INTO product_sku (sku, created_at, updated_at) VALUES ('$newSku', '$currD', '$currD')");
                               }
                           }

                            //$rs = $skuSel->fetch(MYSQLI_ASSOC);
                            
                            //$newSku = $data['sku'] + 1;

                            //print_r($sku);
                            // @include('');
                            ?>
                        <div class="pAddBox1">
                            <form action="" id="productAddForm" METHOD="POST">
                                @csrf
                                <!-- {{ csrf_field() }} -->
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
                                                <?php
                                                $avkSkuQ = $conn->query('SELECT sku FROM product_sku ORDER BY sku DESC LIMIT 1');
                                                $avlD = $avkSkuQ->fetch_array();
                                                $avlSku = $avlD['sku'];
                                                ?>
                                                <div class="col-25">
                                                    <label for="sku">SKU</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="sku" id="sku"
                                                        placeholder="Product SKU" value='<?php echo $avlSku; ?>'
                                                        readonly />
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
                                                <center><h1>Product Banner Image</h1></center>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="pBanner">Product Main Banner Image</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="prodMainBImg" id="pBanner"
                                                        placeholder="Add Product Banner Image" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <center><h1>Product Description</h1></center>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="descP">Product Description</label>
                                                </div>
                                                <div class="col-75">
                                                    <textarea name="descP" placeholder="Product Description" id="descP" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <center><h1>Product Features</h1></center>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="featImage">Features Image</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="featImage" id="featImage"
                                                        placeholder="Product Feature Image" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="featText1">Features Text 1</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="fetureText1" id="featText1"
                                                        placeholder="Product Feature Text 1" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="featText2">Features Text 2</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="fetureText2" id="featText2"
                                                    placeholder="Product Feature Text 2"  required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <center><h1>Product Quantity</h1></center>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="quantity">Quantity</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="text" name="
                                                    " id="quantity"
                                                        placeholder="Product Quantity" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <center><h1>Product Slider</h1></center>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="pSliderImages">Product Slider Images</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="pSliderImages" id="pSliderImages" multiple />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <center><h1>Product GIF</h1></center>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="gifP">Product GIF Banner Image</label>
                                                </div>
                                                <div class="col-75">
                                                    <input type="file" name="prodGif" id=gifP />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <center><h1>Product Video</h1></center>
                                            </div>
                                            <div class="row">
                                                <div class="col-25">
                                                    <label for="videoP">Product Banner Image</label>
                                                </div>
                                                <div class="col-25 prices">
                                                    <input type="file" name="prodGif" id=gifP />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nextBtns">
                                        <input type="submit" id="tab2" name="pBox1" value="Next">
                                    </div>
                                </div>
                            </form>

                            <form action="" method="POST" id="productAddForm"></form>
                                @csrf
                                <!-- {{ csrf_field() }} -->
                                <div class="tab" id="tab-2">
                                    <p>Tab 2 Opened</p>
                                    <div class="nextBtns">
                                        <a id="prev1" href="#">Prev</a>
                                        <a id="tab3" href="#">Next</a>
                                    </div>
                                </div>
                            </form>

                            <form action="" method="POST" id="productAddForm">
                                @csrf
                                <!-- {{ csrf_field() }} -->
                                <div class="tab" id="tab-3">
                                    <p>Tab 3 Opened</p>
                                    <div class="nextBtns">
                                        <a id="prev2" href="#">Prev</a>
                                        <input type="submit" id="tab4" name="submit" value="Submit" />
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php
                         } 
                         else {
                            ?>
                        <form action="" METHOD="POST">
                            @csrf
                            <!-- {{ csrf_field() }} -->
                            <!-- <input type="text" name="newSku" placeholder="Enter SKU" /> -->
                            <input type="submit" name="skuSub" value="Create a new Product" />
                        </form>
                        <?php
                        }
                         ?>


                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#tab-1').addClass('tabToggle');
                        $('#tab-2').removeClass('tabToggle');
                        $('#tab-3').removeClass('tabToggle');

                        $('#tab2').click(function() {
                            if ($(this)) {
                                $('#tab-1').removeClass('tabToggle');
                                $('#tab-2').addClass('tabToggle');
                                $('#tab-3').removeClass('tabToggle');
                            }   
                        })

                        $('#tab3').click(function() {
                            if ($(this)) {
                                $('#tab-1').removeClass('tabToggle');
                                $('#tab-2').removeClass('tabToggle');
                                $('#tab-3').addClass('tabToggle');
                            }
                        })

                        $('#prev1').click(function() {
                            if ($(this)) {
                                $('#tab-1').addClass('tabToggle');
                                $('#tab-2').removeClass('tabToggle');
                                $('#tab-3').removeClass('tabToggle');
                            }
                        })
                        $('#prev2').click(function() {
                            if ($(this)) {
                                $('#tab-1').removeClass('tabToggle');
                                $('#tab-2').addClass('tabToggle');
                                $('#tab-3').removeClass('tabToggle');
                            }
                        })
                    })
                </script>
                {{-- <div class="productAddHeader">
                    <div class="dMainTitle">
                        <h2>Dashboard</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul class="breadC">
                            <li>Home</li>
                            <span>&bullet;</span>
                            <li>Products</liproductAddMain>
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

</body>

</html>
