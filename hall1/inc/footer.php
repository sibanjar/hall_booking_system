<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-4 mb-2">KHWOPA ENGINEERING COLLEGE</h3>
      <p>
        On behalf of the college family, 
      it is my pleasure to welcome you at Khwopa Engineering College (KhEC). 
    I hope you will spend your valuable time to 
  know about our mission and goals.</p>
    </div>
        <div class="col-lg-4 p-4">
          <h5 class="mb-3">Links</h5>
          <a href="#"  class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
          <a href="#"  class="d-inline-block mb-2 text-dark text-decoration-none">Halls</a><br>
          <a href="#"  class="d-inline-block mb-2 text-dark text-decoration-none">Lists</a><br>
          <a href="#"  class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
          <a href="#"  class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
      
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
        <i class="bi bi-twitter me-1"></i>Twitter</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
        <i class="bi bi-facebook me-1"></i>Facebook</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">
        <i class="bi bi-instagram me-1"></i>Instagram</a>
    </div>

  </div>  
</div>


<h6 class="text-center bg-dark text-white p-3 m-0 mt-10">Designed and developed by XXXXXXX</h6>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
  function setActive(){
    let navbar=document.getElementById('nav-bar');
      let a_tags=navbar.getElementsByTagName('a');

      for(i=0;i<a_tags.length;i++){
        let file=a_tags[i].href.split('/').pop();
        let file_name=file.split('.')[0];

        if(document.location.href.indexOf(file_name)>=0){
          a_tags[i].classList.add('active');
        }
      }
  }
  setActive();
</script>