

<?php $__env->startSection('content'); ?>

	<main>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<!-- <div class="row"> -->
				<div class="col-sm-12"> 
					<h3 class="card-text">ตะกร้าสินค้า</h3>
				</div>
		        <div class="col-sm-8">
		              <!-- <h3 class="card-text">ตะกร้าสินค้า</h3> -->
		           
		           <table class="table">
					  <thead>
					    <tr>
					      <!-- <th scope="col">#</th> -->
					      <th scope="col">สินค้า</th>
					      <th scope="col">ราคา</th>
					      <th scope="col">จำนวน</th>
					      <th scope="col">ยอดรวม</th>
					      <th scope="col">Action</th>

					    </tr>
					  </thead>
					  <tbody>
                     
                      <?php $__currentLoopData = $cartCollection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                        <form action="<?php echo e(url('update-cart')); ?>"  enctype="multipart/form-data" method="POST">
                            <input type="hidden" name="id" value="<?php echo e($list->id); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <tr>
                            <th>
                            <div>
                                <img  style="width: 90px; height: 120px;" src="<?php echo e(url('products/'.$list->attributes['image_name'])); ?>" alt="...">
                                <span><?php echo e($list->name); ?></span>
                            </div> 

                            </th>

                            <td><?php echo e($list->price); ?></td>
                            <td><input id="size" type="number" name="quantity"  min="0" value="<?php echo e($list->quantity); ?>"></td>
                            <td> <?php echo e($list->price * $list->quantity); ?> </td>
                            <td>  <button class="btn btn-outline-secondary">update</button></td>
                            <tr>
                        </form>
                        
                        <!-- <button>Update Cart</button> -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          

					  </tbody>
					</table>
		             <!-- <button type="button" class="btn btn-outline-secondary">ซื้อสินค้าต่อไป</button> -->
					 <!-- <form action="<?php echo e(url('detail-cart')); ?>"  enctype="multipart/form-data" method="POST"> -->
                            <!-- <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> -->
							<a   class="btn btn-outline-secondary" href="<?php echo e(url('/')); ?>">ซื้อสินค้าต่อไป</a>
							<a  class="btn btn-dark" href="<?php echo e(url('clear-cart')); ?>">ล้างตะกร้าสินค้า</a>
							<!-- <a class="nav-link " href="<?php echo e(url('clear-cart')); ?>">Cart <?php echo e(Cart::getContent()->count()); ?></a> -->
		             <!-- <button type="button" class="btn btn-dark">ล้างตะกร้าสินค้า</button> -->
					 <!-- </form> -->

                     
		        </div>

		        <div class="col-sm-4">


                    <form action="<?php echo e(url('checkout')); ?>"  enctype="multipart/form-data" method="POST">
                        
                        <input type="hidden" name="cartCollection" value="<?php echo e($cartCollection); ?>">
                        <input type="hidden" name="total" value="<?php echo e($total); ?>">
                        
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <h3 class="card-text">สรุปคำสั่งซื้อ</h3>
                        
                        <div class="row">
                            <div class="col-6"><span>ยอดรวม</span></div>       
                            <div class="col-6"><span>THB <?php echo e($total); ?></span></div>    	
                        </div>
                        <br>
                        <!-- <div class="row">
                            <div class="col-6"><span>ค่าสั่ง</span></div>       
                            <div class="col-6"><span>THB 1.00</span></div>    	
                        </div> -->
                        <hr>
                        <!-- <div class="row">
                            <div class="col-6"><span>ยอดสุทธิ</span></div>       
                            <div class="col-6"><span>THB <?php echo e($total); ?></span></div>    	
                        </div> -->
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block">ไปชำระเงิน</button>
                            </div>
                        </div>
                    </form>
		        </div>
			</div>
	</main>
    


	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\project\book-shop\resources\views/cart/order-detail.blade.php ENDPATH**/ ?>