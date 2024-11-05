@extends('layout.master')

@section('title', 'دسته بندی محصولات')

@section('header')
    @include('body.navbar')
@endsection

@section('content')
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <div class="page-content-wrapper">
        <div class="container">
          <!-- Language Area-->
          <div class="language-area-wrapper py-3">
            <ul>
              <li>
                <input id="eng" type="radio" name="selector" checked>
                <label for="eng">فارسی</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="eng" type="radio" name="selector">
                <label for="eng">English</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Afrikaans" type="radio" name="selector">
                <label for="Afrikaans">Afrikaans</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Albanian" type="radio" name="selector">
                <label for="Albanian">Albanian</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Arabic" type="radio" name="selector">
                <label for="Arabic">Arabic</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Azerbaijani" type="radio" name="selector">
                <label for="Azerbaijani">Azerbaijani</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Belarusian" type="radio" name="selector">
                <label for="Belarusian">Belarusian</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Bengali" type="radio" name="selector">
                <label for="Bengali">Bengali</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Bulgarian" type="radio" name="selector">
                <label for="Bulgarian">Bulgarian</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Catalan" type="radio" name="selector">
                <label for="Catalan">Catalan</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Cebuano" type="radio" name="selector">
                <label for="Cebuano">Cebuano</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Chichewa" type="radio" name="selector">
                <label for="Chichewa">Chichewa</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Dutch" type="radio" name="selector">
                <label for="Dutch">Dutch</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Filipino" type="radio" name="selector">
                <label for="Filipino">Filipino</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="French" type="radio" name="selector">
                <label for="French">French</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="German" type="radio" name="selector">
                <label for="German">German</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Hebrew" type="radio" name="selector">
                <label for="Hebrew">Hebrew</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Hindi" type="radio" name="selector">
                <label for="Hindi">Hindi</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Indonesian" type="radio" name="selector">
                <label for="Indonesian">Indonesian</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Italian" type="radio" name="selector">
                <label for="Italian">Italian</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Latvian" type="radio" name="selector">
                <label for="Latvian">Latvian</label>
                <div class="check"></div>
              </li>
              <li>
                <input id="Malayalam" type="radio" name="selector">
                <label for="Malayalam">Malayalam</label>
                <div class="check"></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
@endsection
