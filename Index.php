<?php
include('./header.php');
include('Assets/components/corousel.php');
include('./connection.php');
//  include('Assets/components/default_min_header.php');
?>
<!-- navigation -->

<!-- min header -->
<div class="sec-div" style="background-color: #ffffcc;">
    <div class="inside2 text-center p-5">
        <p class="h2 fw-bold">Fresh And Organic Products For You</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe ducimus doloremque temporibus sequi earum
            excepturi quis consectetur! Eos expedi
            ta magni fuga molestiae error! Neque, facilis a odio quis corrupti fugit.</p>
    </div>
    <div class="container pb-5">
        <div class="row gy-4">
            <div class="col-md-6 col-lg-3 ">
                <!-- Content for the first div -->
                <div class="p-3 bg-warning">
                    <div class="images">
                        <img src="Assets/icons/bell2(1).png" class="card-img-top" alt="..." style="width: 60px; margin: auto; padding-top: 10px;">
                    </div>
                    <hr>
                    <div class="information">
                        <p class="h3">Fresh & Organic</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, hic culpa! Unde id reiciendis, nihil, distinctio sint iure</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <!-- Content for the first div -->
                <div class="p-3 bg-success">
                    <div class="images">
                        <img src="Assets/icons/food.png" class="card-img-top" alt="..." style="width: 60px; margin: auto; padding-top: 10px;">
                    </div>
                    <hr>
                    <div class="information">
                        <p class="h3">100% Natural</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, hic culpa! Unde id reiciendis, nihil, distinctio sint iure</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <!-- Content for the second div -->
                <div class="p-3 bg-warning">
                    <div class="images">
                        <img src="Assets/icons/rocket.png" class="card-img-top" alt="..." style="width: 60px; margin: auto; padding-top: 10px;">
                    </div>
                    <hr>
                    <div class="information">
                        <p class="h3">Best Quality</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, hic culpa! Unde id reiciendis, nihil, distinctio sint iure</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ">
                <!-- Content for the third div -->
                <div class="p-3 bg-success">
                    <div class="images">
                        <img src="Assets/icons/bag.png" class="card-img-top" alt="..." style="width: 60px; margin: auto; padding-top: 10px;">
                    </div>
                    <hr>
                    <div class="information">
                        <p class="h3">Food Safety</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, hic culpa! Unde id reiciendis, nihil, distinctio sint iure</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- Menu Div -->
<div class="container-fluid text-light pt-4 ps-1 pe-1 pb-3 bg-dark">
    <div class="text-center pb-5 pt-3">
        <p class="h2 fw-bold">Our Best Offers</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur, aliquid libero. Corrupti, porro eaque perfe
            re<br>ndis, architecto culpa repu diandae eligendi similique quidem tenetur esse odio, totam omnis cum! Perferendis, architecto veritatis.</p>
    </div>
    <div class="container">
        <div class="row gy-4 ">

            <?php
            $product = "SELECT * FROM products";
            $show_result = mysqli_query($conn, $product);
            while ($row = mysqli_fetch_assoc($show_result)) {

            ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card text-light bg-dark">
                        <img src=<?php echo $row['productimg'] ?> class="card-img-top" alt="product images" style="max-height: 234px;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold"><?php echo $row['productname'] ?></h5>
                            <p class="card-text"><?php echo $row['productdetail'] ?></p>
                            <a href="#" class="btn btn-outline-warning">Add To Cart</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

</div>


<?php
include('./footer.php');
?>