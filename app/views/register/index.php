<div class="py-[140px]">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="hidden lg:block lg:w-1/2 bg-cover">
            <img src="<?= BASEURL; ?>/img/imgLogin.jpg" alt="" style="height: auto;">
        </div>
        <div class="w-full p-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Registration New Member</h2>
            <p class="text-xl text-gray-600 text-center font-medium"> Library OK</p>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" />
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" />
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password" />
            </div>
            <div class="mt-8">
                <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Register</button>
                <!-- <button class="bg-red-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-red-600"><a href="<?= BASEURL ?>/login">Cancel</a></button> -->
            </div>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>
                <a href="<?= BASEURL; ?>/login" class="text-xs text-gray-500 uppercase">or sign up</a>
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
        </div>
    </div>
</div>
</body>

</html>