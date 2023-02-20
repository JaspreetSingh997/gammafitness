<?php
    if(isset($_GET['tag']))
    {
        $tag = $_GET['tag'];

        if($tag == 'productDisp')
        {
                ?>
<div class="pDescriptionContainer">
    <div class="productTitle">
        <h1>Multi Storage Rack</h1>
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
<?php
        }

        else if ($tag == 'pShip')
        {
                ?>
                <div class="productShipInfo">
                        <table class="prodShipDetails">
                                
                        </table>
                </div>
                <?php
        }
        else 
        {

        }
    }
?>
