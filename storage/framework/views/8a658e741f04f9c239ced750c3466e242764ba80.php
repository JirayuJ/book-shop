

<?php $__env->startSection('content'); ?>



  <main>
    <div class="py-5 text-center">
     
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">สรุปคำสั่งซื้อ</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">ยอดรวม</h6>
              <small class="text-muted">Total</small>
            </div>
            <span class="text-muted"> <?php echo e($total); ?></span> <span >บาท</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">ค่าส่ง</h6>
              <small class="text-muted">Delivery cost</small>
            </div>
            <span class="text-muted" id="shippping"></span> <span>บาท</span>
          </li>

          <hr>
          <!--  <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">ยอดสุทธิ</h6>
              <small class="text-muted">net</small>
            </div>
            <span class="text-muted">THB 500.00</span>
          </li> -->
         
       <!--    <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">ยอดสุทธิ</h6>
              <small>net</small>
            </div>
            <span class="text-success">THB 500.00</span>
          </li> -->
          <li class="list-group-item d-flex justify-content-between">
            <span>ยอดสุทธิ</span>
            <strong id="total"><?php echo e($total); ?> </strong> <strong >บาท</strong>
          </li>
        </ul>

      
      </div>


      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">ชำระเงิน</h4>
        <!-- <form class="row g-3 needs-validation" novalidate> -->
        <!-- <form class="needs-validation" novalidate> -->
        <form action="<?php echo e(url('check-confirm')); ?>"  enctype="multipart/form-data" method="POST" class="needs-validation" novalidate>
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

          <!-- <input type="text" id="price_total" value="100"> -->
          <!-- name="total" -->
          <input type="hidden" id="price_total" name="total" value="<?php echo e($total); ?>">
          <input type="hidden" id="sum" name="sum" value="<?php echo e($total); ?>" >


          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">ชื่อ</label>
              <input type="text" class="form-control" id="firstName" name="firstName"  placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first firstName is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">นามสกุล</label>
              <input type="text" class="form-control" id="lastName" name="lastName"   placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

			    <div class="col-sm-12">
			 	  <label for="lastName" class="form-label">ประเทศ</label>
			 	  <select class="form-control" name="country" value="" id="sel1">
			        <option>ไทย</option>
			        <option>ไทย</option>
			        <option>ไทย</option>
			        <option>ไทย</option>
		     	</select>
			 </div>

              <div class="col-sm-12">
              	<label for="lastName" class="form-label">ที่อยู่</label>
              	<textarea class="form-control" name="address" value="" rows="5" id="comment"></textarea>
              </div>

              	<div class="col-sm-6">
			 		<label for="lastName" class="form-label">แขวง/ตำบล</label>
			 		<input type="text" class="form-control" name="district" id="district" placeholder="" value="" required>
				 </div>

				 	<div class="col-sm-6">
			 		<label for="lastName" class="form-label">เขต/อำเภอ</label>
			 		<input type="text" class="form-control" id="county" name="county" placeholder="" value="" required>
				 </div>

				 <div class="col-sm-6">
			 		<label for="lastName" class="form-label">จังหวัด</label>
			 		<input type="text" class="form-control" id="province" name="province" placeholder="" value="" required>
				 </div>

				 <div class="col-sm-6">
			 		<label for="lastName" class="form-label">รหัสไปรษณีย์</label>
			 		<input type="text" class="form-control" id="postcode" name="postcode" placeholder="" value="" required>
				 </div>

         <div class="col-sm-12">
			 		<label for="lastName" class="form-label">อีเมล์</label>
			 		<input type="email" class="form-control" id="email" name="email" placeholder="" value="" required>
				 </div>

				  <div class="col-sm-12">
			 		<label for="lastName" class="form-label">เบอร์ติดต่อ (กรุณาระบุหมายเลขโทรศัพท์ เฉพาะตัวเลขเท่านั้น)</label>
			 		<input type="text" class="form-control" id="telephone" name="telephone" placeholder="" value="" required>
				 </div>

				 <hr>
				 <br><br><br><br><br>
			

	
             
          	<hr class="my-12">
			<div class="col-md-12 col-lg-8">
          		<h5 class="mb-3">เลือกขนส่ง</h5>

	          <div class="col-4">
	            <div class="form-check">
	              <input id="credit" name="delivery" type="radio" onchange="Shippping(0)" class="form-check-input" value="0" checked required>
	              <label class="form-check-label"  for="credit">Free Shippping</label>
	            </div>
	            <div class="form-check">
	              <input id="debit" name="delivery" type="radio" onchange="Shippping(15)"  value="15" class="form-check-input" required>
	              <label class="form-check-label" for="debit">Kerry Express</label>
	            </div>
	            
	          </div>

        
          	<hr class="my-4">
			<div class="col-md-12 col-lg-8">
          		<h5 class="mb-3">Payment</h5>

		          <div class="my-3">
		             <div class="form-check">
		              <input id="credit" name="payment" type="radio" class="form-check-input" checked required>
		              <label class="form-check-label" for="credit">Cash</label>
		            </div>
		            <div class="form-check">
		              <input id="debit" name="payment" type="radio" class="form-check-input" required>
		              <label class="form-check-label" for="debit">Credit/Debit</label>
		            </div>
		          </div>
      		</div>
      		 </div>


          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

  <script>


    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()


   
    // var price_total = document.getElementById("price_total").value;
    // var price_total = document.getElementById('price_total');
    var price_total = document.getElementById("price_total").value

    var total = price_total;
    document.getElementById("sum").value  = total;
    console.log(price_total)
    
    
    // var x = document.getElementById("myText").value;
    function Shippping(price) {
      total = parseInt(price_total) + parseInt(price)
      // console.log(total)
      // console.log(parseInt(price_total))
      // console.log(total)
  // document.getElementById("demo").innerHTML = myFunction(4, 3);
     document.getElementById("shippping").innerHTML = price;
     document.getElementById("sum").value  = total;

      document.getElementById("total").innerHTML = total;
      // return total;
    } 
// });
  // document.getElementById("total").innerHTML = Shippping();
  // document.getElementById("demo").innerHTML = x;
</script>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Work\project\book-shop\resources\views/checkout/index.blade.php ENDPATH**/ ?>