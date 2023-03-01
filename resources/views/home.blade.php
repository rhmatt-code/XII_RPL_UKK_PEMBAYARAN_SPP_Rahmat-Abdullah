@extends('layouts.master')

@section('title', 'Home')

@include('layouts.navbar')

<div class="p-4 sm:ml-64">
    <div class="p-4 bg-white dark:border-gray-700 transition-transform">
      <div class="flex">
         <div class="">
            <svg aria-hidden="true" class="w-11 h-11 mr-2 text-violet-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
         </div>
         <p class="text-4xl mb-5 text-left text-gray-900 dark:text-white ">Dashboard</p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 ms:grid-cols-4 gap-4 mb-5">
         <a class="uk-animation-slide-right block max-w-sm p-3 h-20 bg-white border-2 border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
         <div class="flex">   
            <svg class="mt-1 mr-1 h-10 text-violet-700 dark:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
               <path d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z"></path>
               <path d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z"></path>
               <path d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z"></path>
             </svg>
            <div>
               <h5 class="text-base tracking-tight text-gray-900 dark:text-white">Siswa</h5>
               <p class="font-bold text-base text-gray-700 dark:text-gray-400">{{$siswa->count()}}</p>
            </div>
         </div>
         </a>
         <a class="block uk-animation-slide-right max-w-sm p-3 h-20 bg-white border-2 border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
         <div class="flex">
            <svg class="mt-1 mr-1 h-10 text-violet-700 dark:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M4.5 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5h16.5a.75.75 0 000-1.5h-.75V3.75a.75.75 0 000-1.5h-15zM9 6a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm-.75 3.75A.75.75 0 019 9h1.5a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM9 12a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H9zm3.75-5.25A.75.75 0 0113.5 6H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM13.5 9a.75.75 0 000 1.5H15A.75.75 0 0015 9h-1.5zm-.75 3.75a.75.75 0 01.75-.75H15a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zM9 19.5v-2.25a.75.75 0 01.75-.75h4.5a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-4.5A.75.75 0 019 19.5z"></path>
             </svg>
               <div >
                  <h5 class="text-base tracking-tight text-gray-900 dark:text-white">Kelas</h5>
                  <p class="font-bold text-base text-gray-700 dark:text-gray-400">{{$kelas->count()}}</p>
               </div>
         </div>
         </a>
         <a class="block uk-animation-slide-right max-w-sm p-3 h-20 bg-white border-2 border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
         <div class="flex">
            <svg class="mt-1 mr-1 h-10 text-violet-700 dark:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
               <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
               <path clip-rule="evenodd" fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"></path>
               <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
             </svg>
            <div>
               <h5 class="text-base tracking-tight text-gray-900 dark:text-white">SPP</h5>
               <p class="font-bold text-base text-gray-700 dark:text-gray-400">{{$spp->count()}}</p>
            </div>
         </div>
         </a>
         <a class="block uk-animation-slide-right max-w-sm p-3 bg-white border-2 border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
         <div class="flex">
            <svg class="mt-1 mr-1 h-10 text-violet-700 dark:text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M7.5 5.25a3 3 0 013-3h3a3 3 0 013 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0112 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 017.5 5.455V5.25zm7.5 0v.09a49.488 49.488 0 00-6 0v-.09a1.5 1.5 0 011.5-1.5h3a1.5 1.5 0 011.5 1.5zm-3 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"></path>
               <path d="M3 18.4v-2.796a4.3 4.3 0 00.713.31A26.226 26.226 0 0012 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 01-6.477-.427C4.047 21.128 3 19.852 3 18.4z"></path>
             </svg>
            <div>
               <h5 class="text-base tracking-tight text-gray-900 dark:text-white">Petugas</h5>
               <p class="text-base font-bold text-gray-700 dark:text-gray-400">{{$petugas->count()}}</p>
            </div>
         </div>
         </a>
       </div>
       <div class="flex flex-col border-2 border-gray-200 h-72 rounded bg-gray-50 dark:bg-gray-800">      
         <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="uk-animation-slide-right w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
               <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                        <th scope="col" class="px-6 py-3">
                           Nama Siswa
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Kelas dan Jurusan
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Tagihan SPP
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                           No Telepon
                        </th>
                  </tr>
               </thead>
               <tbody>
               @foreach ($siswa as $data)   
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           {{$data->nama}}
                        </th>
                        <td class="px-6 py-4">
                           {{$data->kelas->nama_kelas}} - {{$data->kelas->kompetensi_keahlian}}
                        </td>
                        <td class="px-6 py-4">
                           {{$data->spp->tahun}} Tahun - {{currency_IDR($data->spp->nominal)}}
                        </td>
                        <td class="px-6 py-4">
                           {{$data->alamat}}
                        </td>
                        <td class="px-6 py-4">
                           {{$data->no_telp}}
                        </td>
                  </tr>
               @endforeach
               </tbody>
            </table>
         </div>
       </div>
    </div>
    <footer class="p-4 bg-white border-2 border-gray-200 rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800">
      <span class="text-sm sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Rahmat™</a>. 
      </span>
   </footer>
</div>

@include('auth.login') 




