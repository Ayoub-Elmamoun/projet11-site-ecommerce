<?php 


 function component($product_name,$product_price,$product_id){
   $element = "
   <div class=\"col\">
   <div class=\"product__item-3 mb-40\">
       <div class=\"product__thumb-3 fix p-relative w-img\">
           <a href=\"product-details.html\">
               <img src=\"assets/img/products/2/product-1.jpg\" alt=\"\">
           </a>
           <div class=\"product__flash-3\">
               <span>15%</span>
           </div>
           <div class=\"product__action product__action-3 transition-3\">
               <ul>
                  <li>
                     <a href=\"#\">
                       <i class=\"fas fa-heart\"></i>                      
                     </a>
                  </li>
                  <li>
                       <a href=\"javascript:void(0)\" data-bs-toggle=\"modal\" data-bs-target=\"#productModalId\">
                           <i class=\"fas fa-eye\"></i>
                       </a>
                  </li>
                  <li>
                       <a href=\"#\">
                           <i class=\"fas fa-signal-4\"></i>
                       </a>
                  </li>
               </ul>
           </div>
       </div>
       <div class=\"product__content-3\">
           <div class=\"product__tag-3\">
               <span>
                   <a href=\"#\">Wooden</a>
               </span>
           </div>
           <h3 class=\"product__title-3\">
               <a href=\"product-details.html\">$product_name</a>
           </h3>
           <div class=\"product__price-3 fix\">
               <span class=\"price\">$$product_price</span>
               <div class=\"product__add-cart-3 transition-3\">
                   <a href=\"cart.php\" class=\"add-to-cart-btn-2\" name=\"add\">+ Add To Cart</a>
                   <input type=\"hidden\" name=\"product_id\" value=\"$product_id\">

               </div>
           </div>
       </div>
   </div>
</div>
   ";
   echo $element;  
 }


?>