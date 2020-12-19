<div class="content-wrapper">

   <section class="content-header">
      <h3>
        <?php echo $judul ?>
        <small></small>
      </h3>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Setting</li>
      </ol>
    </section>

  <section class="content container-fluid">
    <div class="box">
      <!-- /.box-header -->

        <?php 
          $data=$this->session->flashdata('sukses');
          if($data!=""){ ?>
            <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
        <?php } ?>

        <?php 
          $data2=$this->session->flashdata('error');
          if($data2!=""){ ?>
            <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
        <?php } ?>

        <div class="box-body">        
     
     <?= form_open_multipart('backend/setting/edit'); ?>
     
         <div class="form-group row">
           <label class="col-md-2">Nama Sekolah</label>
           <div class="col-md-10">
               <input type="text" readonly name="nama" value="<?= $set['nama']; ?>" required class="form-control">
           </div>
         </div>

         <div class="form-group row">
              <label class="col-md-2">Deskripsi Web</label>
              <div class="col-md-10">
                <textarea readonly name="deskripsi" id="" class="form-control"><?= $set['deskripsi']; ?>
                </textarea>
              </div>
            </div>

         <div class="form-group row">
           <label class="col-md-2">Motto Sekolah</label>
           <div class="col-md-10">
               <input type="text" readonly  name="moto" value="<?= $set['moto']; ?>" required class="form-control">
           </div>
         </div>

         <div class="form-group row">
           <label class="col-md-2">Alamat</label>
           <div class="col-md-10">
               <input type="text" readonly  name="alamat" value="<?= $set['alamat']; ?>" required class="form-control">
           </div>
         </div>

         <div class="form-group row">
           <label class="col-md-2">Nama Kepala</label>
           <div class="col-md-10">
               <input type="text" readonly  name="kepsek" value="<?= $set['kepsek']; ?>" required class="form-control">
           </div>
         </div>

         <div class="form-group row">
           <label class="col-md-2">Foto Kepala</label>
             <div class="col-md-10">
             <div class="row">
             <div class="col-md-3">
                 <img src="<?= base_url('assets/') .$set['foto'] ?>" alt="" class="img-responsive img-thumbnail" >
              
             </div>
             <div class="col-md-9">
             </div>
           </div>                
             </div>
         </div>

         <div class="form-group row">
           <label class="col-md-2">Sambutan Kepala</label>
           <div class="col-md-10">
           <textarea id="editor1" readonly name="sambutan" ><?= $set['sambutan']; ?></textarea></div>
         </div>

         <div class="form-group row">
           <label class="col-md-2">Logo Sekolah</label>
             <div class="col-md-10">
             <div class="row">
             <div class="col-md-3">
                 <img src="<?= base_url('assets/') . $set['logo'] ?>" class="img-responsive img-thumbnail" >
                
             </div>
             <div class="col-md-8">
                 <img src="<?= base_url('assets/') .  $set['header']; ?>" class="img-responsive img-thumbnail" >
                
             </div>
             <div class="col-md-9">
             </div>
           </div>                
             </div>
         </div>

           

           <div class="form-group row">
           <label class="col-md-2">E-mail</label>
           <div class="col-md-10">
               <input type="text" readonly  name="email" value="<?= $set['email']; ?>" required class="form-control">
           </div>
         </div>

       <div class="form-group row">
           <label class="col-md-2">Facebook</label>
           <div class="col-md-10">
               <input type="text" readonly  name="fb" value="<?= $set['fb']; ?>" required class="form-control">
           </div>
       </div>
       <div class="form-group row">
           <label class="col-md-2">Telp</label>
           <div class="col-md-10">
               <input type="text" readonly  name="telp" value="<?= $set['telp']; ?>" required class="form-control">
           </div>
       </div>
       <div class="form-group row">
           <label class="col-md-2">Instagram</label>
           <div class="col-md-10">
               <input type="text" readonly  name="ig" value="<?= $set['ig']; ?>" required class="form-control">
           </div>
       </div>
       <div class="form-group row">
           <label class="col-md-2">Twitter</label>
           <div class="col-md-10">
               <input type="text" readonly  name="twit" value="<?= $set['twit']; ?>" required class="form-control">
           </div>
       </div>


       <a href="<?=base_url('backend/setting/edit')?>" class="btn btn-primary">Edit</a>
     </form>
   
   <!-- /.box-body -->

 <!-- MODAL EDIT -->
 <style>
     #image-holder {
         margin-top: 8px;
     }
     
     #image-holder img {
         border: 8px solid #DDD;
         max-width:100%;
     }
 </style>

 </div>
</section>
</div>