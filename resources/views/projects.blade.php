<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <h3 class="text-center projectheader"> Projects </h3>

  <div id="carouselExampleIndicators" class="carousel slide w-75 h-75 mx-auto aling-top p-5" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/ResumeSiteSS.png" class="d-block w-100" alt="..." href="https://github.com/GTOVD/ResumeSite">
      </div>
      <div class="carousel-item">
        <img src="img/ResumeSiteSS.png" class="d-block w-100" alt="..." href="https://github.com/GTOVD/PHPTestSite">
      </div>
      <div class="carousel-item">
        <img src="img/ResumeSiteSS.png" class="d-block w-100" alt="..." href="https://github.com/GTOVD/TextBasedGame">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</x-app-layout>



<x-footer></x-footer>
