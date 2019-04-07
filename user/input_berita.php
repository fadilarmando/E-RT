<div class="content-wrapper">
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-6 shadow mt-3">
        <h1 class="text-center p-3 bg-primary text-white">Input Berita</h1>
        <hr>
        <form class="" method="post">

        <div class="form-group row">
          <label for="userinput_berita1" class="col-sm-2 col-form-label">Nomor Berita</label>
          <div class="col-sm-10">
            <input type="text" name="" id="userinput_berita1" class="form-control" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label for="userinput_berita2" class="col-sm-2 col-form-label">Penulis Berita</label>
          <div class="col-sm-10">
            <input type="text" name="" id="userinput_berita5" class="form-control" readonly>
          </div>
        </div>

        <div class="form-group row">
          <label for="userinput_berita3" class="col-sm-2 col-form-label">Judul Berita</label>
          <div class="col-sm-10">
            <input type="text" name="" id="userinput_berita3" class="form-control" placeholder="ketik disini ..">
          </div>
        </div>

        <div class="form-group row">
          <label for="userinput_berita4" class="col-sm-2 col-form-label">Sumber Berita</label>
          <div class="col-sm-10">
            <input type="text" name="" id="userinput_berita4" class="form-control" placeholder="ketik disini ..">
          </div>
        </div>

        <div class="form-group row">
          <label for="userinput_berita5" class="col-sm-2 col-form-label">Tanggal Berita</label>
          <div class="col-sm-10">
            <span class="form-control">
            <?php echo date('d-M-Y');?>
            <?php date_default_timezone_set("asia/jakarta");?>
            </span>
          </div>
        </div>

        <div class="form-group row">
          <label for="userinput_berita6" class="col-sm-2 col-form-label">Alamat Kejadian</label>
          <div class="col-sm-10">
            <input type="text" name="" id="userinput_berita6" class="form-control" placeholder="ketik disini ..">
          </div>
        </div>

        <div class="form-group row">
          <label for="userinput_berita7" class="col-sm-2 col-form-label">Gambar Berita</label>
          <div class="col-sm-10">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
        </div>

        <div class="form-group row">

          <div class="col-sm-2">
            <label for="userinput_berita8" class="col-form-label">Isi Berita</label>
          </div>
          <div class="col-sm-10">
            <textarea class="textarea" placeholder="Place some text here" name="isi_berita"
                      style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-12">
            <center>
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
          </center>
          </div>
        </div>

      </form>
      </div>
      <div class="col-md-3">

      </div>

    </div>
  </section>
</div>
