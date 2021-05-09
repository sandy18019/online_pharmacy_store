@extends('layouts.app')

@section('title')
    Home
@endsection('title')

@section('content')
<section class="main">

<div class="title">
  <h1>Mona's Pharmacy</h1>

  <div class="barr">
    <p>&nbsp +91 9823 132 111  &nbsp &nbsp  &nbsp contact@gmail.com</p>


  

  <div class="barr">
    <a href="Register.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="logintest.php" class="w3-bar-item w3-button w3-mobile">Categories</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile">About Us</a>
    <a href="#" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
    <input type="text" class="barr" placeholder="Search..">
    <button class="searchbutton">Go</button>
  </div>
</div>


<div class="card">

    <div class="card1">
  <img src="pic/hair.jpg" style="width:100%">
  <p>Hair Care</p>
  <p><button id="view">View</button></p>
</div>


  <div class="card2">
    <img src="pic/meds.jpg" style="width:100%">
    <p>Drugs</p>
    <p><button id="view">View</button></p>
  </div>

</div>

<div class="card3">
    <img src="pic/covid.jpg" style="width:100%">
    <p>Covid 19</p>
    <p><button id="view">View</button></p>
  </div>


  <div class="card4">
    <img src="pic/skin.jpg" style="width:100%">
    <p>Skin Care</p>
    <p><button id="view">View</button></p>
  </div>

  <div class="card5">
    <img src="pic/beauty.jpg" style="width:100%">
    <p>Beauty</p>
    <p><button id="view">View</button></p>
  </div>

  <div class="card6">
    <img src="pic/oral.jpg" style="width:100%">
    <p>Oral Care</p>
    <p><button id="view">View</button></p>
  </div>

  <div class="card7">
    <img src="pic/baby.jpg" style="width:100%">
    <p>Baby Products</p>
    <p><button id="view">View</button></p>
  </div>

  <div class="card8">
    <img src="C:\Users\yasmi\Desktop/vitamin.jpg" style="width:100%">
    <p>Vitamin & Supplements</p>
    <p><button id="view">View</button></p>
  </div>

</div>
@endsection
