<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div id="contact" class="row justify-content-center">

    <div class="col-md-5 ">

      <div class="mb-2">
        <label for="exampleFormControlInput1" class="form-label">Name: </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
      </div>

      <div class="mb-2">
        <label for="exampleFormControlTextarea2" class="form-label">Message: </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="150 character limit."></textarea>
      </div>

      <button type="button" class="btn btn-outline-secondary" action="">Submit</button>

    </div>

  </div>

@php

    $sql = "SELECT pid, mid, user, text FROM MESSAGES.messages";
    $rows = array(array());
    $index = 0;
    $counter = 0;

    class MessageBox
    {


      function __construct()
      {

      }

      function Display($pid, $mid, $user, $text, $index) {
        if ($mid == 1) {
          echo '<div class="card msgMain text-white bg-dark mb-3 mx-auto shadow-lg w-75 text-wrap" style="">
            <div class="card-header">', $user;

            if ($mid == 1) {
              echo '<input type="checkbox" value="Reply"><span style="float:right; padding-right: 1rem;">Reply </span>';
            }

          echo '</div>
            <div class="card-body">
              <p class="card-text">', $text; echo'</p>
            </div>
          </div>
          ';
        }
        else {
          echo '<div class="card msgReply text-white bg-dark mb-3 mx-auto shadow-lg w-75 text-wrap" style="">
            <div class="card-header">', $user; echo'</div>
            <div class="card-body">
              <p class="card-text">', $text; echo'</p>
            </div>
          </div>
          ';
        }
      }
    }

@endphp

</x-app-layout>



<x-footer></x-footer>
