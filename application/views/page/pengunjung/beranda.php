  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h3>Selamat Datang di</h3>
      <h1>Sistem Diagnosa Kerusakan Hardware Komputer</h1>
      <h2>Sistem ini dibuat untuk mendiagnosa kerusakan yang sering terjadi pada hardware komputer</h2>
      <a href="#about" class="btn-get-started scrollto" data-toggle="modal" data-target="#modalPertanyaan">Mulai Diagnosa</a>
    </div>
  </section><!-- End Hero -->

<div class="modal" tabindex="-1" id="modalPertanyaan" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title">Jawablah Pertanyaan dibawah ini!</h5>
          <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php if(!empty($gejala->gejala)){ ?>

        <div class="modal-body">
          <p><?php echo $gejala->gejala; ?></p>
        </div>
        <div class="modal-footer">
          <a href="<?= base_url()?>beranda/diagnosa?action=diagnosa&&jawaban=ya&&kode_gejala=<?= $gejala->kode_gejala?>">
            <button type="button" class="btn btn-primary"> Ya</button>
          </a>
          <a href="<?= base_url()?>beranda/diagnosa?action=diagnosa&&jawaban=tidak&&kode_gejala=<?= $gejala->kode_gejala?>">
          <button type="button" class="btn btn-danger">Tidak</button>
        </a>
          
        </div>
      <?php  }else{ ?>
        <div class="modal-body">
          <p>Pertanyaan belum ada! </p>
        </div>

        <?php } ?>

    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modalPertanyaanNext" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Jawablah Pertanyaan dibawah ini !</h5>
        <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?php echo $gejala->gejala; ?></p>
      </div>
      <div class="modal-footer">
        <a href="<?= base_url()?>beranda/diagnosa?action=diagnosa&&jawaban=ya&&kode_gejala=<?= $gejala->kode_gejala?>">
            <button type="button" class="btn btn-primary"> Ya</button>
          </a>
          <a href="<?= base_url()?>beranda/diagnosa?action=diagnosa&&jawaban=tidak&&kode_gejala=<?= $gejala->kode_gejala?>">
          <button type="button" class="btn btn-danger">Tidak</button>
        </a>
        
      </div>
    </div>
  </div>
</div>