

<?php $__env->startSection('content'); ?>


    <main>
		<section class="py-5 text-center container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo e(url('cover/dFQROr7oWzulq5Fa4VWhrhQsHbKJzLhRn3mIMXQLmzNy3d6h6BhJZCbkC8YOCs3MqQ4.jpg')); ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo e(url('cover/dFQROr7oWzulq5Fa4VWhrhQsHbKJzLhRn3mIMXQLmzNy3d6h6BhJZCbkC8YOCs3MqQ4.jpg')); ?>" alt="First slide">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo e(url('cover/dFQROr7oWzulq5Fa4VWhrhQsHbKJzLhRn3mIMXQLmzNy3d6h6BhJZCbkC8YOCs3MqQ4.jpg')); ?>" alt="First slide">

                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
		</section>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <h3>สินค้าใหม่</h3>
        </div>

		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

       
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4">
            <div class="card shadow-sm" style="text-align: center;">
    
                <img  src="<?php echo e(url('products/'.$pro->image_name)); ?>"  style="width: 130; height: 250px;    display: block; margin-left: auto; margin-right: auto;"  alt="<?php echo e($pro->image_name); ?>"  class="img-thumbnail center">
                <div class="card-body">
                <h5 class="card-text"><?php echo e($pro->name); ?></h5>
                <!-- <p class="card-text"><?php echo e($pro->detail); ?></p> -->
                <div class="d-flex justify-content-between align-items-center">
                    <div class="bottom-wrap">
                        <!-- <form action="<?php echo e(url('add-to-cart' , $pro->id )); ?>"  enctype="multipart/form-data" method="POST"> -->
                            <!-- <button type="button" class="btn btn-primary btn-block">ไปชำระเงิน</button> -->
                            <a href="<?php echo e(url('detail/'.$pro->id)); ?>" class="btn btn-primary btn-block" > Buy now </a>
                        <!-- </form> -->

                        <div class="price-wrap">
                            <p class="card-text">ลด <?php echo e($pro->discount); ?> % </p>
                            <span class="price h5"><?php echo e($pro->price - ($pro->price * $pro->discount/100 )); ?>   </span> <br>
                            <small class="text-success">Free shipping</small> 
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
       

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



 

        </div>	
	</main>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\project\book-shop\resources\views/front/new.blade.php ENDPATH**/ ?>