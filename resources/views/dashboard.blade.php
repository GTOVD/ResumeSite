<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="video-background" id="about">
      <div class="video-wrap">
        <div id="video">
          <video id="bgvid" autoplay loop muted playsinline>
            <source src="/img/videoplayback.webm" type="video/webm">
          </video>
        </div>
      </div>
    </div>

    <div class="caption text-center">
      <h1>Thomas Vickers</h1>
      <!--
      <a class="btn btn-outline-light btn-lg" href="about.php">Résumé</a>
      -->
    </div>


</x-app-layout>
