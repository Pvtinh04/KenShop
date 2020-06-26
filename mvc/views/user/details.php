<div class="row">
            <div class="col-md-9">
			
              <div class="products-details">
			  
                <div class="preview_image">
                  <div class="preview-small">
                    <img id="zoom_03" src="images/home/products/pro1.jpg" data-zoom-image="images/home/products/pro1.jpg" alt="">
                  </div>
                  <div class="thum-image">
                    <ul id="gallery_01" class="prev-thum">
                      <li>
                        <a href="#" data-image="images/home/products/pro1.jpg" data-zoom-image="images/home/products/pro1.jpg">
                          <img src="images/home/products/pro1.jpg" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/home/products/pro2.jpg" data-zoom-image="images/home/products/pro2.jpg">
                          <img src="images/home/products/pro2.jpg" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/home/products/pro1.jpg" data-zoom-image="images/home/products/pro1.jpg">
                          <img src="images/home/products/pro1.jpg" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/home/products/pro2.jpg" data-zoom-image="images/home/products/pro2.jpg">
                          <img src="images/home/products/pro2.jpg" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/home/products/pro1.jpg" data-zoom-image="images/home/products/pro1.jpg">
                          <img src="images/home/products/pro1.jpg" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/home/products/pro2.jpg" data-zoom-image="images/home/products/pro2.jpg">
                          <img src="images/home/products/pro2.jpg" alt="">
                        </a>
                      </li>
                    </ul>
                    <a class="control-left" id="thum-prev" href="javascript:void(0);">
                      <i class="fa fa-chevron-left">
                      </i>
                    </a>
                    <a class="control-right" id="thum-next" href="javascript:void(0);">
                      <i class="fa fa-chevron-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="products-description">
                  <h5 class="name">
                   <?php echo $details['ProductName']; ?>
                  </h5>
                  <p>
                    <img alt="" src="images/star.png">
                    <a class="review_num" href="#">
                      <?php echo $details['RatePerson']; ?> Review(s)
                    </a>
                  </p>
                  <p>
                    Hãng sản xuất 
                    <span class=" light-red">
                      <?php 
					  foreach ( $trademark as $key => $value) {
						  if($value['TradeMarkID']== $details['TradeMarkID']){
							  echo $value['Name'];
						  }
					  } ?>
                    </span>
                  </p>
                  <p>
                    <?php echo $details['Description']; ?>
                  </p>
                  <hr class="border">
                  <div class="price">
                    Price : 
                    <span class="new_price">
                       <?php echo number_format ( $details['Price']); ?>
                      <sup>
                        VNĐ
                      </sup>
                    </span>
                    <span class="old_price">
                       <?php echo number_format ( $details['PromotionPrice']); ?>
                      <sup>
                       VNĐ
                      </sup>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                    <div class="qty">
                      Qty &nbsp;&nbsp;: 
					  <input  type="number" name="quantity" value= "1" min="1" max="<?php echo $details['Quantity']; ?> ">
                      
                    </div>
                    <div class="button_group">
                      <button class="button" >
                        Add To Cart
                      </button>
                      <button class="button compare">
                        <i class="fa fa-exchange">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-heart-o">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-envelope-o">
                        </i>
                      </button>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                  <hr class="border">
                  <img src="images/share.png" alt="" class="pull-right">
                </div>
              </div>
		
			<div class="clearfix">
              </div>
              <div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="#Descraption">
                        Thông tin sản phẩm 
                      </a>
                    </li>
                    <li>
                      <a href="#Reviews">
                        Đánh giá sản phẩm 
                      </a>
                    </li>
                    <li>
                      <a href="#tags">
                        PRODUCT TAGS
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <p>
					  <?php echo $details['Detail']; ?>
                    </p>
                    <p>
                    </p>
                  </div>
                  <div class="tab-content" id="Reviews">
                    <form>
                      <table>
                        <thead>
                          <tr>
                            <th>
                              &nbsp;
                            </th>
                            <th>
                              1 star
                            </th>
                            <th>
                              2 stars
                            </th>
                            <th>
                              3 stars
                            </th>
                            <th>
                              4 stars
                            </th>
                            <th>
                              5 stars
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              Quality
                            </td>
                            <td>
                              <input type="radio" name="quality" value="Blue"/>
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Price
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Value
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Name 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="text" name="" class="input namefild">
                          </div>
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Email 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="email" name="" class="input emailfild">
                          </div>
                          <div class="form-row">
                            <label class="lebel-abs">
                              Summary of You Review 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="text" name="" class="input summeryfild">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Name 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <textarea class="input textareafild" name="" rows="7" >
                            </textarea>
                          </div>
                          <div class="form-row">
                            <input type="submit" value="Submit" class="button">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-content" >
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>
                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>
                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                  </div>
                  <div class="tab-content" id="tags">
                    <div class="tag">
                      Add Tags : 
                      <input type="text" name="">
                      <input type="submit" value="Tag">
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div id="productsDetails" class="hot-products">
                <h3 class="title">
				Sản phẩm 
                  <strong>
                    Hot
                  </strong>
                  
                </h3>
                <div class="control">
                  <a id="prev_hot" class="prev" href="#">
                    &lt;
                  </a>
                  <a id="next_hot" class="next" href="#">
                    &gt;
                  </a>
                </div>
                <ul id="hot">
                  <li>
                    <div class="row">
					<?php foreach ($rs as $key => $value) { ?>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            - <?php echo $value['Sale']; ?> %
                          </div>
                          <div class="thumbnail">
                            <img src="images/home/products/<?php echo $value['ProductImage']; ?>" alt="Product Name">
                          </div>
                          <div class="productname">
                            <?php echo $value['ProductName']; ?>
                          </div>
                          <h4 class="price">
                            <?php echo number_format( $value['Price']); ?>
                          </h4>
                          <div class="button_group">
						   <a href="index.php?page=order&id=<?php echo $value['ProductID']; ?>">
                            <button class="button add-cart" type="button">
                              Add To Cart
                            </button>
							</a>
                            <button class="button compare" type="button">
                              <i class="fa fa-exchange">
                              </i>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
					<?php  }?>
                    </div>
                  </li>
                 
                </ul>
              </div>
              <div class="clearfix">
              </div>
            </div>
            <div class="col-md-3">
              <div class="special-deal leftbar">
                <h4 class="title">
                  Special 
                  <strong>
                    Deals
                  </strong>
                </h4>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/home/products/pro1.jpg" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
               
              </div>
              <div class="clearfix">
              </div>
              <div class="product-tag leftbar">
                <h3 class="title">
                  Products 
                  <strong>
                    Tags
                  </strong>
                </h3>
                <ul>
                  <li>
                    <a href="#">
                      Lincoln us
                    </a>
                  </li>
                  
                </ul>
              </div>
              <div class="clearfix">
              </div>
              
              
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>