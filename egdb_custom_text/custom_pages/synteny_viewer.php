<!-- HEADER -->
<!-- <?php //include_once realpath("../header.php");?> -->


<!-- HELP -->
<div class="margin-20">
  <a class="float-right" href="https://jbrowse.org/jb2/docs/user_guide/"><i class='fa fa-info' style='font-size:20px;color:#229dff'></i> Help</a>
</div>
<br>

<!-- SYNTENY VIEWER -->
<h3 class="text-center">Synteny Viewer</h3>

<div style="margin:auto; max-width:600px">
  <br>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <a href="/jbrowse2/?config=data/config_linear.json" class="d-flex align-items-center justify-content-center flex-column zoom-img jbrowse_link">
          <img src="<?php echo $images_path.'/synteny.png'?>" alt="Genotypes" width="220px" height="220px" class="solid alignnone size-medium wp-image-3011 rounded-circle">
          </a>
          <div class="text-center">
            <strong>Linear Synteny View</strong>
            <br>
            Synteny using a Linear Genome View
          </div>
        </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <a href="/jbrowse2/?config=data/config_dotplot.json" class="d-flex align-items-center justify-content-center flex-column zoom-img jbrowse_link">
        <img src="<?php echo $images_path.'/dotplot.png'?>" alt="Genotypes" width="220px" height="220px" class="solid alignnone size-medium wp-image-3011 rounded-circle">
        </a>
        <div class="text-center">
          <strong>Dotplot View</strong>
          <br>
          Synteny using a Dotplot View
        </div>
      </div>
      </div>
    </div>
  </div>
</div>




<!-- FOOTER -->
<?php //include_once realpath("$easy_gdb_path/footer.php");?>