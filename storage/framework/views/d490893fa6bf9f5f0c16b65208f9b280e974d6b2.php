
<?php $__env->startSection('content'); ?>
<div style="margin-top:-150px;">
   <div class="about">
       <div class="container pl-5">
            <div class="title title-sm">Siapa yang membunuh Wina?</div>
            <div class="col-md-12">
                <form action="/cek3">
                  <br>
                  <input type="radio" id="wawan" name="membunuh" value="wawan">
                  <label for="wawan">Wawan Hidayat</label><br>
                  <input type="radio" id="ardiyanto" name="membunuh" value="ardiyanto">
                  <label for="ardiyanto">Ardiyanto Maulana</label><br>
                  <input type="radio" id="yoga" name="membunuh" value="yoga">
                  <label for="yoga">Yoga Kurniawan</label><br>
                  <input type="radio" id="indra" name="membunuh" value="indra">
                  <label for="indra">Indra Widjaja</label><br>
                  <input type="radio" id="wina" name="membunuh" value="wina">
                  <label for="wina">Wina Indriyaningsih</label><br>
                  <input type="radio" id="tidak" name="membunuh" value="tidak">
                  <label for="tidak">Tidak ada</label><br>
                  <input type="submit" value="Submit">
                </form>
            </div>
       </div>
       
   </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <div id="footer">
        <div class="container p-0">
            &copy; 2022 - Net Detective Indonesia
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kisahkasus/resources/views/client/D0405933.blade.php ENDPATH**/ ?>