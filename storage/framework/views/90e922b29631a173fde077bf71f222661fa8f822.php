
<?php $__env->startSection('content'); ?>
<div style="margin-top:-150px;">
   <div class="about">
       <div class="container pl-5">
            <div class="title title-sm">Pilih 2 data yang membuktikan bahwa Ardiyanto tidak bersalah:</div>
            <div class="col-md-12">
                <form action="/cek2a">
                  <br>
                  <input type="checkbox" id="bohong1" name="bohong1" value="1">
                  <label for="bohong1">Form Otopsi</label><br>
                  <input type="checkbox" id="bohong2" name="bohong2" value="2">
                  <label for="bohong2">Foto Barang di kamar Wina</label><br>
                  <input type="checkbox" id="bohong3" name="bohong3" value="3">
                  <label for="bohong3">Foto Barang Bukti</label><br>
                  <input type="checkbox" id="bohong4" name="bohong4" value="4">
                  <label for="bohong4">Artikel Koran – Tragedi Pembunuhan Mahasiswi</label><br>
                  <input type="checkbox" id="bohong5" name="bohong5" value="5">
                  <label for="bohong5">Artikel Koran – Pelaku Pembunuhan Mahasiswi UTB Terungkap</label><br>
                  <input type="checkbox" id="bohong6" name="bohong6" value="6">
                  <label for="bohong6">Keterangan Saksi – Desi Purnamasari</label><br>
                  <input type="checkbox" id="bohong7" name="bohong7" value="7">
                  <label for="bohong7">Keterangan Saksi – Putri Pratiwi</label><br>
                  <input type="checkbox" id="bohong8" name="bohong8" value="8">
                  <label for="bohong8">Keterangan Saksi – Septi Wulandari</label><br>
                  <input type="checkbox" id="bohong9" name="bohong9" value="9">
                  <label for="bohong9">Interview – Indra Yowantoro</label><br>
                  <input type="checkbox" id="bohong10" name="bohong10" value="10">
                  <label for="bohong10">Interview – Ardiyanto maulana</label><br>
                  <input type="checkbox" id="bohong11" name="bohong11" value="11">
                  <label for="bohong11">Interview – Yoga Kurniawan</label><br>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kisahkasus/resources/views/client/D0405932.blade.php ENDPATH**/ ?>