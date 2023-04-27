
<?php $__env->startSection('content'); ?>
<div style="margin-top:-150px;">
   <div class="about">
       <div class="container pl-5">
            <div class="title title-sm">Pilih 2 data yang membuktikan bahwa Yoga berbohong:</div>
            <div class="col-md-12">
                <form action="/cek1a">
                  <br>
                  <input type="checkbox" id="bohong1" name="bohong1" value="1">
                  <label for="bohong1">Artikel Koran - Handoko Kurniawan</label><br>
                  <input type="checkbox" id="bohong2" name="bohong2" value="2">
                  <label for="bohong2">Artikel Koran - Polemik Pembangunan Hotel</label><br>
                  <input type="checkbox" id="bohong3" name="bohong3" value="3">
                  <label for="bohong3">Artikel Koran - Sosok di Balik Kutha Estate</label><br>
                  <input type="checkbox" id="bohong4" name="bohong4" value="4">
                  <label for="bohong4">Foto barang milik korban dan tersangka</label><br>
                  <input type="checkbox" id="bohong5" name="bohong5" value="5">
                  <label for="bohong5">Foto barang bukti</label><br>
                  <input type="checkbox" id="bohong6" name="bohong6" value="6">
                  <label for="bohong6">Denah Restoran</label><br>
                  <input type="checkbox" id="bohong7" name="bohong7" value="7">
                  <label for="bohong7">Foto barang di kamar Wina</label><br>
                  <input type="checkbox" id="bohong8" name="bohong8" value="8">
                  <label for="bohong8">Bukti forensik</label><br>
                  <input type="checkbox" id="bohong9" name="bohong9" value="9">
                  <label for="bohong9">Keterangan teman BEM</label><br>
                  <input type="checkbox" id="bohong10" name="bohong10" value="10">
                  <label for="bohong10">Keterangan teman kosan Wina</label><br>
                  <input type="checkbox" id="bohong11" name="bohong11" value="11">
                  <label for="bohong11">Keterangan orang tua Wina</label><br>
                  <input type="checkbox" id="bohong12" name="bohong12" value="12">
                  <label for="bohong12">Interview – Somad</label><br>
                  <input type="checkbox" id="bohong13" name="bohong13" value="13">
                  <label for="bohong13">Interview – Ardiyanto Maulana</label><br>
                  <input type="checkbox" id="bohong14" name="bohong14" value="14">
                  <label for="bohong14">Interview – Indra Yowantoro</label><br>
                  <input type="checkbox" id="bohong15" name="bohong15" value="15">
                  <label for="bohong15">Interview – Yoga Kurniawan</label><br>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kisahkasus/resources/views/client/D040593a.blade.php ENDPATH**/ ?>