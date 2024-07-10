	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Confirmation</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			<div class="row order_d_inner">
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Order Info</h4>
                        <ul class="list">
                            <li><a href="#"><span>Order email</span>: <?=$in4['user_email'] ?></a></li>
                            <li><a href="#"><span>FullName</span>: <?=$in4['user_fullname'] ?></a></li>
                            <li><a href="#"><span>Total</span>: <?= number_format($total['total']) ?>đ</a></li>
                            <li><a href="#"><span>Payment method</span>: Cash</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Billing Address</h4>
                        <ul class="list">
                            <li><a href="?mod=page&act=contact"><span>Address</span> : QTSC 9 Building, Tô Ký, Tân Chánh Hiệp, Quận 12, Thành phố Hồ Chí Minh</a></li>
                            <li><a href="#"><span>City</span> : Karma Shop </a></li>
                            <li><a href="#"><span>Country</span> : Ho Chi Minh city</a></li>
                            <li><a href="#"><span>Postcode </span> : 36952</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details_item">
                        <h4>Shipping Address</h4>
                        <ul class="list">
                            <li><a href="#"><span>Street</span> : <?= $in4['user_address'] ?></a></li>
                            <li><a href="#"><span>City</span> : ....</a></li>
                            <li><a href="#"><span>Country</span> : Ho Chi Minh city</a></li>
                            <li><a href="#"><span>Postcode </span> : ...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<div class="order_details_table">
                <h2>Order Details  </h2>
				<div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Deal Day </th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach($bill as $b): ?>
                            <tr>
								<td>
									<p><?=$b['product_name'] ?></p>
								</td>
								<td>
									<h5>x 01</h5>
								</td>
								<td>
									<p><?= $b['orders_day'] ?></p>
								</td>
								<td>
									<p><?=  number_format($b['product_price']) ?>đ</p>
								</td>
							</tr>
                            <?php endforeach; ?>
							</tr>
							<tr>
								<td></td>
								<td>
									<h4></h4>
								</td>
								<td>
									<h5> Shipping</h5>
								</td>
								<td>
									<p>Flat rate: 50.000đ</p>
								</td>
							</tr>
							<tr>
								<td>
									
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<h5>Total : </h5>
								</td>
								<td>
									<p><?= number_format($total['total']) ?>đ</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->