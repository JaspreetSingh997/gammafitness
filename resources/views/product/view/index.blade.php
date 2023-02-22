<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Page</title>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <section id="productDescPage">
        <div class="mainContainer">
            <div class="leftImageContainer">
                <div class="lISliderContainer">
                    {{-- <div class="slideChevrons">
                        <div class="leftChev">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </div>
                        <div class="rightChev">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </div>
                    </div> --}}
                    <div class="lIsliderSlide">
                        <img src="{{asset('images/final.jpg')}}" alt="Multi Storage Rack">
                    </div>
                </div>
            </div>
            <div class="rightContentContainer">
                <div class="rightContentProductHeader">
                    <div class="accountHolder">
                        <div class="acntName">
                            <p>Jaspreet Singh</p>
                        </div>
                        <div class="acntImg">
                            <img src="{{asset('images/userImg.png')}}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="productDisplayOptions">
                    <div class="pDetails">
                        <p id="pDetails">Product Details</p>
                    </div>
                    <div class="shipInfo">
                        <p id="shipInfo">Shipping Info</p>
                    </div>
                </div>
                <div id="pdData" class="productDescriptionData">
                    <div class="pDescriptionContainer">
                        <div class="productTitle">
                            <h1>Multi Storage Rack</h1>
                        </div>
                        <div class="productRatingStars">
                            <i class="a-rating rating-icons r-icon-<?php echo 1; ?>"></i>
                        </div>
                        <div class="productDesc">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, odit! Excepturi
                                expedita quae inventore, accusamus, sed commodi natus voluptate, atque ipsa quas ad odio
                                doloremque. Enim consectetur vero eaque esse! Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Quae corporis harum laboriosam totam ex commodi illum beatae sint
                                vero, inventore sapiente ad, eaque exercitationem reiciendis expedita. Doloribus esse
                                error facere.</p>
                        </div>
                        <div class="fxfDesc">
                            <div class="fourBox">
                                <div class="catOne">
                                    <p>Shipping</p>
                                </div>
                                <div class="cattwo">
                                    <p>Free Shipping</p>
                                </div>
                            </div>
                            <div class="fourBox">
                                <div class="catOne">
                                    <p>Stock?</p>
                                </div>
                                <div class="cattwo">
                                    <p>In Stock</p>
                                </div>
                            </div>
                            <div class="fourBox">
                                <div class="catOne">
                                    <p>Choices</p>
                                </div>
                                <div class="cattwo">
                                    <p>1</p>
                                </div>
                            </div>
                            <div class="fourBox">
                                <div class="catOne">
                                    <p>Shipping</p>
                                </div>
                                <div class="cattwo">
                                    <p>Free Shipping</p>
                                </div>
                            </div>
                        </div>
                        <div class="productPrice">
                            <div class="regularPrice">
                                <span><strike>7500/-</strike></span>
                            </div>
                            <div class="discountedPrice">
                                <span>3500/-</span>
                            </div>
                            <div class="addtoCart">
                                <a href="#">Add to Cart</a>
                            </div>
                            <div class="buyNow">
                                <a href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondContainer">
            <div class="productMoreDetails"></div>
            <div class="similarProducts"></div>
            <div class="customersFaq">

            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>

       $( document ).ready(function() {
            $('#pDetails').addClass('productDisplayColor');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#pDetails').click(function() {
                $('#pDetails').addClass('productDisplayColor');
                $('#shipInfo').removeClass('productDisplayColor');
                $.ajax({
                    url: "change?tag=productDisp",
                    success: function(data) {
                        $('#pdData').html(data);
                    }
                })
            });

            $('#shipInfo').click(function() {
                $('#pDetails').removeClass('productDisplayColor');
                $('#shipInfo').addClass('productDisplayColor');
                $.ajax({
                    url: 'change?tag=pShip',
                    success: function(data) {
                        $('#pdData').html(data);
                    }
                })
            });
        });
    </script>
</body>

</html>
