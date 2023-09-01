<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fashion ecommerce provides retails | showrooms | selling products</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- bootstrap css file -->
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
     <script src="js/cart_total.js"></script>

</head>

<body>
    <!-- fashion top header start here -->
    <section id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <p class="ms-5 p-3">Free Shipping on All orders Over $75!</p>
                    </p>
                </div>
                <div class="col-md-5">
                    <ul class="header-navbar">
                        <li><a href="">Myaccount</a></li>
                        <li><a href="">Wishlist</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="">Currency
                                USD</a>

                            <ul class="dropdown-menu">
                                <li><a href="">$$ dollar</a></li>
                                <li><a href="">Rs. INR</a></li>

                            </ul>

                        </li>
                        <li><a href="" class="text-danger"><i class="bi bi-cart"></i> My Cart(2)</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>



<!-- fashion content start here -->

<section id="content">
<div class="card mt-5 container p-5">
<div class="card-header bg-white"><h4><span>My Cart(1 item)</span></h2></h4></div>
<div class="card-body">

    <table class="table table-responsive">
        <tr align="center">
            <td><img src="https://images.shopclues.com/images1/thumbnails/116980/320/320/153323501-116980797-1676629226.jpg" class="img-fluid" style="width: 85px; height: 85px;"></td>
            <td>Polo shirt best in price</td>
            <td>Xl in size</td>
            <td>Rs. <input type="text" name="price" id="price" value="3650" readonly style="border:none; width:45px">/-</td>
            <td><input type="number" name="qty" id="qty" min="1" max="10" value="1" class="form-control w-25" onchange="carttotal()"></td>
            <td><i class="bi bi-trash fs-4 text-danger"></i></td>
        </tr>
    </table>


</div>
<div class="card-footer bg-white shadow p-3">

    <div class="row">
        <div class="col-md-7">
            <p><i class="bi bi-geo-alt fs-2"></i> Delivery pin code</p>
            <div class="input-group p-1 w-50">
                <input type="text" name="pincode" placeholder="Enter your pincode" class="form-control">
                <span class="input-group-text bg-primary text-white">Submit</span>

            </div> 
            </div>

            <div class="col-md-4">
            <h4>Total₹   <span class="float-end fs-6" id="tot">3650</span></h4>

            <b>Grand Total₹ <span class="float-end" id="tot1"> 3650 </span></b>
            <p>Inclusive of all the applicable taxes</p>

            <p><button type="submit" name="checkout" class="btn btn-primary text-white btn-lg w-100">Checkout</button></p>
            </div>

        </div>
    </div>


</div>
</div>
</section>
                