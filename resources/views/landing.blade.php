<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Landing Page</title>

</head>
<body>
<nav class="bg-purple-500 text-white flex justify-between">

    <span class="text-xl flex items-center font-bold">
    <img src="https://randomuser.me/api/portraits/women/66.jpg" alt="user" srcset="" class="h-12 mx-2 pt-2 px-3 rounded-2xl">
    Best Phones
    </span>

    <ul class="px-28 py-4 flex space-x-10 justify-end">
        <li class="cursor-pointer hover:text-yellow-300 "> <a href="/">Home    </a> </li>
        <li class="cursor-pointer hover:bg-green-300"> <a href=""> About   </a> </li>
        <li class="cursor-pointer hover:-backdrop-hue-rotate-180"> <a href=""> Catelog </a> </li>
        <li class="cursor-pointer hover:bg-red-800 hover:text-blue-500 "> <a href=""> Contact Us </a> </li>
    </ul>
</nav>
<main class="flex bg-fuchsia-200 justify-around">
    <div class="main py-40 pl-9">
        <div class="text-5xl">
            The Best Used  Phone in the City
        </div>
        <p class="py-3 w-1/3">Used phones are a great way to save money and enjoy the features of a smartphone without paying the full price. You can find a variety of used phones from different brands, models, and conditions on online platforms or local shops. However, you should always check the quality, warranty, and compatibility of the used phone before buying it </p>
        <div class="buttons my-4">
            <button class="bg-purple-500 text-white px-4 py-2 rounded-2xl hover:bg-white transition-all duration-300 ease-in-out hover:text-yellow-500"> Buy Now </button>
            <button class="bg-purple-500 text-white px-4 py-2 rounded-2xl hover:bg-yellow-100 transition-all duration-300 ease-in-out hover:text-green-500"> Contact Us </button>
        </div>
    </div>
    <div class="flex justify-center py-40 pr-12">
        <img src="images/boy.jpg" alt="boy" class="h-60">
    </div>
</main>
<hr> <hr> <hr>
</body>
</html>
