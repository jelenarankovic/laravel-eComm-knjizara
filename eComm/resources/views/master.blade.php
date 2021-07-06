<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akiba</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    
</body>
<style>
 
.custom-login{
    height: 600px;
    padding-top: 100px;
}
img.slider-img{
height: 400px !important;
display: block;
margin-left: auto;
 margin-right: auto;
width: 60%;
}
.custom-product{
    height: 600px;
}
.slider-text{
    background-color: #35443585 !important;
}
.trending-image{
    height: 100px;
}
.trending-item{
    float: left;
    width: 20%;
    }
    .tranding-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 400px;
    }
    .search-box{
        width: 500px !important;
    }
    .cart-list-devider{
        border-bottom: 1px solid #cccccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
</html>