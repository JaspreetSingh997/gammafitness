<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Landing Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body>
    <section id="productLandingHome">
        <header class="productHead">
            <nav id="navbar">
                <h1 class="productLogo">
                    Gamma Gym
                </h1>
                <ul class="nav">
                    <li>Overview</li>
                    <li>Specs</li>
                    <div class="buy">
                        <li>Buy Now</li>
                    </div>
                </ul>
            </nav>
        </header>
        <div class="" id="header">
            <div class="productMainName">
                <h1 class="animate__animated animate__flipInX">Gamma Fitness Premium Rubber Coated Bouncer Dumbbells
                </h1>
            </div>
        </div>
        <section id="mainContent">
            <h1>Fitness Equipments</h1>
            <div class="featuresContainer">
                <div class="featuresOne">
                    <p>Featured Text 1- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, possimus
                        maiores similique delectus veritatis eum consequuntur recusandae error aperiam ut, quod doloremque
                        vero officia dicta odit, rem aut exercitationem soluta.</p>
                    <img width="400" height="400" src="{{ asset('images/dumbbells/Dumbbell5.jpg') }}" alt="">
                </div>
                <div class="featuresTwo">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex magnam velit quisquam ipsa amet,
                        quibusdam at
                        sed
                        sit fugit. Earum, excepturi! Id necessitatibus atque quaerat laborum facere accusantium aliquid
                        officiis!
                    </p>
                    <img width="400" height="400" src="{{ asset('images/dumbbells/Dumbbell21.jpg') }}" alt="">

                </div>
                <div class="featuresThree">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, numquam illo. Odit quae nobis
                        voluptatum
                        suscipit sequi illo molestias consequuntur! Sapiente pariatur culpa labore rerum soluta obcaecati
                        qui,
                        aliquid blanditiis!</p>
                    <img width="400" height="400" src="{{ asset('images/dumbbells/Dumbbell13.jpg') }}" alt="">
                </div>
            </div>

            {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime alias hic inventore, perferendis quae,
                facilis expedita deleniti, cupiditate id voluptatem doloribus cumque odio animi ducimus fugiat provident
                sunt. Deleniti, maxime.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, reiciendis officia fugiat ullam harum
                cumque
                quibusdam, asperiores incidunt eos quis ipsum voluptatem quasi maiores libero sequi, accusamus dolorem
                ratione. Illo.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugiat soluta, neque debitis officia
                officiis
                tenetur dolor a eaque natus doloremque hic laboriosam eligendi ut aliquid minima voluptatem aspernatur
                ipsam?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio vitae, dolores voluptas culpa error
                illo
                a aliquam ut necessitatibus voluptate laborum maxime animi eaque iste! Amet, odit ipsum. Quod, beatae.
            </p> --}}
        </section>
        <div class="" id="headertwo"></div>
        {{-- <div class="text">
            <p>lorem Ipsum One</p>
        </div>

        <div class="texttwo">
            lorem Ipsum Two
        </div> --}}
        <div class="dumbellAnimPanel">
            <div id="dmbOverview" class="dumbellOverview">
                <div class="dmbDesc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia possimus delectus eveniet modi nisi. Aspernatur blanditiis veniam possimus, ipsum sequi enim laudantium nisi dolor deleniti placeat quam numquam autem veritatis.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem culpa quos qui, atque accusantium iste ex nisi harum veniam voluptatum laborum error, quasi maxime quibusdam soluta facilis temporibus. Reprehenderit, neque?</p>
                </div>
                <!-- <img id="imageToMove" class="dumbellTop" src="Assets/images/dumble.png" alt="Dumbell Pic"> -->
                <!-- <img class="bottomStand" src="Assets/images/dumble stand.png" alt="Dumbell Stand"> -->
            </div>
        </div>
        <div class="splitview skewed">
            <div class="panel bottom">
                <div class="content">
                    <div class="description">
                        <h1>The original Dumbells.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo corrupti quos nihil sunt fuga
                            praesentium officia</p>
                    </div>

                    <img src="{{ asset('images/dumbellOriginal.jpg') }}" alt="Original">
                </div>
            </div>

            <div class="panel top">
                <div class="content">
                    <div class="description">
                        <h1>Best Quality.</h1>
                        <p>ex mollitia accusamus, cumque quod obcaecati ipsam molestiae culpa placeat consectetur! Sit,
                            explicabo minima.</p>
                    </div>

                    <img src="{{ asset('images/dumbellLight.jpg') }}" alt="Opacity">
                </div>
            </div>

            <div class="handle"></div>
        </div>
        <div class="videoPane">
            <video id="dumbVid" width="100%" height="100%" autoplay loop>
                <source src="{{ asset('videos/dumbellMain.mp4') }}" type="video/mp4">
                </source>
            </video>
        </div>

        <div class="ImageHovers">
            <div class="imageoneHoveringLeft">
                <div class="imageoneHoverLeftImage">
                    <img src="{{ asset('images/imageHover.jpg') }}" alt="">
                </div>
                <div class="imageOneHoverRightContent">
                    <h1>Smart, Compact Design</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium earum eaque veniam culpa
                        maxime tempora incidunt fuga, debitis, laborum consequatur repudiandae quibusdam sit atque qui
                        quidem. Expedita consequuntur quos delectus.</p>
                </div>
            </div>
            <div class="imageSecondHoveringRight">
                <div class="imageSecondHoverRightContent">
                    <h1>Trusted by the Stars</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium earum eaque veniam culpa
                        maxime tempora incidunt fuga, debitis, laborum consequatur repudiandae quibusdam sit atque qui
                        quidem. Expedita consequuntur quos delectus.</p>
                </div>
                <div class="imageSecondHoverRightImage">
                    <img src="{{ asset('images/imageHover2.jpg') }}" alt="">
                </div>

            </div>
        </div>
        <div class="gifSection">

        </div>
        <!-- <div class="backgroundclip">
            <p class="textclip">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, voluptate quo quae exercitationem
                enim dicta iusto non fuga soluta aspernatur cupiditate eligendi nobis sapiente eaque, placeat ipsa atque
                rerum? Eius?
            </p>
        </div> -->
    </section>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(window).scroll(function() {

            var homeSc = $('#home').scrollTop();
            // if(homeSc >= 100)
            // {
            //     $(document).alert("Test");
            // }


            var scroll = $(window).scrollTop();
            if (scroll >= 70) {
                $('.productHead').addClass('headBckFix');
                // $('.text').addClass('textoneAppear');
            } else {
                $('.productHead').removeClass('headBckFix');
                // $('.text').removeClass('textoneAppear');
            }

            // if (scroll >= 250) {
            //     $('.texttwo').addClass('texttwoAppear');
            // }
            // else {
            //     $('.texttwo').removeClass('texttwoAppear');
            // }

            // if (scroll >= 790) {
            //     $('#imageToMove').addClass('changePos');
            // }
            // else {
            //     $('#imageToMove').removeClass('changePos');
            // }

            // if (scroll >= 2700) {
            //     $('.imageoneHoverLeftImage').addClass('imageoneHoverAppend');
            //     $('.imageOneHoverRightContent').addClass('contentoneHoverAppend')
            // }
            // else {
            //     $('.imageoneHoverLeftImage').removeClass('imageoneHoverAppend');
            //     $('.imageOneHoverRightContent').removeClass('contentoneHoverAppend')
            // }

            // if (scroll >= 3300) {
            //     $('.imageSecondHoverRightImage').addClass('imageSecondHoverAppend');
            //     $('.imageSecondHoverRightContent').addClass('secondRightContent');
            // }
            // else {
            //     $('.imageSecondHoverRightImage').removeClass('imageSecondHoverAppend')
            //     $('.imageSecondHoverRightContent').removeClass('secondRightContent');
            // }
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new WOW.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var parent = document.querySelector('.splitview'),
                topPanel = parent.querySelector('.top'),
                handle = parent.querySelector('.handle'),
                skewHack = 0,
                delta = 0;

            // If the parent has .skewed class, set the skewHack var.
            if (parent.className.indexOf('skewed') != -1) {
                skewHack = 1000;
            }

            parent.addEventListener('mousemove', function(event) {
                // Get the delta between the mouse position and center point.
                delta = (event.clientX - window.innerWidth / 2) * 0.5;

                // Move the handle.
                handle.style.left = event.clientX + delta + 'px';

                // Adjust the top panel width.
                topPanel.style.width = event.clientX + skewHack + delta + 'px';
            });
        });
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
