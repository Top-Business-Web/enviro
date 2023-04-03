@extends('site.layouts.master')

@section('content')

       <!-- Breadcroumb Area -->

   <div class="breadcroumb-area bread-bg">
       <div class="overlay-2"></div>
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="breadcroumb-title text-center">
                       <h1>JOIN US</h1>
                       <h6><a href="index.blade.php">Home</a> / JOIN US</h6>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <div class="section-career gray-bg section-padding">
    <div class="container">
        <div class="section-title text-center">
            <img src="assets/img/career.png" style="width: 50px;">
            <h6>Join us</h6>
            <h2 style="margin: 0; font-size: 40px;">we wish you the best of luck!</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis inventore amet porro deserunt, quis nam esse eligendi soluta sed eos culpa voluptatem blanditiis impedit ex, tempore vitae quidem quam? Minima?
            </p>
        </div>

        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="information-cv d-flex justify-content-center align-items-center flex-column">
                <div class="wrapper">
                    <form class="drag-file">
                        <input type="file" class="file-input" hidden>
                        <i class="fa-solid fa-cloud-upload-alt"></i>
                        <p class="mt-2">drag and drop file</p>
                    </form>
                    <section class="uploaded-area"></section>
                </div>
                <form class="row form-contact mt-5">
                    <div class="col-md-6 col-sm-12 mb-4">
                      <input type="text" class="w-100 p-3" placeholder="name" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                      <input type="email" class="w-100 p-3" placeholder="email" required>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <input type="text" class="w-100 p-3" placeholder="Phone" required>
                      </div>
                      <div class="col-md-6 col-sm-12 mb-4">
                        <input type="email" class="w-100 p-3" placeholder=" sallary" required>
                      </div>
                    <div class="col-12 mt-2 d-flex justify-content-center">
                        <button type="submit" class="main-btn primary mt-2" style="border-radius: 10px;">send</button>
                    </div>
                  </form>
            </div>
        </div>

    </div>
   </div>


@endsection
