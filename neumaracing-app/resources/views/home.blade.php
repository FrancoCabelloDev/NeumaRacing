<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neuma Racing</title>
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Top nav-bar -->
    <div id="top-bar" class="bg-gray-100 text-black flex justify-end items-center px-6 py-2">
        <!-- Email y WhatsApp -->
        <div class="flex items-center space-x-14">
            <!-- Email -->
            <div class="flex items-center space-x-2">
                <img src="{{asset("img/email.svg")}}" alt="Email" class="h-6 w-6">
                <a href="/">jcnllantas@gmail.com</a>
            </div>
            <!-- WhatsApp -->
            <div class="flex items-center space-x-0">
                <img src="{{asset("img/whatsapp.png")}}" alt="Whatsapp" class="h-8 w-8">
                <a href="https://wa.me/+51948464266">+51 948 464 266</a>
            </div>
        </div>
    </div>
    

</body>
</html>
