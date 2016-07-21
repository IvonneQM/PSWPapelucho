@extends('cms.layout')
@section('general-content-1')
<div id="mycarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
        <li data-target="#mycarousel" data-slide-to="3"></li>
        <li data-target="#mycarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="1.jpg" data-color="lightblue" alt="First Image">
            <div class="carousel-caption">
                <h3>First Image</h3>
            </div>
        </div>
        <div class="item">
            <img src="2.jpg" data-color="firebrick" alt="Second Image">
            <div class="carousel-caption">
                <h3>Second Image</h3>
            </div>
        </div>
        <!-- more slides here -->
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script>
    $('.carousel').carousel({
        interval: 6000,
        pause: "false"
    });
</script>

@endsection