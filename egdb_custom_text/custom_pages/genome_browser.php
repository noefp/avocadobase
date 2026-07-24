<div class="d-flex justify-content-end mb-4" style="margin-top: 15px;">
  <a class="btn btn-sm btn-outline-secondary px-3" href="https://jbrowse.org/jb2/docs/user_guide/" target="_blank" rel="noopener" style="border-radius: 20px;">
    <i class="fa fa-info-circle mr-1" style="color: #2c5e3b;"></i> JBrowse Help
  </a>
</div>

<div class="container my-5" style="max-width: 1000px; margin: 0 auto;">
  
  <div class="text-center mb-5">
    <h1 class="display-5 font-weight-bold" style="color: #2c5e3b; font-size: 32px;">Genome Browser</h1>
    <div style="width: 60px; height: 4px; background-color: #2c5e3b; margin: 15px auto 25px auto; border-radius: 2px;"></div>
    
    <p class="p_font18 text-muted mx-auto" style="max-width: 800px; line-height: 1.6;">
      Explore the genomic data, gene models, and structural annotations of different varieties through our interactive browser interfaces. 
      Check out the <a href="/easy_gdb/custom_view.php?file_name=genome.php" target="_blank" rel="noopener" class="font-weight-bold" style="color: #2c5e3b;">genomes page</a> for additional quality metrics.
    </p>
  </div>

  <div class="mb-4">
    <h2 class="h5 font-weight-bold text-muted text-uppercase mb-4 text-center text-sm-left" style="letter-spacing: 1px;">
      <i class="fas fa-dna mr-2" style="color: #2c5e3b;"></i> <em>Persea americana</em> Assemblies
    </h2>
    
    <div class="row justify-content-center">
      
      <div class="col-12 col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card shadow-sm border-0 w-100 custom-browser-card" style="border-top: 4px solid #2c5e3b !important;">
          <div class="card-body d-flex flex-column text-center p-4">
            <div class="mb-3">
              <span class="badge text-white px-3 py-1" style="background-color: #2c5e3b; font-size: 0.75rem; border-radius: 20px;">Reference</span>
            </div>
            <h3 class="h5 font-weight-bold mb-2 text-dark">cv. Hass</h3>
            <p class="card-text text-muted small px-1 mb-4 flex-grow-1">
              Haplotype-resolved chromosomal level genome view. Includes Colombian National Genebank GBS data.
            </p>
            <div class="mt-auto">
              <a href="https://ihsm-bionas.uma.es/jbrowse/?data=data%2Fhass_uq&loc=1%3A1..97805473&tracks=DNA%2Chass_uq_gene_models" target="_blank" rel="noopener" class="btn btn-sm btn-outline-secondary btn-block stretched-link jbrowse_link" style="border-radius: 20px;">
                Open JBrowse <i class="fas fa-chevron-right ml-1" style="font-size: 0.7rem;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card shadow-sm border-0 w-100 custom-browser-card" style="border-top: 4px solid #4a7c59 !important;">
          <div class="card-body d-flex flex-column text-center p-4">
            <div class="mb-3">
              <span class="badge text-white px-3 py-1" style="background-color: #4a7c59; font-size: 0.75rem; border-radius: 20px;">Guatemalan-like</span>
            </div>
            <h3 class="h5 font-weight-bold mb-2 text-dark">cv. Gwen</h3>
            <p class="card-text text-muted small px-1 mb-4 flex-grow-1">
              Chromosomal level genome view.
            </p>
            <div class="mt-auto">
              <a href="https://ihsm-bionas.uma.es/jbrowse/?data=data%2Fgwen_ucr&loc=Chr1%3A29249845..43875871&tracks=DNA%2Cgwen_gene_models" target="_blank" rel="noopener" class="btn btn-sm btn-outline-secondary btn-block stretched-link jbrowse_link" style="border-radius: 20px;">
                Open JBrowse <i class="fas fa-chevron-right ml-1" style="font-size: 0.7rem;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 mb-4 d-flex align-items-stretch">
        <div class="card shadow-sm border-0 w-100 custom-browser-card" style="border-top: 4px solid #689f38 !important;">
          <div class="card-body d-flex flex-column text-center p-4">
            <div class="mb-3">
              <span class="badge text-white px-3 py-1" style="background-color: #689f38; font-size: 0.75rem; border-radius: 20px;">T2T</span>
            </div>
            <h3 class="h5 font-weight-bold mb-2 text-dark">West Indian</h3>
            <p class="card-text text-muted small px-1 mb-4 flex-grow-1">
              Telomere-to-telomere gap-free genome view.
            </p>
            <div class="mt-auto">
              <a href="https://ihsm-bionas.uma.es/jbrowse/?data=data%252FWI_T2T&loc=Pa01%253A1..96338841&tracks=DNA%252CWI_Genes" target="_blank" rel="noopener" class="btn btn-sm btn-outline-secondary btn-block stretched-link jbrowse_link" style="border-radius: 20px;">
                Open JBrowse <i class="fas fa-chevron-right ml-1" style="font-size: 0.7rem;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="jbrowse_unavailable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 12px; border: 0;">
      <div class="modal-header text-white" style="background-color: #2c5e3b; border-top-left-radius: 12px; border-top-right-radius: 12px;">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Currently Unavailable</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4 text-muted">
        The requested <strong>Genome Browser</strong> track layer will be deployed shorty.
      </div>
      <div class="modal-footer" style="background-color: #f8fafc; border-bottom-left-radius: 12px; border-bottom-right-radius: 12px;">
        <button type="button" class="btn btn-sm btn-secondary px-4" data-dismiss="modal" style="border-radius: 20px;">Close</button>
      </div>
    </div>
  </div>
</div>

<style>
  .shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
  }
  .custom-browser-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border-radius: 8px;
    background-color: #ffffff;
  }
  .custom-browser-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.08)!important;
    background-color: rgba(44, 94, 59, 0.01);
  }
</style>