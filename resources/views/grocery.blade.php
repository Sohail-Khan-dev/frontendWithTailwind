<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <script src="https://cdn.tailwindcss.com"></script>

    <title>TailwindCss</title>
</head>
<body>
    <div class="container min-w-full min-h-full  bg-[url('images/image.png')] bg-center bg-cover px-20 py-5 relative ">
        <nav class="flex items-center">
            <img src="images/logo.png" class="w-40 cursor-pointer">
            <ul class="flex-1 text-center">
                <li class="list-none inline-block px-5"><a href="/" class="no-underline text-white"> Home </a> </li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white"> About </a> </li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white"> Fetures </a> </li>
                <li class="list-none inline-block px-5"><a href="#" class="no-underline text-white"> Contact </a> </li>
            </ul>
            <img src="images/cart.png">
        </nav>
    
        <div class="text-white mt-48 max-w-lg">
            <h1 class="text-4xl font-semibold leading-normal">
                Groceries <br> Delivery in <span class="font-light"> 10 min </span>
            </h1>
            <p>
                Groceries offer a wide range of porducts, Including freshe product, meats, dairy, baked goods and non-permisehable items
            </p>
            <div class="mt-10">
                <a href="#" class=" text-gray-600 bg-yellow-300 rounded-3xl py-2 px-8 font-medium inline-block mr-4 
                                    hover:bg-transparent hover:border-red-600
                                    hover:text-white hover:border-2 border-t "> Order Now </a>
                <a href="#"> Download App <span class="text-lg inline-block rotate-90" > &#10148</span> </a>
            </div>
        </div>
        <img src="images/grocery-image.png" class=" w-full xl:w-1/2 xl:absolute bottom-0 right-20 ">
    </div>
</body>
