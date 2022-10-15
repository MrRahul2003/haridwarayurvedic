<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            margin-top: 20px;
            background: #f9f9f9;
        }

        .card {
            border-radius: 6px;
            background-color: #FFFFFF;
            margin-bottom: 20px;
            box-shadow: 0 25px 20px -21px rgba(0, 0, 0, 0.57);
            margin-top: 30px;
        }

        .card-background {
            position: relative;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .card-background .image {
            border-radius: 6px;
        }

        .card .image {
            width: 100%;
            overflow: hidden;
            height: 260px;
            border-radius: 6px 6px 0 0;
            position: relative;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .card .image img {
            width: 100%;
        }

        .card-background .filter {
            opacity: 0.20;
            filter: alpha(opacity=20.00000000000001);
            border-radius: 6px;
        }

        .card .filter {
            position: absolute;
            z-index: 2;
            background-color: rgba(0, 0, 0, 0.68);
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            text-align: center;
        }

        .card-background:hover .filter {
            opacity: 0.65;
            filter: alpha(opacity=65);
        }

        .card-background .content,
        .card-background .footer {
            position: absolute;
            z-index: 3;
            top: 0;
            left: 0;
            width: 100%;
        }

        .card .content {
            padding: 15px 15px 10px 15px;
        }

        .card-background .price {
            margin: 0;
            color: #ffffff;
            font-weight: normal;
        }

        .card-background .title {
            margin-top: 30px;
            font-weight: 400;
        }

        .card-background .title,
        .card-background .stats,
        .card-background .category,
        .card-background .description,
        .card-background small,
        .card-background a {
            color: #ffffff;
        }

        .card .title {
            margin: 0 0 10px 0;
            color: #333333;
            font-weight: 300;
        }

        .card-background .footer {
            bottom: 0;
            top: auto;
            padding: 10px 15px;
            width: 100%;
            line-height: 40px;
            color: #ffffff;
        }

        .card .footer div {
            display: inline-block;
        }

        .card .author {
            font-size: 12px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="card card-background">
                    <div class="image"
                        style="background-image: url(https://images.unsplash.com/photo-1556386734-4227a180d19e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60); background-size: cover; background-position: 50% 50%;">
                        <div class="filter"></div>
                    </div>
                    <div class="content">
                        <h5 class="price"><strong>Satvik Diet</strong>
                            <a href="#" class="pull-right">
                                <i class="fa fa-heart"></i>3.3.5
                            </a>
                        </h5>
                    </div>
                    <div class="footer">
                        <div class="author">
                            <strong>Food</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-background">
                    <div class="image"
                        style="background-image: url(https://images.unsplash.com/photo-1632685238562-86496b093a90?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8Mnw1OTcyODM4M3x8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60); background-size: cover; background-position: 50% 50%;">
                        <div class="filter"></div>
                    </div>
                    <div class="content">
                        <h5 class="price"><strong>Shri Dhanwantry</strong>
                            <a href="#" class="pull-right">
                                <i class="fa fa-heart"></i>3.3.5
                            </a>
                        </h5>
                    </div>
                    <div class="footer">
                        <div class="author">
                            <strong>Yoga</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-background">
                    <div class="image"
                        style="background-image: url(https://images.unsplash.com/photo-1569936906148-06de87cb0681?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1176&q=80); background-size: cover; background-position: 50% 50%;">
                        <div class="filter"></div>
                    </div>
                    <div class="content">
                        <h5 class="price"><strong>Ayurveda & Covid-19</strong>
                            <a href="#" class="pull-right">
                                <i class="fa fa-heart"></i>3.3.5
                            </a>
                        </h5>
                    </div>
                    <div class="footer">
                        <div class="author">
                            <strong>Medicine</strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>