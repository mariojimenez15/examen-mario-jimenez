@extends('layouts.master')

@section('content')
    <br>
    <div align="center">
    <div class="alert alert-success" role="alert">
        <h2>Bienvenido {{$user}}, al sitio de catálogo de películas de UNITEC</h2>
    </div>
    </div>
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" width="100%" height="500" src="https://3.bp.blogspot.com/-SsbgGiddixI/XDCjX75Av2I/AAAAAAAAD4A/WjWP63sXkYwQ6CvL9t7z9Y2uAgRwcVT9wCHMYCw/s1600/16-pulp-fiction-hd-wallpapers-background-images-wallpaper-abyss.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" width="100%" height="500" src="https://images5.alphacoders.com/797/797075.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" width="100%" height="500" src="http://www.cerc-ug.org/pic/b/62/622971_taxi-driver-wallpaper.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@stop
