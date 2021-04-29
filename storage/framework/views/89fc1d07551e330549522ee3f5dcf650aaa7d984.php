<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Book</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="/new_product">สินค้าใหม่ <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/best_selling">สินค้าขายดี</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/discount">สินค้าลดราคา</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="/recommend_product">สินค้าแนะนำ</a>
        </li>
    </ul>

    <ul class="navbar-nav  right">
        <li class="nav-item">
            <a class="nav-link " href="<?php echo e(url('get-to-cart')); ?>">Cart <?php echo e(Cart::getContent()->count()); ?></a>
        </li>

        <?php if(Auth::guest()): ?>
        <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('login')); ?>">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('register')); ?>">Register</a>
        </li>
        <?php else: ?>
            <li class="dropdown">
            <li class="nav-item">
                <a class="nav-link " href="<?php echo e(url('home')); ?>">  <?php echo e(Auth::user()->name); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo e(route('logout')); ?>"> ออกจากระบบ</a>
            </li>
             
                <ul class="dropdown-menu" role="menu">
                    <li>
                        

                    </li>
                </ul>
            </li>
        <?php endif; ?>

        <!-- <li class="nav-item">
            <a class="nav-link " href="#">login</a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="#">Register</a>
        </li> -->
       
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    </div>
</nav><?php /**PATH C:\Work\project\book-shop\resources\views/layouts/menu.blade.php ENDPATH**/ ?>