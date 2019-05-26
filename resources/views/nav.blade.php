<nav class="flex items-center justify-between flex-wrap bg-blue-700 p-6">
    <div class="flex items-center justify-center flex-shrink-0 text-white mr-6">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="30px" height="30px" class=""><g><g><g><path d="M326,256c-5.52,0-10,4.48-10,10c0,5.52,4.48,10,10,10c5.52,0,10-4.48,10-10C336,260.48,331.52,256,326,256z" data-original="#000000" class="active-path" data-old_color="#F7F7F7" fill="#FFFFFF"/></g></g><g><g><path d="M416,416h-11.946l-32.555-182.521C365.439,200.174,336.472,176,302.62,176h-93.24c-33.858,0-62.822,24.175-68.875,57.513    L107.946,416H96c-16.542,0-30,13.458-30,30v40c0,5.522,4.477,10,10,10h360c5.522,0,10-4.478,10-10v-40    C446,429.458,432.542,416,416,416z M160.189,237.056C164.508,213.267,185.196,196,209.38,196h93.24    c24.181,0,44.873,17.268,49.195,41.025L383.738,416H128.262L160.189,237.056z M426,476H86v-30c0-5.514,4.486-10,10-10    c22.473,0,306.383,0,320,0c5.514,0,10,4.486,10,10V476z" data-original="#000000" class="active-path" data-old_color="#F7F7F7" fill="#FFFFFF"/></g></g><g><g><path d="M358.239,384.213l-14.67-80.75c-0.987-5.436-6.202-9.044-11.626-8.052c-5.435,0.987-9.039,6.192-8.052,11.626l14.67,80.75    c0.994,5.476,6.242,9.036,11.626,8.052C355.622,394.852,359.227,389.646,358.239,384.213z" data-original="#000000" class="active-path" data-old_color="#F7F7F7" fill="#FFFFFF"/></g></g><g><g><path d="M502,256h-86c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h86c5.522,0,10-4.478,10-10C512,260.478,507.522,256,502,256    z" data-original="#000000" class="active-path" data-old_color="#F7F7F7" fill="#FFFFFF"/></g></g><g><g><path d="M96,256H10c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h86c5.523,0,10-4.478,10-10C106,260.478,101.523,256,96,256z" data-original="#000000" class="active-path" data-old_color="#F7F7F7" fill="#FFFFFF"/></g></g><g><g><path d="M432.781,89.219c-3.906-3.904-10.236-3.904-14.143,0l-56.57,56.57c-3.905,3.905-3.905,10.237,0,14.143    c3.907,3.905,10.236,3.904,14.143,0l56.57-56.57C436.687,99.456,436.687,93.124,432.781,89.219z" data-original="#000000" class="active-path" data-old_color="#F7F7F7" fill="#FFFFFF"/></g></g><g><g><path d="M149.932,145.789l-56.57-56.57c-3.906-3.904-10.237-3.905-14.143,0c-3.905,3.905-3.905,10.237,0,14.143l56.57,56.57    c3.907,3.905,10.237,3.905,14.143,0C153.837,156.027,153.837,149.695,149.932,145.789z" data-original="#000000" class="active-path" data-old_color="#F7F7F7" fill="#FFFFFF"/></g></g><g><g><path d="M256,16c-5.522,0-10,4.478-10,10v80c0,5.522,4.478,10,10,10c5.522,0,10-4.478,10-10V26C266,20.478,261.522,16,256,16z" data-original="#000000" class="active-path" data-old_color="#F7F7F7" fill="#FFFFFF"/></g></g></g> </svg>

        <span class="font-semibold text-xl tracking-tight ml-4">Politie</span>
    </div>

    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>

    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            @if(Auth::check())
                <a href="/logout" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Uitloggen
                </a>
            @else
                <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Login
                </a>
            @endif
        </div>
    </div>
</nav>