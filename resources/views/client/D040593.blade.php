@extends('layouts.main')
@section('content')
<div style="margin-top:-150px;">
   <div class="about">
       <div class="container pl-5">
            <div class="title title-sm">Siapa yang memberikan kesaksian palsu?</div>
            <div class="col-md-12">
                <form action="/cek1">
                  <br>
                  <input type="radio" id="wawan" name="berbohong" value="wawan">
                  <label for="wawan">Wawan Hidayat</label><br>
                  <input type="radio" id="ardiyanto" name="berbohong" value="ardiyanto">
                  <label for="ardiyanto">Ardiyanto Maulana</label><br>
                  <input type="radio" id="yoga" name="berbohong" value="yoga">
                  <label for="yoga">Yoga Kurniawan</label><br>
                  <input type="radio" id="indra" name="berbohong" value="indra">
                  <label for="indra">Indra Widjaja</label><br>
                  <input type="radio" id="wina" name="berbohong" value="wina">
                  <label for="wina">Wina Indriyaningsih</label><br>
                  <input type="radio" id="tidak" name="berbohong" value="tidak">
                  <label for="tidak">Tidak ada</label><br>
                  <input type="submit" value="Submit">
                </form>
            </div>
       </div>
       
   </div>

</div>
@endsection

@section('footer')
    <div id="footer">
        <div class="container p-0">
            &copy; 2022 - Net Detective Indonesia
        </div>
    </div>
@endsection
