<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* :root{
            --primary-color: blue;
            --secondary-color: green;
            --text-color: red;  
        } */
        .main-layout {
            display: grid;
            grid-template-columns: repeat(12,1fr);
            grid-template-rows: 100px auto 100px;
            grid-template-areas:
            "h h h h h h h h h h h h"
            "m m c c c c c c c c c c"
            "f f f f f f f f f f f f"
            ;
        }
        .header{
            grid-column: h;
            background-color: blue;
        }
        .menu{
            grid-column: m;
            background-color: blueviolet;
        }
        .content{
            grid-column: c;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-areas: 
            "oc oc oc s";
        }
        .o-content{
            grid-column: oc;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .each-product{
            width: auto;
            height: auto;
            padding: 10px;
            border: 1px solid black;
            margin: 10px;
            border-radius: 15px;
        }
        .each-product:hover{
            box-shadow: 2px 3px 20px 6px grey;
        }
        .each-product img{
            max-width: 130px;
            min-width: 50px;
            min-height: 100px;
            border-radius: 15px;
        }
        .each-product h1{
            font-size: 20px;
        }
        .price-cart{
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .price{
            flex: 1;
        }
        .price h1{
            font-size: 18px;
            color: var(--text-color);
        }
        .cart{
            flex: 1;
            border: 1px solid var(--layout-color);
            border-radius: 5px;
            color: var(--text-color);
        }
        .cart:hover{
            border: 1px solid var(--layout-color);
            border-radius: 5px;
            color: black;
            box-shadow: 1px 1px 5px 5px black;
        }
        .cart button{
            padding: 1px;
            background-color: brown;
        }
        .sidebar{
            grid-column: s;
            background-color: cornsilk;
        }
        .footer{
            grid-column: f;
            background-color: brown;
        }
    </style>
</head>
<body>
    <div class="main-layout">
        <div class="header">Header</div>
        <div class="menu">Menu</div>
        <div class="content">
            <div class="o-content">
                <div class="each-product">
                    <h1>Hp Laptop</h1>
                    <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">
                    <div class="price-cart">
                        <div class="price">
                            <h1>23000 Tk</h1>
                        </div>
                        <div>
                            <button class="cart">Cart</button>
                        </div>
                    </div>
                </div>
                

            </div>
            <div class="sidebar">Sidebar</div>
        </div>
        <div class="footer">Footer</div>
    </div>
</body>
</html>