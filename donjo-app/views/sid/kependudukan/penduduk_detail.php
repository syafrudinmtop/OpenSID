<div id="pageC">
  <table class="inner">
    <tr style="vertical-align:top">
      <td style="background:#fff;padding:0px;">
        <div class="content-header">
          <h3>Form Data Penduduk</h3>
        </div>
        <div id="contentpane">
          <div class="ui-layout-center" id="maincontent" style="padding: 0px;">

            <div align="center">
              <h3> BIODATA PENDUDUK</h3>
              <h4>No. <?php echo $penduduk['nik']?> </h4>
            </div>

            <table class="form" >
              <tr>
                <td>
                  <div class="userbox-avatar">
                    <?php if($penduduk['foto']){?>
                      <img src="<?php echo AmbilFoto($penduduk['foto'])?>" alt=""/>
                    <?php }else{?>
                      <img src="<?php echo base_url()?>assets/files/user_pict/kuser.png" alt=""/>
                    <?php }?>
                  </div>
                </td>
              </tr>
              <tr>
                <td width="150">Nama</td><td width="1">:</td>
                <td><?php echo strtoupper(unpenetration($penduduk['nama']))?></td>
              </tr>
              <tr>
                <td>Nomor Kartu Keluarga</td><td >:</td>
                <td><?php echo $penduduk['no_kk']?></td>
              </tr>
              <tr>
                <td>Nomor KK Sebelumnya</td><td >:</td>
                <td><?php echo $penduduk['no_kk_sebelumnya']?></td>
              </tr>
              <tr>
                <td>Akta lahir</td><td >:</td>
                <td><?php echo strtoupper($penduduk['akta_lahir'])?></td>
              </tr>
              <tr>
                <td>Alamat</td><td >:</td>
                <td><?php echo strtoupper($penduduk['alamat'])?></td>
              </tr>
              <tr>
                <td>Dusun</td><td >:</td>
                <td><?php echo strtoupper(ununderscore(unpenetration($penduduk['dusun'])))?></td>
              </tr>
              <tr>
                <td>RT/ RW</td><td >:</td>
                <td><?php echo strtoupper($penduduk['rt'])?> / <?php echo $penduduk['rw']?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td><td >:</td>
                <td><?php echo strtoupper($penduduk['sex'])?></td>
              </tr>
              <tr>
                <td>Nomor Telepon</td><td >:</td>
                <td><?php echo strtoupper($penduduk['telepon'])?></td>
              </tr>
              <tr>
                <td>Tempat / Tanggal Lahir</td><td >:</td>
                <td><?php echo strtoupper($penduduk['tempatlahir'])?> / <?php echo strtoupper($penduduk['tanggallahir'])?></td>
              </tr>
              <tr>
                <td>Agama</td><td >:</td>
                <td><?php echo strtoupper($penduduk['agama'])?></td>
              </tr>
              <tr>
                <td>Pendidikan dalam KK</td><td >:</td>
                <td><?php echo strtoupper($penduduk['pendidikan_kk'])?></td>
              </tr>
              <tr>
                <td>Pendidikan sedang ditempuh</td><td >:</td>
                <td><?php echo strtoupper($penduduk['pendidikan_sedang'])?></td>
              </tr>
              <tr>
                <td>Pekerjaan</td><td >:</td>
                <td><?php echo strtoupper($penduduk['pekerjaan'])?></td>
              </tr>
              <tr>
                <td>Status Kawin</td><td >:</td>
                <td><?php echo strtoupper($penduduk['kawin'])?></td>
              </tr>
              <tr>
                <td>Warga Negara</td><td >:</td>
                <td><?php echo strtoupper($penduduk['warganegara'])?></td>
              </tr>
              <tr>
                <td>Dokumen Paspor</td><td >:</td>
                <td><?php echo strtoupper($penduduk['dokumen_pasport'])?></td>
              </tr>
              <tr>
                <td>Tanggal Berakhir Paspor</td><td >:</td>
                <td><?php echo strtoupper($penduduk['tanggal_akhir_paspor'])?></td>
              </tr>
              <tr>
                <td>Dokumen KITAS</td><td >:</td>
                <td><?php echo strtoupper($penduduk['dokumen_kitas'])?></td>
              </tr>
              <tr>
                <td>Alamat Sebelumnya</td><td >:</td>
                <td><?php echo strtoupper($penduduk['alamat_sebelumnya'])?></td>
              </tr>
              <tr>
                <td>Alamat Sekarang</td><td >:</td>
                <td><?php echo strtoupper($penduduk['alamat_sekarang'])?></td>
              </tr>
              <tr>
                <td>Akta perkawinan</td><td >:</td>
                <td><?php echo strtoupper($penduduk['akta_perkawinan'])?></td>
              </tr>
              <tr>
                <td>Tanggal perkawinan</td><td >:</td>
                <td><?php echo strtoupper($penduduk['tanggalperkawinan'])?></td>
              </tr>
              <tr>
                <td>Akta perceraian</td><td >:</td>
                <td><?php echo strtoupper($penduduk['akta_perceraian'])?></td>
              </tr>
              <tr>
                <td>Tanggal perceraian</td><td >:</td>
                <td><?php echo strtoupper($penduduk['tanggalperceraian'])?></td>
              </tr>
              <tr>
                <td>Data Orang Tua</td>
              </tr>
              <tr>
                <td>NIK Ayah</td><td >:</td>
                <td><?php echo strtoupper($penduduk['ayah_nik'])?></td>
              </tr>
              <tr>
                <td>Nama Ayah</td><td >:</td>
                <td><?php echo strtoupper(unpenetration($penduduk['nama_ayah']))?></td>
              </tr>
              <tr>
                <td>NIK Ibu</td><td >:</td>
                <td><?php echo strtoupper($penduduk['ibu_nik'])?></td>
              </tr>
              <tr>
                <td>Nama Ibu</td><td >:</td>
                <td><?php echo strtoupper(unpenetration($penduduk['nama_ibu']))?></td>
              </tr>
              <tr>
                <td>Cacat</td><td >:</td>
                <td><?php echo strtoupper($penduduk['cacat'])?></td>
              </tr>
              <tr>
                <td>Akseptor KB</td><td >:</td>
                <td><?php echo strtoupper($penduduk['cara_kb'])?></td>
              </tr>
              <tr>
                <td>Status</td><td >:</td>
                <td><?php echo strtoupper($penduduk['status'])?></td>
              </tr>
              <tr>
                <td>Status Dasar</td><td >:</td>
                <td><?php echo strtoupper($penduduk['status_dasar'])?></td>
              </tr>
            </table>

            <table class="list">
              <thead>
                <tr>
                  <td colspan="5" style="padding-bottom: 15px;"><br><strong>DOKUMEN / KELENGKAPAN PENDUDUK<strong></th>
                </tr>
                <tr>
                  <th width="2">No</th>
                  <th width="220">Nama Dokumen</th>
                  <th width="360">File</th>
                  <th width="200">Tanggal Upload</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($list_dokumen as $data){?>
                  <tr>
                    <td align="center" width="2"><?php echo $data['no']?></td>
                    <td><?php echo $data['nama']?></td>
                    <td><a href="<?php echo base_url().LOKASI_DOKUMEN?><?php echo urlencode($data['satuan'])?>" ><?php echo $data['satuan']?></a></td>
                    <td><?php echo tgl_indo2($data['tgl_upload'])?></td>
                    <td></td>
                  </tr>
                <?php }?>
                <tr><td>&nbsp;</td></tr>
              </tbody>
            </table>

          </div>

          <div class="ui-layout-south panel bottom">
            <div class="left">
              <a href="<?php echo site_url()?>penduduk" class="uibutton icon prev">Kembali</a>
            </div>
            <div class="right">
              <div class="uibutton-group">
                <a href="<?php echo site_url("penduduk/dokumen/$penduduk[id]")?>" class="uibutton special"><span class="fa fa-bars"></span> Manajemen Dokumen</a>
                <a href="<?php echo site_url("penduduk/form/$p/$o/$penduduk[id]")?>" class="uibutton confirm"><span class="fa fa-edit"></span> Edit Data</a>
                <a href="<?php echo site_url("penduduk/cetak_biodata/$penduduk[id]")?>" target="_blank" class="uibutton special"><span class="fa fa-print"></span> Cetak Biodata</a>
              </div>
            </div>
          </div>

        </div>
      </td>
    </tr>
  </table>
</div>
