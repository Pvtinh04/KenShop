<div class="hot-products">
   <h3 class="title" style="text-align: center; ">Sản phẩm <strong>Hot</strong></h3>
   <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
   <ul id="hot">

      <li>
         <div class="row">
             <?php

foreach ($rs as $key => $value) {
	if ($value['Status'] == 1) {

		?>

                <div class="col-md-3 col-sm-6">
                  <div class="products">
                     <div class="offer">-<?php echo $value['Sale']; ?>%</div>
                     <div class="thumbnail"><a href="index.php?page=details&id=<?php echo $value['ProductID']; ?>&method=details"><img src="images/home/products/<?php echo $value['ProductImage']; ?>" alt="Product Name"></a></div>
                     <div class="productname"><?php echo $value['ProductName']; ?></div>
                     <h4 class="price"><?php echo number_format($value['Price']) . " VNĐ"; ?></h4>
                     <div class="button_group">
                        <a href="index.php?page=order&id=<?php echo $value['ProductID']; ?>">
                           <button class="button add-cart" type="button">Add To Cart</button>
                        </a>
                        <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                        <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                     </div>
                  </div>
               </div>
               <?php
}
}

?>

      </div>

   </li>


</ul>
<div class="button_group" style="color: red; text-align: center;"><button class="button add-cart" type="button">Xem Tất Cả</div>
</div>
<div class="clearfix"></div>
<div class="featured-products">
   <h3 class="title"style="text-align: center; ">Sản phẩm <strong>Bán Chạy Nhất</strong></h3>
   <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
   <ul id="featured">

      <li>
         <div class="row">
             <?php

foreach ($rs as $key => $value) {
	if ($value['Status'] == 2) {

		?>

                <div class="col-md-3 col-sm-6">
                  <div class="products">
                    <div class="offer">-<?php echo $value['Sale']; ?>%</div>
                    <div class="thumbnail"><a href="index.php?page=details&id=<?php echo $value['ProductID']; ?>&method=details"><img src="images/home/products/<?php echo $value['ProductImage']; ?>" alt="Product Name"></a></div>
                    <div class="productname"><?php echo $value['ProductName']; ?></div>
                    <h4 class="price"><?php echo number_format($value['Price']); ?></h4>
                    <div class="button_group">
                       <a href="index.php?page=order&id=<?php echo $value['ProductID']; ?>">
                        <button class="button add-cart" type="button">Add To Cart</button>
                     </a>
                     <button class="button compare" type="button">
                        <i class="fa fa-exchange"></i></button>
                        <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i>
                           </button
                           ></div>
                        </div>
                     </div>
                   <?php
}
}

?>

            </div>
         </li>


      </ul>
      <div class="button_group" style="color: red; text-align: center;"><button class="button add-cart" type="button">Xem Tất Cả</div>
      </div>


      <div class="clearfix"></div>
      <div class="featured-products" style="">
         <h3 class="title" style="text-align: center; "><strong>Bí Quyết Làm Đẹp </strong></h3>
         <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
         <ul id="featured">
            <li>
               <div class="row">
                  <div class="col-md-3 col-sm-6">
                     <div class="news">
                        <div class="thumbnail"><a href="index.php?page=newsdetail"><img src="images/home/products/pro7.jpg" alt="News Name"></a></div>
                        <div class="newsname" style="font-size: 20px; font-weight: bold;font-family: serif;" >News</div>
                        <p></p>

                     </div>
                  </div>


               </div>
            </li>


         </ul>
         <div class="button_group" style="color: red; text-align: center;"><button class="button add-cart" type="button">Xem Tất Cả</div>
         </div>
          <div class="clearfix"></div>