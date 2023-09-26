<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Food Recipe Website - Savory Secrets</title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/icons.css" rel="stylesheet" type="text/css">
    <link href="/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css"  />
    <link href="/css/flexslider.css" rel="stylesheet" type="text/css" />
    <link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" >
    <!--[if lt IE 8]><!-->
    <link href="/ie7/ie7.css" rel="stylesheet" >
    <!--<![endif]-->
    <link href="/css/home.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--jquery ui stylesheet-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- site favicon -->
    <link rel="icon" href="images/favicon.png" />

    <!--selectric stylesheet-->
    <link rel="stylesheet" href="css/selectric.css"/>
    <!--font awesome stylesheet-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!--swipe box stylesheet-->
    <link rel="stylesheet" href="css/swipebox.css"/>
    <!-- mean menu stylesheet-->
    <link rel="stylesheet" href="css/meanmenu.css"/>
    <!--slick slider stylesheet-->
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
    <!--bootstrap stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <!--animate stylesheet-->
    <link rel="stylesheet" href="css/animate.css"/>
    <!--main stylesheet-->
    <link rel="stylesheet" href="css/main.css"/>
</head>
<body>


<!--header-->
<header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 address">
                        
                    </div>
                    <div class="col-sm-6 social">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        Food<span>Recipe</span>
                    </a>
                    @if(auth()->check())
                        <p><span class="user-name"><b>{{ auth()->user()->username }}</b></span></p>
                    @endif
                </div>
                <div class="collapse navbar-collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                            <a href="/user_home">Home</a>
                        </li>
                        <li>
                            <a href="/submit-recipe">Submit Recipe</a>
                        </li>
                        <li>
                            <a href="/my-recipe">My Recipes</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<!--header ends-->

<!--banner-->
<div class="clear"></div>
    <div id="page-content">
<div class="banner banner-blog">
    <div class="container ">
        <div class="main-heading">
            <h1>Recipe listing page</h1>
        </div>

    </div>
</div>

<div class="advance-search">
    <!--advance search form-->

    <div class="container">
        <div class="wrapper-search">
            <div class="container-tags">
            <span class="tag">
                <span class="tag-inner">Find Recipes <i class="fa fa-angle-down"></i></span>
            </span>

            </div>
            <div class="outer-advance-search">

                <form action="#" id="advance-search">
                    <fieldset>
                        <div class="inner-advance-search">

                            <div class="form-field">
                                <label for="ingredient">ingredient</label>
                                <select name="ingredient" id="ingredient" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Ingredient</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="course">course</label>
                                <select name="course" id="course" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Course</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="cuisine">cuisine</label>
                                <select name="cuisine" id="cuisine" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Cuisine</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="time">Cooking Time</label>
                                <select name="time" id="time" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Cooking Time</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <div class="form-field">
                                <label for="calories">calories</label>
                                <select name="calories" id="calories" class="advance-selectable">
                                    <option value="ing1" selected="selected">Any Calories</option>
                                    <option value="ing2">Butter</option>
                                    <option value="ing3">Cheese</option>
                                    <option value="ing4">Cream</option>
                                    <option value="ing5">Yeast</option>
                                </select>
                            </div>

                            <button type="submit"><i class="fa fa-search"></i></button>

                        </div>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>

    <!--advance search form ends-->
</div>

<!--banner ends-->
<div class="recipes-home-body inner-page">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-9">
<div class="recipe-set">
<div class="listing-buttons">
    <span class="grid "><i class="fa fa-th-large"></i></span>
    <span class="list current"><i class="fa fa-bars"></i></span>
</div>
<h2>Recent Recipes</h2>

<div class="recipe-listing listing-list">

@foreach ($recipes as $recipe)
@if ($recipe->user_id !== auth()->user()->id)
<div class="listing">
    <div class="image">
    <a href="{{ route('recipe.details', ['id' => $recipe->id]) }}">
            <img src="{{ asset('storage/' . $recipe->image) }}" alt="image"/>
        </a>
    </div>
    <div class="detail">
        <h4><a href="{{ route('recipe.details', ['id' => $recipe->id]) }}">{{ $recipe->title }}</a></h4>
        <p>
        {{ $recipe->short_description }}
        </p>
        <div class="meta-listing">
            <!--<ul class="post-meta">
                <li class="author"><a href="#">{{ auth()->user()->name }}</a></li>
                <li class="calendar">{{ $recipe->created_at->format('d/m/Y') }}</li>
            </ul>-->
           <!-- @for ($i = 1; $i <= 5; $i++)
            @if ($i <= $recipe->ratings->avg('rating'))
                            <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">-->
                                <!-- ... Include your SVG path for a filled star icon ... -->
                           <!-- </svg>
                        @else
                            <svg class="icon-container" width="25" height="19" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 19">-->
                                <!-- ... Include your SVG path for an empty star icon ... -->
                            <!--</svg>
                        @endif
                    @endfor
                </span>
                <span class="rating-figure">({{ number_format($recipe->ratings->avg('rating'), 1) }}/5)</span>
        
                <div class="rating-input">
                <form class="rating-form" method="post" action="{{ route('recipes.rate', ['recipe' => $recipe->id]) }}">
                 @csrf-->
                <!-- Hidden input field to store the recipe's ID -->
                <!--<input type="hidden" class="recipe-id" value="{{ $recipe->id }}">-->

                <!-- Radio buttons for rating -->
                <!--<label>
                    <input type="radio" name="rating" value="1">
                    <span class="star">&#9733;</span>
                </label>
                <label>
                    <input type="radio" name="rating" value="2">
                    <span class="star">&#9733;</span>
                </label>
                <label>
                    <input type="radio" name="rating" value="3">
                    <span class="star">&#9733;</span>
                </label>
                <label>
                    <input type="radio" name="rating" value="4">
                    <span class="star">&#9733;</span>
                </label>
                <label>
                    <input type="radio" name="rating" value="5">
                    <span class="star">&#9733;</span>
                </label>

                <button type="submit">Submit Rating</button>
            </form>
        </div>-->
            
        @if ($recipe->video_recipe === 'yes' && !empty($recipe->video_embed_code))
    <div class="recipe-video">
        <a href="{{ $recipe->video_embed_code }}" target="_blank" class="btn btn-primary">Watch Video</a>
    </div>
@endif
            </div>
            <!-- Other meta details here... -->
    </div>
</div> 
@endif
@endforeach


<!--comment-->
<ul class="page-nav">
    <li class="current"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 col-lg-3">
<aside>
<div class="side-bar">
<!--recipes search widget-->
<div class="widget recipe-search">

    <div class="category-list">
        <ul>
            <li><a href="#">breakfast</a><div class="list-icons"><svg version="1.1"  class="icon-container" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="42px" height="42px" viewBox="0 0 42 42" enable-background="new 0 0 42 42" xml:space="preserve">
<path class="icon-svg" d="M38.001,22.42v11.577c0,1.653-1.349,3-3.001,3h-8H7c-1.654,0-2.999-1.347-2.999-3V22.42C2.036,20.542,1,18.331,1,16.001
	C1,9.937,8.177,5.003,17,5.003h8c8.823,0,16,4.934,16,10.998C41,18.331,39.964,20.541,38.001,22.42L38.001,22.42z M17,7.003
	c-7.719,0-14,4.036-14,8.998c0,1.873,0.921,3.684,2.665,5.234C5.877,21.426,6,21.695,6,21.982v12.015c0,0.552,0.449,1.001,1,1.001
	h20c0.552,0,1.001-0.449,1.001-1.001V21.982c0-0.287,0.12-0.558,0.334-0.748C30.079,19.683,31,17.873,31,16.001
	C31,11.039,24.721,7.003,17,7.003L17,7.003z M26.249,7.043c4.077,1.996,6.752,5.263,6.752,8.958c0,2.33-1.036,4.54-3.001,6.419
	v11.577c0,0.354-0.073,0.687-0.186,1.001H35c0.551,0,1-0.449,1-1.001V23h-2c-0.555,0-0.999-0.447-0.999-1
	c0-0.552,0.444-0.999,0.999-0.999h2.578C38.157,19.5,39,17.78,39,16.001C39,11.311,33.385,7.451,26.249,7.043L26.249,7.043z
	 M20.5,16.001c-0.828,0-1.5-0.672-1.5-1.499c0-0.828,0.672-1.501,1.5-1.501s1.5,0.673,1.5,1.501
	C22,15.329,21.328,16.001,20.5,16.001L20.5,16.001z M21,25.499C21,26.328,20.328,27,19.5,27c-0.829,0-1.5-0.672-1.5-1.501
	C18,24.671,18.671,24,19.5,24C20.328,24,21,24.671,21,25.499L21,25.499z M11.5,21.001c-0.829,0-1.5-0.672-1.5-1.501
	c0-0.828,0.672-1.499,1.5-1.499S13,18.672,13,19.5C13,20.329,12.329,21.001,11.5,21.001L11.5,21.001z"/>
</svg>
            </div></li>
            <li><a href="#">Starter</a><div class="list-icons"><svg version="1.1" class="icon-container" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="42px" height="48px" viewBox="0 0 42 48" enable-background="new 0 0 42 48" xml:space="preserve">
<path class="icon-svg" d="M34,22.997c0-2.757-2.244-5-5.001-5c-1.641,0-3.088,0.805-3.999,2.031c-0.912-1.226-2.358-2.031-4-2.031
	c-1.641,0-3.088,0.805-4,2.031c-0.912-1.226-2.358-2.031-4-2.031c-2.757,0-5.001,2.242-5.001,5c0,2.568,1.957,4.667,4.454,4.942
	c-0.286,0.629-0.455,1.321-0.455,2.056c0,2.569,1.957,4.667,4.454,4.943C16.169,35.567,16,36.26,16,36.994
	c0,2.756,2.242,4.998,5,4.998c2.757,0,5-2.242,5-4.998c0-0.734-0.169-1.427-0.453-2.056c2.497-0.276,4.454-2.374,4.454-4.943
	c0-0.734-0.169-1.427-0.455-2.056C32.044,27.664,34,25.565,34,22.997z M21,19.997c1.653,0,3,1.345,3,3c0,1.653-1.347,2.998-3,2.998
	c-1.654,0-3-1.345-3-2.998C18,21.342,19.346,19.997,21,19.997z M13.001,25.995c-1.655,0-3.001-1.345-3.001-2.998
	c0-1.655,1.346-3,3.001-3c1.653,0,3,1.345,3,3C16,24.65,14.654,25.995,13.001,25.995z M17,32.994c-1.655,0-3-1.346-3-2.999
	c0-1.654,1.345-3,3-3c1.653,0,3,1.346,3,3C20,31.648,18.654,32.994,17,32.994z M21,39.992c-1.654,0-3-1.345-3-2.998
	c0-1.655,1.346-3,3-3c1.653,0,3,1.345,3,3C24,38.647,22.653,39.992,21,39.992z M25,32.994c-1.654,0-3-1.346-3-2.999
	c0-1.654,1.346-3,3-3s2.999,1.346,2.999,3C27.999,31.648,26.654,32.994,25,32.994z M28.999,25.995c-1.653,0-2.999-1.345-2.999-2.998
	c0-1.655,1.346-3,2.999-3c1.655,0,3.002,1.345,3.002,3C32.001,24.65,30.654,25.995,28.999,25.995z M15,9.998c2.755,0,5,2.243,5,5
	c0,0.552,0.448,1,1,1s1-0.448,1-1c0-1.355-0.393-2.616-1.062-3.689C20.971,11.21,21,11.108,21,10.998c0-1.654,1.346-3,3-3
	c0.553,0,1-0.447,1-1C25,6.447,24.553,6,24,6c-2.218,0-4.08,1.46-4.732,3.462C18.084,8.548,16.606,7.999,15,7.999
	c-0.553,0-1,0.448-1,1C14,9.552,14.447,9.998,15,9.998z"/>
</svg>
            </div></li>
            <li><a href="#">lunch</a><div class="list-icons"><svg version="1.1"  class="icon-container" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="42px" height="48px" viewBox="0 0 42 48" enable-background="new 0 0 42 48" xml:space="preserve">
<g>
	<path class="icon-svg" d="M24.576,22.897c0.138,0.065,0.282,0.094,0.423,0.094c0.377,0,0.737-0.213,0.908-0.577l7-14.998
		c0.231-0.5,0.017-1.095-0.484-1.329c-0.5-0.233-1.096-0.015-1.329,0.484l-7,14.997C23.86,22.069,24.077,22.665,24.576,22.897z"/>
	<path class="icon-svg" d="M20.578,22.897c0.136,0.065,0.28,0.094,0.421,0.094c0.377,0,0.738-0.213,0.908-0.577l7-14.998
		c0.234-0.5,0.018-1.095-0.484-1.329c-0.498-0.233-1.093-0.015-1.328,0.484l-7,14.997C19.86,22.069,20.077,22.665,20.578,22.897z"/>
	<path class="icon-svg" d="M36.758,18.129c-0.078-0.03-0.156-0.028-0.235-0.036c-0.795-1.986-2.537-3.527-4.727-3.971
		c-0.541-0.113-1.068,0.24-1.179,0.781c-0.109,0.542,0.24,1.069,0.781,1.179C33.485,16.505,35,18.36,35,20.491
		c0,0.553,0.447,1,0.999,1c0.554,0,1.001-0.447,1.001-1c0-0.037-0.009-0.072-0.011-0.109c1.555,0.697,2.012,1.319,2.012,1.61
		c0,1.356-6.354,3.999-18.001,3.999c-11.647,0-18-2.643-18-3.999c0-0.299,0.49-0.945,2.108-1.654C5.039,20.713,5,21.1,5,21.491
		C5,22.043,5.447,22.492,6,22.492c0.552,0,1-0.449,1-1.001c0-2.313,1.805-4.28,4.11-4.479c0.484-0.042,0.869-0.425,0.91-0.91
		c0.199-2.305,2.166-4.108,4.48-4.108c1.273,0,2.494,0.547,3.349,1.502c0.323,0.363,0.862,0.439,1.275,0.183
		c0.425-0.266,0.885-0.458,1.364-0.569c0.538-0.125,0.872-0.664,0.747-1.201c-0.125-0.538-0.664-0.873-1.2-0.747
		c-0.437,0.101-0.86,0.248-1.267,0.438c-1.179-1.029-2.695-1.606-4.268-1.606c-3.072,0-5.724,2.205-6.354,5.145
		c-1.643,0.352-3.037,1.346-3.965,2.68c-3.431,1.07-5.183,2.472-5.183,4.174c0,11.025,8.973,19.996,20.001,19.996
		s20.001-8.971,20.001-19.996C41.001,20.454,39.573,19.155,36.758,18.129z M21,39.988c-8.926,0-16.334-6.536-17.741-15.069
		c3.524,2.025,10.662,3.07,17.741,3.07s14.217-1.045,17.74-3.07C37.334,33.452,29.926,39.988,21,39.988z"/>
</g>
</svg>
            </div></li>
            <li><a href="#">dinner</a><div class="list-icons"><svg version="1.1"  class="icon-container" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="42px" height="48px" viewBox="0 0 42 48" enable-background="new 0 0 42 48" xml:space="preserve">
<path class="icon-svg" d="M41.861,32.705c-0.311,0.756-1.041,1.245-1.86,1.245h-5.646c-0.563,0-1.021,0.452-1.021,1.008v2.512
	c0,1.938-1.582,3.514-3.528,3.514c-0.286,0-0.575-0.034-0.86-0.102c-1.596-0.383-2.755-1.867-2.755-3.531v-2.895
	c0-0.252-0.134-0.506-0.429-0.506c-0.285,0-0.518,0.228-0.518,0.506v1.423c0,1.352-0.847,2.563-2.062,2.945
	c-0.67,0.212-1.378,0.189-1.981-0.027v3.196c0,0.805-0.315,1.562-0.888,2.131c-0.57,0.567-1.328,0.88-2.135,0.88
	c-0.32,0-0.642-0.05-0.958-0.148c-1.208-0.381-2.02-1.565-2.02-2.947v-6.95c0-0.547-0.488-1.008-1.066-1.008h-11.1
	c-0.543,0-1.073-0.223-1.452-0.614C1.202,32.947,1,32.435,1.014,31.895c0.257-10.211,4.303-19.917,11.39-27.328
	c0.744-0.777,2.106-0.79,2.876-0.028l26.141,25.985C41.999,31.098,42.171,31.953,41.861,32.705L41.861,32.705z M13.871,5.961
	C7.107,13.002,3.259,22.232,3.014,31.947h11.119c1.691,0,3.068,1.35,3.068,3.011v6.95c0,0.419,0.19,0.9,0.618,1.035
	c0.402,0.127,0.808,0.034,1.085-0.241c0.19-0.189,0.295-0.441,0.295-0.709v-6.031c0-0.552,0.448-1.001,1.001-1.001
	c0.553,0,1,0.449,1,1.001c0,0.672,0.677,1.174,1.381,0.952c0.384-0.12,0.662-0.557,0.662-1.035v-1.423
	c0-1.384,1.129-2.509,2.518-2.509c1.362,0,2.429,1.102,2.429,2.509v2.895c0,0.725,0.535,1.42,1.221,1.584
	c0.986,0.238,1.923-0.503,1.923-1.465v-2.512c0-1.661,1.354-3.011,3.021-3.011h5.646L13.871,5.961L13.871,5.961z M12.507,29.008
	c-1.933,0-3.501-1.569-3.501-3.506s1.568-3.506,3.501-3.506s3.5,1.57,3.5,3.506S14.44,29.008,12.507,29.008L12.507,29.008z
	 M24.51,28.005c-1.381,0-2.501-1.122-2.501-2.505c0-1.382,1.12-2.504,2.501-2.504s2.5,1.123,2.5,2.504
	C27.01,26.883,25.891,28.005,24.51,28.005L24.51,28.005z M16.007,17.99c-1.105,0-2-0.89-2-1.988c0-1.097,0.895-1.987,2-1.987
	c1.105,0,2.001,0.89,2.001,1.987C18.009,17.1,17.112,17.99,16.007,17.99L16.007,17.99z"/>
</svg>
            </div></li>
            <li><a href="#">dessert</a><div class="list-icons"><svg version="1.1"  class="icon-container" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="42px" height="48px" viewBox="0 0 42 48" enable-background="new 0 0 42 48" xml:space="preserve">
<path class="icon-svg" d="M36.793,25.391C36.603,25.146,36.311,25,36,25H6c-0.311,0-0.603,0.146-0.793,0.391c-0.19,0.246-0.253,0.567-0.173,0.867
	l3.208,12.031C8.825,40.473,10.811,42,13.073,42h15.854c2.263,0,4.248-1.527,4.831-3.711l3.208-12.031
	C37.047,25.958,36.983,25.637,36.793,25.391z M31.826,37.773C31.477,39.085,30.283,40,28.927,40H13.073
	c-1.357,0-2.55-0.915-2.899-2.227L7.301,27h27.398L31.826,37.773z"/>
<path class="icon-svg" d="M7,23c0.554,0,1-0.448,1-1c0-3.458,2.987-6.273,6.661-6.273c0.207,0,0.413,0.012,0.617,0.031
	c0.323,0.023,0.641-0.105,0.852-0.355C17.404,13.875,19.311,13,21.361,13c1.477,0,2.875,0.448,4.046,1.295
	c0.445,0.323,1.071,0.223,1.396-0.224c0.325-0.446,0.223-1.072-0.224-1.396c-0.748-0.541-1.567-0.954-2.433-1.235
	C24.674,10.762,25,9.922,25,9c0-2.206-1.795-4-4-4c-2.206,0-4,1.794-4,4c0,1.018,0.394,1.939,1.023,2.646
	c-1.164,0.465-2.219,1.168-3.086,2.088c-0.091-0.004-0.184-0.006-0.276-0.006C9.885,13.728,6,17.438,6,22C6,22.552,6.448,23,7,23z
	 M21,7c1.102,0,2,0.896,2,2c0,1.103-0.898,2-2,2c-1.102,0-2-0.896-2-2C19,7.896,19.898,7,21,7z"/>
<path class="icon-svg" d="M23.049,18.313c-0.29,0.468-0.145,1.085,0.323,1.377c0.47,0.291,1.087,0.146,1.377-0.323C25.669,17.885,27.258,17,29.001,17
	C31.756,17,34,19.243,34,22c0,0.552,0.447,1,1,1c0.552,0,1-0.448,1-1c0-3.86-3.141-7.001-6.999-7.001
	C26.561,14.999,24.337,16.239,23.049,18.313z"/>
</svg>
            </div>
            </li>
        </ul>
    </div>
</div>
<!--recipes search widget ends-->

<!--popular recipes widget-->
<div class="widget latest-news-widget">
    <h2>popular recipes</h2>
    <ul>
        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

    </ul>
</div>
<!--popular recipes widget ends-->
<div class="widget">
    <a href="#">
        <img src="images/temp-images/add-side.jpg" alt="Add"/>
    </a>
</div>
<!--latest news widget-->
<div class="widget latest-news-widget">
    <h2>Latest News</h2>
    <ul>
        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

        <li>
            <div class="thumb">
                <a href="#">
                    <img src="images/temp-images/widget-thumbnail.jpg" alt="thumbnail"/>
                </a>
            </div>
            <div class="detail">
                <a href="#">Pimento Cheese Potato Skins</a>
                <span class="post-date">March 21,2015</span>
            </div>
        </li>

    </ul>
</div>
<!--latest news widget ends-->
<!--get social-->
<div class="widget widget-get-social">
    <h2>get social</h2>
    <ul>
        <li class="facebook">
            <a href="#">
                <i class="fa fa-facebook"></i>
                <span class="count">23.5K</span>
                <span class="count-type">Likes</span>
            </a>
        </li>
        <li class="twitter">
            <a href="#">
                <i class="fa fa-twitter"></i>
                <span class="count">23.5K</span>
                <span class="count-type">Likes</span>
            </a>
        </li>
        <li class="google-plus">
            <a href="#">
                <i class="fa fa-google-plus"></i>
                <span class="count">23.5K</span>
                <span class="count-type">Likes</span>
            </a>
        </li>

    </ul>
</div>
<!--get social ends-->
</div>
</aside>
</div>
</div>

</div>
</div>

<!--footer-->
<div class="footer footer-variant-one footer-fluid">
    <div class="container">
        <div class="footer-inner">
            <div class="text-center">
                <a class="logo-footer wow animated zoomIn" href="index.html"><img src="" alt=""/></a>
                <p class="wow animated flipInX">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    <br/>
                    magna aliquyam erat, with an extra ordinary design and quality development features in low
                </p>

            </div>

            <div class="subs-social-options">
                <div class="row custom-row-footer">
                    <div class="col-md-6 custom-col-options">
                        <div class="left-side">
                            <div class="widget widget-footer news-letter-signup wow animated flipInY">
                                <h2>Newsletter Signup</h2>

                                <form class="subs-form" action="#" method="post">
                                    <div class="email-field">
                                        <input type="email" name="email" placeholder="Enter you email address"/>
                                        <button><i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="right-side">
                            <div class="widget widget-footer social-icons">
                                <h2 class="wow animated fadeInRight">Get Social with Us</h2>
                                <ul>
                                    <li class="wow animated bounceInRight"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay100ms"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay200ms" ><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay300ms"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay400ms" ><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li class="wow animated bounceInRight animation-delay500ms"><a href="#"><i class="fa fa-flickr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center">
                <p>&copy; Copyright 2015 All Rights Reserved by <a href="#">Majestic Themes</a></p>
            </div>
            <div class="corner-image wow animated fadeInRight">
                <img src="images/footer-corner-image.jpg" alt="image"/>
            </div>
        </div>
    </div>
</div>
<!--footer ends-->

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.meanmenu.js"></script>
<script src="js/jquery.selectric.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.swipebox.js"></script>
<script src="js/custom.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const gridButton = document.querySelector('.grid');
    const listButton = document.querySelector('.list');
    const recipeListing = document.querySelector('.recipe-listing');

    gridButton.addEventListener('click', function () {
        recipeListing.classList.remove('list-view');
        gridButton.classList.add('current');
        listButton.classList.remove('current');
    });

    listButton.addEventListener('click', function () {
        recipeListing.classList.add('list-view');
        listButton.classList.add('current');
        gridButton.classList.remove('current');
    });
});
</script>
<!-- JavaScript/jQuery for handling the AJAX request -->

<script>
    // Add JavaScript to handle form submission
    const ratingForms = document.querySelectorAll('.rating-form');
    ratingForms.forEach(form => {
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const formData = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
            });

            // Handle the response as needed
        });
    });
</script>




</body>
</html>