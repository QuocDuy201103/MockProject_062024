<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="src/assets/css/responsive.css" />
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="h-10 bg-[#FBF6F4]"></div>
        <div class="container mx-auto px-4 py-4 flex justify-between items-center header-container">
            <div class="flex gap-4 md:gap-[48px] relative items-center">
                <div class="text-3xl font-bold">LOGO</div>
                <div class="relative flex-grow md:flex-grow-0">
                    <input type="text" placeholder="Search bar"
                        class="px-4 py-2 border rounded-md search-bar h-10 w-full md:w-[550px]">
                    <img src="src/assets/images/loupe.png" alt="Hero Image" class="w-5 h-5 absolute top-2 right-2">
                </div>
            </div>
            <div class="flex space-x-4 auth-buttons">
                <button class="px-4 py-2 border border-black text-[#00617F] rounded-md">Login</button>
                <button class="px-4 py-2 border border-black text-[#00617F] rounded-md">Sign Up</button>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-[#FBF6F4] h-auto flex justify-center items-center">
        <div class="container mx-auto px-4 py-2 flex justify-between font-semibold nav-links">
            <a href="#" class="px-2">Real estate</a>
            <a href="#" class="px-2">Art</a>
            <a href="#" class="px-2">Jewelry</a>
            <a href="#" class="px-2">Asian Antiques</a>
            <a href="#" class="px-2">Furniture</a>
            <a href="#" class="px-2">Collectibles</a>
            <a href="#" class="px-2">Coins</a>
            <a href="#" class="px-2">Home & Decor</a>
        </div>
    </nav>

    <!-- Hero Image -->
    <div class="container mx-auto my-4">
        <img src="src/assets/images/slider.png" alt="Hero Image" class="w-full h-auto max-h-64 object-cover">
    </div>

    <!-- Featured Auctions -->
    <section class="container mx-auto py-8">
        <div class="flex gap-5 items-center mb-4">
            <h2 class="text-xl font-bold">Featured Auctions</h2>
            <a href="#" class="flex justify-center items-center">
                <span class="text-[#666]">See all</span>
                <img class="w-4 h-4" src="src/assets/images/navigate_next.png" alt="icon-navigate-next">
            </a>

        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="border rounded-md p-4">
                <div class="flex w-full h-40 mb-4 rounded-md">
                    <img src="src/assets/images/slider.png" alt="Auction Image" class="w-3/5 object-cover">
                    <div class="flex flex-col">
                        <img src="src/assets/images/slider.png" alt="Auction Image" class="h-1/2 object-cover">
                        <img src="src/assets/images/slider.png" alt="Auction Image" class="h-1/2 object-cover">
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex flex-col gap-2">
                        <h3>Shimmering Showcase Jewelry Auction!</h3>
                        <p>Florida Estate Sales Inc.</p>
                        <p>Starts on: Jul 07, 2024 12:00 AM GMT+7</p>
                    </div>
                    <div class="ml-auto">
                        <button class="mt-2 px-4 py-2 bg-[#00617F] text-white rounded-md">Explore</button>
                    </div>
                </div>
            </div>
            <div class="border rounded-md p-4">
                <div class="flex w-full h-40 mb-4 rounded-md">
                    <img src="src/assets/images/slider.png" alt="Auction Image" class="w-3/5 object-cover">
                    <div class="flex flex-col">
                        <img src="src/assets/images/slider.png" alt="Auction Image" class="h-1/2 object-cover">
                        <img src="src/assets/images/slider.png" alt="Auction Image" class="h-1/2 object-cover">
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex flex-col gap-2">
                        <h3>Shimmering Showcase Jewelry Auction!</h3>
                        <p>Florida Estate Sales Inc.</p>
                        <p>Starts on: Jul 07, 2024 12:00 AM GMT+7</p>
                    </div>
                    <div class="ml-auto">
                        <button class="mt-2 px-4 py-2 bg-[#00617F] text-white rounded-md">Explore</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending Items -->

    <section class="container mx-auto py-8">
        <div class="flex gap-5 items-center mb-4 trending-header">
            <h2 class="text-xl font-bold">Trending Items</h2>
            <a href="#" class="flex justify-center items-center">
                <span class="text-[#666]">See all</span>
                <img class="w-4 h-4" src="src/assets/images/navigate_next.png" alt="icon-navigate-next">
            </a>
        </div>
        <div class="flex gap-4 justify-center items-center trending-items">
            <a class="w-auto h-auto" href="#">
                <img src="src/assets/images/prev.png" alt="Previous">
            </a>
            <div class="border rounded-md p-4 trending-item">
                <img src="src/assets/images/clock.png" alt="Item Image"
                    class="w-full h-40 object-cover mb-4 rounded-md">
                <h3 class="text-lg font-bold">Clock</h3>
                <p>$500</p>
            </div>
            <div class="border rounded-md p-4 trending-item">
                <img src="src/assets/images/clock.png" alt="Item Image"
                    class="w-full h-40 object-cover mb-4 rounded-md">
                <h3 class="text-lg font-bold">Clock</h3>
                <p>$500</p>
            </div>
            <div class="border rounded-md p-4 trending-item">
                <img src="src/assets/images/clock.png" alt="Item Image"
                    class="w-full h-40 object-cover mb-4 rounded-md">
                <h3 class="text-lg font-bold">Clock</h3>
                <p>$500</p>
            </div>
            <div class="border rounded-md p-4 trending-item">
                <img src="src/assets/images/clock.png" alt="Item Image"
                    class="w-full h-40 object-cover mb-4 rounded-md">
                <h3 class="text-lg font-bold">Clock</h3>
                <p>$500</p>
            </div>
            <a class="w-auto h-auto" href="#">
                <img src="src/assets/images/next.png" alt="Next">
            </a>
        </div>
    </section>

    <!-- For You -->
    <section class="container mx-auto py-8">
        <div class="flex gap-5 items-center mb-4 for-you-header">
            <h2 class="text-xl font-bold">For you</h2>
            <a href="#" class="flex justify-center items-center">
                <span class="text-[#666]">See all</span>
                <img class="w-4 h-4" src="src/assets/images/navigate_next.png" alt="icon-navigate-next">
            </a>
        </div>
        <div class="flex gap-4 justify-center items-center for-you-items">
            <a class="w-auto h-auto" href="#">
                <img src="src/assets/images/prev.png" alt="Previous">
            </a>
            <div class="border rounded-md p-4 for-you-item">
                <img src="src/assets/images/coin.png" alt="Item Image" class="w-full h-40 object-cover mb-4 rounded-md">
                <h3 class="text-lg font-bold">coin</h3>
                <p>$500</p>
            </div>
            <div class="border rounded-md p-4 for-you-item">
                <img src="src/assets/images/coin.png" alt="Item Image" class="w-full h-40 object-cover mb-4 rounded-md">
                <h3 class="text-lg font-bold">coin</h3>
                <p>$500</p>
            </div>
            <div class="border rounded-md p-4 for-you-item">
                <img src="src/assets/images/coin.png" alt="Item Image" class="w-full h-40 object-cover mb-4 rounded-md">
                <h3 class="text-lg font-bold">coin</h3>
                <p>$500</p>
            </div>
            <div class="border rounded-md p-4 for-you-item">
                <img src="src/assets/images/coin.png" alt="Item Image" class="w-full h-40 object-cover mb-4 rounded-md">
                <h3 class="text-lg font-bold">coin</h3>
                <p>$500</p>
            </div>
            <a class="w-auto h-auto" href="#">
                <img src="src/assets/images/next.png" alt="Next">
            </a>
        </div>
    </section>

    <!-- Online Auctions -->
    <section class="container mx-auto py-8">
        <div class="flex gap-5 items-center mb-4 online-header">
            <h2 class="text-xl font-bold">Online Auctions</h2>
            <a href="#" class="flex justify-center items-center">
                <span class="text-[#666]">See all</span>
                <img class="w-4 h-4" src="src/assets/images/navigate_next.png" alt="icon-navigate-next">
            </a>
        </div>
        <div class="flex gap-4 justify-center items-center online-items">
            <a class="w-auto ml-4 md:ml-6 lg:ml-8" href="#">
                <img src="src/assets/images/prev.png" alt="Previous">
            </a>
            <div class="border rounded-md p-4 w-full md:w-[45%] lg:w-[30%] online-item">
                <div class="flex w-full h-40 mb-4 rounded-md">
                    <img src="src/assets/images/picture1.png" alt="Auction Image"
                        class="w-3/5 h-full object-cover rounded-l-md">
                    <div class="flex flex-col w-2/5 h-full">
                        <img src="src/assets/images/picture2.png" alt="Auction Image"
                            class="w-full h-1/2 object-cover rounded-tr-md">
                        <img src="src/assets/images/picture3.png" alt="Auction Image"
                            class="w-full h-1/2 object-cover rounded-br-md">
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-lg font-bold">Clock</h3>
                        <p>$200</p>
                    </div>
                    <div class="ml-auto w-6 h-6">
                        <img src="src/assets/images/view.png" alt="View Icon">
                    </div>
                </div>
            </div>
            <div class="border rounded-md p-4 w-full md:w-[45%] lg:w-[30%] online-item">
                <div class="flex w-full h-40 mb-4 rounded-md">
                    <img src="src/assets/images/picture1.png" alt="Auction Image"
                        class="w-3/5 h-full object-cover rounded-l-md">
                    <div class="flex flex-col w-2/5 h-full">
                        <img src="src/assets/images/picture2.png" alt="Auction Image"
                            class="w-full h-1/2 object-cover rounded-tr-md">
                        <img src="src/assets/images/picture3.png" alt="Auction Image"
                            class="w-full h-1/2 object-cover rounded-br-md">
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-lg font-bold">Clock</h3>
                        <p>$200</p>
                    </div>
                    <div class="ml-auto w-6 h-6">
                        <img src="src/assets/images/view.png" alt="View Icon">
                    </div>
                </div>
            </div>
            <a class="w-auto mr-4 md:mr-6 lg:mr-8" href="#">
                <img src="src/assets/images/next.png" alt="Next">
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#F4F4F4] w-full">
        <div class="flex py-8 items-center justify-center shadow responsive-section">
            <div class="w-2/3 text-center content">
                <p class="">Get notifications from your favorite auctioneers.</p>
            </div>
            <a class="flex gap-2">
                <img class="w-28 h-auto" src="src/assets/images/apple-ios-store.png" alt="Apple App Store">
                <img class="w-28 h-auto" src="src/assets/images/app_Google.png" alt="Google Play Store">
            </a>
        </div>

        <div class="bg-[#FBF6F4] w-full">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-8 py-6 footer-grid">
                <div class="px-12 py-8">
                    <h3 class="text-lg font-bold mb-4">Company</h3>
                    <ul>
                        <li><a href="#" class="text-gray-600">About</a></li>
                        <li><a href="#" class="text-gray-600">Auction Central News</a></li>
                        <li><a href="#" class="text-gray-600">Careers</a></li>
                        <li><a href="#" class="text-gray-600">Get Help</a></li>
                        <li><a href="#" class="text-gray-600">Send Feedback</a></li>
                    </ul>
                </div>
                <div class="px-12 py-8">
                    <h3 class="text-lg font-bold mb-4">Winning</h3>
                    <ul>
                        <li><a href="#" class="text-gray-600">Auction Calendar</a></li>
                        <li><a href="#" class="text-gray-600">Auction House Directory</a></li>
                        <li><a href="#" class="text-gray-600">Auction Price Results</a></li>
                        <li><a href="#" class="text-gray-600">Auctions Near Me</a></li>
                        <li><a href="#" class="text-gray-600">How Auctions Work</a></li>
                    </ul>
                </div>
                <div class="px-12 py-8">
                    <h3 class="text-lg font-bold mb-4">Selling</h3>
                    <ul>
                        <li><a href="#" class="text-gray-600">Auctioneer Sign-In</a></li>
                        <li><a href="#" class="text-gray-600">Become a Seller</a></li>
                        <li><a href="#" class="text-gray-600">Consign an Item</a></li>
                        <li><a href="#" class="text-gray-600">Seller Resource Center</a></li>
                        <li><a href="#" class="text-gray-600">Seller Reviews</a></li>
                        <li><a href="#" class="text-gray-600">Why Sell</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-center items-center gap-8 border-b-2 border-white p-4 md:p-6 icon-footer">
                <a href="#"><img class="w-30 h-30" src="src/assets/images/fb.png" alt="Facebook"></a>
                <a href="#"><img class="w-30 h-30" src="src/assets/images/pt.png" alt="Pinterest"></a>
                <a href="#"><img class="w-30 h-30" src="src/assets/images/linked.png" alt="LinkedIn"></a>
                <a href="#"><img class="w-30 h-30" src="src/assets/images/youtube.png" alt="YouTube"></a>
                <a href="#"><img class="w-30 h-30" src="src/assets/images/ins.png" alt="Instagram"></a>
            </div>
            <div class="flex flex-col gap-5 items-center justify-center mt-8 px-8">
                <p class="text-center text-gray-600 text-sm">© 2002-2024 LiveAuctioneers. All Rights Reserved. Cookie
                    PolicyTerms and ConditionsIntellectual PropertyPrivacy Policy</p>
                <p class="text-center text-gray-600 text-sm">This site is protected by reCAPTCHA and the Google Terms of
                    Service and Privacy Policy apply.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-600"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-600"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="text-gray-600"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-gray-600"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-gray-600"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>