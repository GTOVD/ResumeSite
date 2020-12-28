<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="titleSection">
      <div class="titleVideo">
          <video id="bgvid" autoplay loop muted playsinline>
            <source src="/img/videoplayback.webm" type="video/webm">
          </video>
      </div>

      <div class="titleContent">
        <h1>Thomas Vickers</h1>
      </div>
      <div class="quoteContent">
        <p> -Code doesn't become software until it has users, thank you {{ Auth::user()->name }}.</p>
      </div>
      <!--
      <a class="btn btn-outline-light btn-lg" href="about.php">Résumé</a>
      -->

    </section>

</x-app-layout>

<x-footer></x-footer>
