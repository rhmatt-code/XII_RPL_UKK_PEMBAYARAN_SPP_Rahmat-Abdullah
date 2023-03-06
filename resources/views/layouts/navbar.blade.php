  
<aside id="logo-sidebar" class="sidebar fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-hidden bg-white dark:bg-gray-800">
      <ul>
         <div class="px-8">
               <a href="{{route('home')}}" class="text-center ">
                  <span class="text-xl font-semibold dark:text-white">Pembayaran SPP</span>
               </a>
         </div>
      </ul>
      @if(Auth::guest())
      <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
         <li>
            @if (request()->routeIs('ceknisn'))
            <a class="flex items-center border-2  border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 bg-gray-200 rounded-lg dark:text-white" aria-disabled="true">
            <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
               <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
            </div>
               <span class="ml-3">Cek NISN & Tagihan</span>
            </a>
            @else
            <a href="{{route('ceknisn')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
               <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Cek NIS & Tagihan</span>
            </a>
            @endif
         </li>
      </ul>
      @elseif(Auth::user()->level == 'admin')
      <div class="mt-2 border-t border-gray-200 dark:border-gray-700 shadow-xl"></div>
      <ul class="pt-4 mt-2 space-y-2 ">
         <li>
         @if (request()->routeIs('home'))
         <a class="flex items-center border-2  border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 bg-gray-200 rounded-lg dark:text-white" aria-disabled="true">
         <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
            <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
         </div>
            <span class="ml-3">Dashboard</span>
         </a>
         @else
         <a href="{{route('home')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
            <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
            <span class="ml-3">Dashboard</span>
         </a>
         @endif
            
         </li>
         <li>
         @if (request()->routeIs('siswa'))
            <a class="flex items-center border-2 border-gray-200 shadow-sm p-2 m-2 text-base font-normal text-gray-900 rounded-lg dark:text-white bg-gray-200">
            <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z"></path>
                  <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z"></path>
                  <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z"></path>
                </svg>
            </div>
               <span class="flex-1 ml-3 whitespace-nowrap">Siswa</span>
            </a>
            @else
            <a href="{{route('siswa')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 m-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z"></path>
                  <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z"></path>
                  <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z"></path>
                </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Siswa</span>
            </a>
            @endif
         </li>
         <li>
            @if (request()->routeIs('petugas'))
            <a class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal rounded-lg dark:text-white bg-gray-200" >
            <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
                  <path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z"></path>
                </svg>
            </div>
               <span class="flex-1 ml-3 whitespace-nowrap">Petugas</span>
            </a>
            @else
            <a href="{{route('petugas')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
                  <path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z"></path>
                </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Petugas</span>
            </a>
            @endif   
         </li>
         <li>
            @if (request()->routeIs('kelas'))
            <a class="flex items-center border-2 border-gray-200 shadow-sm p-2 m-2 text-base font-normal rounded-lg dark:text-white bg-gray-200">
            <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M4.5 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5h16.5a.75.75 0 000-1.5h-.75V3.75a.75.75 0 000-1.5h-15zM9 6a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm-.75 3.75A.75.75 0 019 9h1.5a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM9 12a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm3.75-5.25A.75.75 0 0113.5 6H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM13.5 9a.75.75 0 000 1.5H15A.75.75 0 0015 9h-1.5zm-.75 3.75a.75.75 0 01.75-.75H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM9 19.5v-2.25a.75.75 0 01.75-.75h4.5a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-4.5A.75.75 0 019 19.5z"></path>
                </svg>
            </div>
               <span class="flex-1 ml-3 whitespace-nowrap">Kelas</span>
            </a>
            @else
            <a href="{{route('kelas')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 m-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M4.5 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5h16.5a.75.75 0 000-1.5h-.75V3.75a.75.75 0 000-1.5h-15zM9 6a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm-.75 3.75A.75.75 0 019 9h1.5a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM9 12a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm3.75-5.25A.75.75 0 0113.5 6H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM13.5 9a.75.75 0 000 1.5H15A.75.75 0 0015 9h-1.5zm-.75 3.75a.75.75 0 01.75-.75H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM9 19.5v-2.25a.75.75 0 01.75-.75h4.5a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-4.5A.75.75 0 019 19.5z"></path>
                </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Kelas</span>
            </a>
            @endif
         </li>
         <li>
            @if (request()->routeIs('spp'))
            <a class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal rounded-lg dark:text-white bg-gray-200">
            <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"></path>
                  <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
                </svg>
            </div>
               <span class="flex-1 ml-3 whitespace-nowrap">SPP</span>
            </a>
            @else
            <a href="{{route('spp')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"></path>
                  <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
                </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">SPP</span>
            </a>
            @endif
         </li>
         <li>
            @if (request()->routeIs('transaksi'))
            <a class="flex items-center border-2 border-gray-200 shadow-sm p-2 m-2 text-base font-normal rounded-lg dark:text-white bg-gray-200">
            <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M2.5 4A1.5 1.5 0 001 5.5V6h18v-.5A1.5 1.5 0 0017.5 4h-15zM19 8.5H1v6A1.5 1.5 0 002.5 16h15a1.5 1.5 0 001.5-1.5v-6zM3 13.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zm4.75-.75a.75.75 0 000 1.5h3.5a.75.75 0 000-1.5h-3.5z"></path>
                </svg>
            </div>
               <span class="flex-1 ml-3 whitespace-nowrap">Transaksi</span>
            </a>
            @else
            <a href="{{route('transaksi')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 m-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M2.5 4A1.5 1.5 0 001 5.5V6h18v-.5A1.5 1.5 0 0017.5 4h-15zM19 8.5H1v6A1.5 1.5 0 002.5 16h15a1.5 1.5 0 001.5-1.5v-6zM3 13.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zm4.75-.75a.75.75 0 000 1.5h3.5a.75.75 0 000-1.5h-3.5z"></path>
                </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Transaksi</span>
            </a>
            @endif
         </li>
         <li>
            @if (request()->routeIs('laporan'))
            <a class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal rounded-lg dark:text-white bg-gray-200">
            <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm7.75 9.75a.75.75 0 000-1.5h-4.5a.75.75 0 000 1.5h4.5z"></path>
                </svg>
            </div>
               <span class="flex-1 ml-3 whitespace-nowrap">Laporan</span>
            </a>
            @else
            <a href="{{route('laporan')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
               <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm7.75 9.75a.75.75 0 000-1.5h-4.5a.75.75 0 000 1.5h4.5z"></path>
                </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Laporan</span>
            </a>
            @endif
         </li>
         <li>
            @if (request()->routeIs('ceknisn'))
            <a class="flex items-center border-2  border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 bg-gray-200 rounded-lg dark:text-white" aria-disabled="true">
            <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
               <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
            </div>
               <span class="ml-3">Cek NISN & Tagihan</span>
            </a>
            @else
            <a href="{{route('ceknisn')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
               <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Cek NIS & Tagihan</span>
            </a>
            @endif
         </li>
      </ul>
      @else
      <div class="mt-2 border-t border-gray-200 dark:border-gray-700 shadow-xl"></div>
         <ul class="pt-4 mt-2 space-y-2 ">
            <li>
               @if (request()->routeIs('home'))
               <a class="flex items-center border-2  border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 bg-gray-200 rounded-lg dark:text-white" aria-disabled="true">
               <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
                  <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               </div>
                  <span class="ml-3">Dashboard</span>
               </a>
               @else
               <a href="{{route('home')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                  <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                  <span class="ml-3">Dashboard</span>
               </a>
               @endif
            </li>
            <li>
               @if (request()->routeIs('transaksi'))
               <a class="flex items-center border-2 border-gray-200 shadow-sm p-2 m-2 text-base font-normal rounded-lg dark:text-white bg-gray-200">
               <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
                  <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M4.5 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5h16.5a.75.75 0 000-1.5h-.75V3.75a.75.75 0 000-1.5h-15zM9 6a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm-.75 3.75A.75.75 0 019 9h1.5a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM9 12a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm3.75-5.25A.75.75 0 0113.5 6H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM13.5 9a.75.75 0 000 1.5H15A.75.75 0 0015 9h-1.5zm-.75 3.75a.75.75 0 01.75-.75H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM9 19.5v-2.25a.75.75 0 01.75-.75h4.5a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-4.5A.75.75 0 019 19.5z"></path>
                  </svg>
               </div>
                  <span class="flex-1 ml-3 whitespace-nowrap">Transaksi</span>
               </a>
               @else
               <a href="{{route('transaksi')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 m-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                  <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M4.5 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5h16.5a.75.75 0 000-1.5h-.75V3.75a.75.75 0 000-1.5h-15zM9 6a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm-.75 3.75A.75.75 0 019 9h1.5a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM9 12a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm3.75-5.25A.75.75 0 0113.5 6H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM13.5 9a.75.75 0 000 1.5H15A.75.75 0 0015 9h-1.5zm-.75 3.75a.75.75 0 01.75-.75H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM9 19.5v-2.25a.75.75 0 01.75-.75h4.5a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-4.5A.75.75 0 019 19.5z"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Transaksi</span>
               </a>
               @endif
            </li>
            <li>
               @if (request()->routeIs('laporan'))
               <a class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal rounded-lg dark:text-white bg-gray-200">
               <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
                  <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                     <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"></path>
                     <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
                  </svg>
               </div>
                  <span class="flex-1 ml-3 whitespace-nowrap">Laporan</span>
               </a>
               @else
               <a href="{{route('laporan')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                  <svg class="flex-shrink-0 w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                     <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"></path>
                     <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Laporan</span>
               </a>
               @endif
            </li>
            <li>
               @if (request()->routeIs('ceknisn'))
               <a class="flex items-center border-2  border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 bg-gray-200 rounded-lg dark:text-white" aria-disabled="true">
               <div class="bg-white border-2 border-gray-200 shadow-sm rounded">
                  <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               </div>
                  <span class="ml-3">Cek NISN & Tagihan</span>
               </a>
               @else
               <a href="{{route('ceknisn')}}" class="flex items-center border-2 border-gray-200 shadow-sm p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-300 ease-in-out">
                  <svg aria-hidden="true" class="w-6 h-6 text-violet-700 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                  <span class="ml-3">Cek NIS & Tagihan</span>
               </a>
               @endif
            </li>
         </ul>
   </div>
      @endif
   </div>
</aside>
@if (Auth::guest())
<div class="p-4 sm:ml-64">
   <div class="flex items-center justify-between p-4 border-2 border-gray-200 border rounded-lg bg-white dark:border-gray-700 transition-transform uk-animation-slide-right">
      <div class="flex items-center">
         <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="items-center text-sm  rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
      </div> 
      <div class="flex items-center">
         <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
            <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
         </a>
      </div>
   </div>
</div>
@elseif (Auth::user())
<div class="p-4 sm:ml-64">
   <div class="flex items-center justify-between shadow-sm p-4 border-2 border-gray-200 border rounded-lg bg-white dark:border-gray-700 transition-transform uk-animation-slide-right">
      <div class="flex items-center">
         <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="items-center text-sm  rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
      </div> 
      <div class="flex items-center">
         <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="mr-2 flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 " type="button">{{Auth::user()->nama_petugas}} <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
               <div class="py-2">
                  <a href="{{route('logout')}}" class="flex block p-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><svg aria-hidden="true" class="ml-2 flex-shrink-0 w-6 h-6  transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>Sign out</a>
               </div>
            </div>
      </div>
   </div>
</div>
@endif
