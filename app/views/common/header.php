<!DOCTYPE html>
<html lang="en-US" class="hide-scroll">
<head> 
    <title><?php echo SITENAME; ?></title>

    <meta charset="utf-8" />

    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no,width=device-width">

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header {
            position: fixed;
            top:0;
            background-color: #b3e6ff;
            width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        header > div {
            align-items: center;;
        }

        header div :nth-child(odd){
            
        }

        .logo {
            flex: 1;
        }

        .navigator {
            flex: 10;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        
        .navigator h3 {
            margin: 0;
            text-align: center;
        }

        .navigator > div {
            align-items: center;
            flex-basis: 20%;
            padding: 0 1rem 0 1rem;
        }


        .search {
            flex: 3;
        }

        .cart {
            flex: 1;
        }

    </style>

    

</head>
    <body>
        <header>
            <div class="logo">
                <img src="test.jpg" alt="logo" style="width: 5rem;">
            </div>

            <div class="navigator">
                <div>
                    <a href="">
                        <h3>Home</h3>
                    </a>
                </div>

                <div>
                    <a href="">
                        <h3>Product</h3>
                    </a>
                </div>

                <div>
                    <a href="">
                        <h3>Design</h3>
                    </a>
                </div>

                <div>
                    <a href="">
                        <h3>About Us</h3>
                    </a>
                </div>

                <div>
                    <a href="">
                        <h3>Service</h3>
                    </a>
                </div>
            </div>

            <div class="search">
                <input type="text" placeholder="Search..">
                <img src="icon_search.jpg" alt="icon_search">
            </div>

            <div class="cart">
                <a href="">
                    <img src="icon_cart.jpg" alt="icon_cart" style="width:40px; height:auto">
                </a>   
            </div>
            
        </header>
