<div class="ft-contact-form-wrapper">
                    <form action="test.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" placeholder="Your Name Here">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" id="email" placeholder="Your Email">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="company" id="company" placeholder="Company">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" id="phone" placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="city" id="city" placeholder="City">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="country" id="country" placeholder="Country">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="type_of_goods" id="type_of_goods" placeholder="Type of goods">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="quantity" id="quantity" placeholder="Quantity">
                            </div>
                            <div class="col-md-6">
                                <input type="date" name="shipping_date" id="shipping_date" placeholder="Shipping date">
                            </div>
                           
                            <div class="col-md-12">
                                <textarea type="text" name="details" id="details" placeholder="Service Requested and Other details:"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="ft-sb-button" style="background:#00570E;">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                include './index.php';
                ?>