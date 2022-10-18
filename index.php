<?php


$site = new Site();

print $site->bts("Home", '
<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4">'.getenv('logo').'</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">'.getenv('description').'</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a href="'.getenv('git-href').'"><i class="bi bi-github fs-1"></i></a>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: '.getenv('max-height').'vh;">
      <div class="container px-5">
        <img src="'.getenv('img').'" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Logo img" width="'.getenv('width').'" height="'.getenv('height').'" loading="lazy">
      </div>
    </div>
  </div>
  
  <footer class="">
    <p class="text-center text-muted">© '.date('Y').'  '.getenv('logo').'  Company, Inc</p>
  </footer>
  
' . $site->genModal("About", "Onset it`s small team. We coding samples for itselfs.", "modal-about") );

class Site {

  function bts($title = "", $content = "", $lang = "en"){
    return '<!doctype html>
<html lang="'.$lang.'">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>'.$title.'</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
 </head>
  <body>
    '.$content.'
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>';
  }
    
  function genModal($title = "Modal", $content = "", $id = "modal1"){
      return '
<div class="modal fade" id="'.$id.'" tabindex="-1" aria-labelledby="'.$title.'" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">'.$title.'</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        '.$content.'
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      ';
  }  
  
}



?>
