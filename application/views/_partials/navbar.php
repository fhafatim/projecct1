<nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="./"> <i class="ion-cube"></i> ICSB</a>
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?= base_url('welcomee') ?>">Beranda</a></li>
              <li><a href="<?= base_url('tentangg') ?>">Tentang</a></li>
              <li><a href="<?= base_url('keanggotaann') ?>">Keanggotaan</a></li>
              <li><a href="<?= base_url('pencapaiann') ?>">Pencapaian</a></li>
              
              <li><a href="<?= base_url('pengajuan') ?>">Pengajuan</a></li>
                </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= base_url('Auth/logout') ?>"><i class="ion-android-person"></i>Log Out</a></li>
          </ul>
            <ul class="nav navbar-nav navbar-right">
            <li>
              <?php $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
              $this->load->view('templates/topbarlogin', $data);?> 
            </li>
          
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        
    </nav>

    