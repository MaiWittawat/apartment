<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
    <title>Apartment</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="mt-1bg-gray-100">
    <div class="banner">
        <div class="slider">
            <img src="https://cdn.discordapp.com/attachments/856855218427265024/1170979487232573440/marla-prusik-5q1KnUjtjaM-unsplash.jpg?ex=655b02a1&is=65488da1&hm=c0954c36f07b9075f5344f080ce5c769a1595186e102a131c58f78c1dce8b8a2&" alt="" id="slider">
        </div>
        <div class="overlay">
            <div class="navbar flex">
                <div class="logo">
                    <img src="https://cdn.discordapp.com/attachments/1128653291283288159/1171219667885506681/Pngtreeapartment_ground_logo_6237449.png?ex=655be251&is=65496d51&hm=cbd7ebd937a7e87506cda9f553a290539b5d4695a10e774a10a1f6c544881190&" alt="" class="h-24">
                </div>

                <div class="menu-icon">
                    <ul class="flex text-white  items-center justify-center gap-48">
                        <li> <a href="" class="choice">Home</a> </li>
                        <li> <a href="" class="choice">Contact</a> </li>
                        <li> <a href="" class="choice">About Us</a> </li>
                    </ul>


                </div>
                <div class="">
                    <a
                    class="inline-block w-auto px-6 py-4 text-white transition-all rounded-md shadow-xl sm:w-auto bg-gradient-to-r from-orange-600 to-orange-500 hover:bg-gradient-to-b dark:shadow-orange-900 shadow-orange-100 hover:shadow-2xl hover:shadow-orange-400 hover:-translate-y-px "
                    href="{{route('login')}}">Login
                </a>
            </div>
            </div>

            <div class="content">
                <h1>Let start to web</h1>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum <br>
                    alias et commodi sed delectus ab laborum asperiores possimus quis sit, beatae vel <br>
                    cupiditate pariatur corrupti eveniet eligendi! Asperiores, pariatur incidunt.</h3>
                <div class="">
                    <a href="{{route('schedule.create')}}" class="py-5 px-16 btn rounded-full">Schedule</a>
                    <a href="{{route('login')}}" class="btn-2 py-5 px-10 btn rounded-full">go to website</a>
                </div>
            </div>
        </div>
    </div>




</body>
</html>



<style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

.banner{
    width: 100%;
    height: 100vh;
    position: relative;
    overflow: hidden
}

.slider{
    width: 100%;
    height: 100vh;
    position: absolute;
    top: 0;
}

#slider{

    width: 1980px;
    height: 1080px;

    object-fit: cover
}

.overlay{
    width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7));
    position: absolute;
    top: 0;
}

.navbar{
    width: 85%;
    display: flex;
    align-items: center;
    margin: 35px auto
}

.logo{
    flex-basis: 15%;
}

.logo img{
    width: 120px;
    cursor: pointer;
}

.menu-icon{
    flex: 1;
    align-items: center;
    text-align: right;
}

.menu-icon img{
    width: 20px;
    margin-left: 40px;
}

.content{
    widows: 60%;
    margin: 160px auto;
    text-align: center;
    color: #fff;
}

.content h1{
    font-size: 60px;
}

.content h3{
    width: 80%;
    margin: 20px auto 100px;
    font-weight: 100;
    line-height: 25px;
}

.btn{
    text-align: center;
    margin: 0 10px;
    font-weight: bold;
    border: 2px solid #fe7250;
    background: #fe7250;
    color: #fff;
    cursor: pointer;
    transition: background 0.5s;
}

.btn:hover{
    background: transparent;
    border: 2px solid #fff;
}


.btn-2{
    background: transparent;
    border: 2px solid #fff;
}

.btn-2:hover{
    background: transparent;
    border: 2px solid #fd7250;
}

.choice{
    position: relative;
    text-decoration: none;
    font-family: 'Poppins',sans-serif;
    color: #dedede;
    font-size: 18px;
    letter-spacing: 0.5px;
    padding: 0 10px;
}
.choice:after{
    content: "";
    position: absolute;
    background-color: #ff3c78;
    height: 2px;
    width: 0;
    left: 0;
    bottom: -10px;
    transition: 0.3s;
}
.choice:hover{
    color: #ffffff;
}
.choice:hover:after{
    width: 100%;
}

</style>
