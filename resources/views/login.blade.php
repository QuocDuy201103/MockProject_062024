<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form-v6 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="src/assets/css/nunito-font.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="src/assets/css/style.css" />
    <!-- Import tailwind -->
    @vite('resources/css/app.css')
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> -->

</head>

<body class="form-v6">
    <div class="w-full mx-auto bg-gradient-to-r from-blue-900 to-sky-500 flex justify-center items-center">
        <div class="bg-white w-[968px] rounded-lg my-44 font-nunito font-bold relative flex">
            <div class="overflow-hidden rounded-tl-lg rounded-bl-lg">
                <img class="w-full h-full object-cover" src="src/assets/images/SignupLadySmall.webp" alt="form">
            </div>

            <form class="p-[30px] px-[40px] relative w-full" action="#" method="post">
                <h2 class="text-[#211614] text-2xl text-center relative pt-[6px] mb-[47px]">Welcome to LiveAuctioneers!
                </h2>
                <label
                    class="block mb-1 leading-[14px] flex-grow-0 flex-shrink-1 w-auto max-w-full font-normal text-sm text-[#7d8084]"
                    for="email">EMAIL ADDRESS / USERNAME</label>
                <div class="flex items-start justify-between w-full">
                    <input
                        class="w-full px-[12px] py-[6px] flex items-center justify-center border border-gray-300 appearance-none outline-none font-nunito text-base font-medium text-[#333] focus:border-[#00617f]"
                        type="text" name="full-name" id="full-name" class="mb-[35px]" required>
                </div>
                <div class="h-8"></div>
                <label
                    class="block mb-1 leading-[14px] flex-grow-0 flex-shrink-1 w-auto max-w-full font-normal text-sm text-[#7d8084]"
                    for="password">PASSWORD</label>
                <div class="flex items-start justify-between w-full">
                    <!-- <span>
                        <img class="password-icon" src="src/assets/images/visible.png" alt="">
                    </span> -->
                    <input
                        class="w-full px-[12px] py-[6px] flex items-center justify-center border border-gray-300 appearance-none outline-none font-nunito text-base font-medium text-[#333] focus:border-[#00617f]"
                        type="text" name="your-email" id="your-email" class="mb-[35px]" required
                        pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                <div class="text-center">
                    <input type="submit" name="login"
                        class="bg-[#cc2f28] w-full shadow-md border-none my-[11px] mb-[50px] cursor-pointer font-nunito text-white font-bold text-lg px-6 py-3"
                        value="Login">
                    <a class="underline text-[#00617f] font-normal">Forgot Password?</a>
                </div>

                <div class="text-center my-6">
                    <span style="font-weight:400;">Don't have an account?</span><a
                        class="underline text-[#00617f] font-normal">Join</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>