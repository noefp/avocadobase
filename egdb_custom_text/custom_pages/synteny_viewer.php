<div class="container my-5" style="max-width: 900px; margin: 0 auto;">



  <div class="text-center mb-5">
    <h1 class="display-5 font-weight-bold" style="color: #2c5e3b; font-size: 32px;">Synteny Viewer</h1>
    <div style="width: 60px; height: 4px; background-color: #2c5e3b; margin: 15px auto 25px auto; border-radius: 2px;"></div>
    
    <p class="p_font18 text-muted mx-auto" style="max-width: 700px; line-height: 1.6;">
      Explore structural genomic conservation, chromosome rearrangements, and syntenic blocks across avocado assemblies using interactive comparative views powered by JBrowse 2.
    </p>
  </div>

  <div class="row justify-content-center">
    
    <div class="col-12 col-sm-6 mb-4 d-flex align-items-stretch">
      <div class="card shadow-sm border-0 w-100 custom-viewer-card text-center">
        <div class="card-body d-flex flex-column align-items-center p-4">
          
          <div class="image-wrapper mb-4 rounded-circle shadow-sm" style="width: 200px; height: 200px; overflow: hidden; border: 4px solid #f8fafc;">
            <img src="<?php echo $images_path.'/synteny.png'?>" alt="Linear Synteny View" class="w-100 h-100" style="object-fit: cover;">
          </div>
          
          <h3 class="h5 font-weight-bold mb-2" style="color: #1a1a1a;">Linear Synteny View</h3>
          <p class="card-text text-muted small px-2 mb-4">
            Compare genomic alignments and colinear blocks side-by-side using an interactive multi-horizontal genome browser.
          </p>
          
          <div class="mt-auto w-100">
            <a href="/jbrowse2/?config=data/config_linear.json" class="btn btn-sm btn-block text-white stretched-link font-weight-bold" style="background-color: #2c5e3b; border-radius: 20px;">
              Launch Linear Viewer
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 mb-4 d-flex align-items-stretch">
      <div class="card shadow-sm border-0 w-100 custom-viewer-card text-center">
        <div class="card-body d-flex flex-column align-items-center p-4">
          
          <div class="image-wrapper mb-4 rounded-circle shadow-sm" style="width: 200px; height: 200px; overflow: hidden; border: 4px solid #f8fafc;">
            <img src="<?php echo $images_path.'/dotplot.png'?>" alt="Dotplot View" class="w-100 h-100" style="object-fit: cover;">
          </div>
          
          <h3 class="h5 font-weight-bold mb-2" style="color: #1a1a1a;">Dotplot View</h3>
          <p class="card-text text-muted small px-2 mb-4">
            Visualize macro-synteny, whole-genome duplications, inversions, and translocations on a 2D coordinate matrix.
          </p>
          
          <div class="mt-auto w-100">
            <a href="/jbrowse2/?config=data/config_dotplot.json" class="btn btn-sm btn-block text-white stretched-link font-weight-bold" style="background-color: #2c5e3b; border-radius: 20px;">
              Launch Dotplot Viewer
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<?php //include_once realpath("$easy_gdb_path/footer.php");?>

<style>
  .shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
  }
  .custom-viewer-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border-radius: 12px;
    background-color: #ffffff;
  }
  /* Animación al pasar el cursor sobre la tarjeta completa */
  .custom-viewer-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.08)!important;
  }
  .custom-viewer-card:hover .image-wrapper {
    border-color: #2c5e3b !important;
    transition: border-color 0.2s ease;
  }
</style>