@extends('layouts.master')

@section('title', 'Home')

@include('layouts.navbar')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
       <div class="grid grid-cols-2 md:grid-cols-4 ms:grid-cols-4 gap-4 mb-5">
         <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex mb-4 justify-center">
               <svg class="flex-shrink h-8 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
               <h5 class="text-2xl h-8 font-bold tracking-tight text-gray-900 dark:text-white">Student</h5>
            </div>
            <p class="text-center font-bold text-gray-700 dark:text-gray-400">100</p>
         </a>
         <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex mb-4 justify-center">
               <ion-icon class="flex-shrink h-8 dark:text-white" name="man-outline"></ion-icon>
               <h5 class="text-2xl h-8 font-bold tracking-tight text-gray-900 dark:text-white">Man</h5>
            </div>
            <p class="text-center font-normal text-gray-700 dark:text-gray-400">100</p>
         </a>
         <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex mb-4 justify-center">
               <ion-icon class="flex-shrink h-8 dark:text-white" name="woman-outline"></ion-icon>
               <h5 class="text-2xl h-8 font-bold tracking-tight text-gray-900 dark:text-white">Woman</h5>
            </div>
            <p class="text-center font-normal text-gray-700 dark:text-gray-400">100</p>
         </a>
         <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex mb-4 justify-center">
               <svg class="flex-shrink h-8 dark:text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"></path>
                </svg>
               <h5 class="text-2xl h-8 font-bold tracking-tight text-gray-900 dark:text-white">Officer</h5>
            </div>
            <p class="text-center font-normal text-gray-700 dark:text-gray-400">100</p>
         </a>
       </div>
       <div class="flex flex-col h-72 rounded bg-gray-50 dark:bg-gray-800">      
         <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
               <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                        <th scope="col" class="px-6 py-3">
                           Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Action
                        </th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                           Sliver
                        </td>
                        <td class="px-6 py-4">
                           Laptop
                        </td>
                        <td class="px-6 py-4">
                           $2999
                        </td>
                        <td class="px-6 py-4">
                           <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           Microsoft Surface Pro
                        </th>
                        <td class="px-6 py-4">
                           White
                        </td>
                        <td class="px-6 py-4">
                           Laptop PC
                        </td>
                        <td class="px-6 py-4">
                           $1999
                        </td>
                        <td class="px-6 py-4">
                           <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                     </th>
                     <td class="px-6 py-4">
                        White
                     </td>
                     <td class="px-6 py-4">
                        Laptop PC
                     </td>
                     <td class="px-6 py-4">
                        $1999
                     </td>
                     <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                     </td>
               </tr>
                  <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">
                           Black
                        </td>
                        <td class="px-6 py-4">
                           Accessories
                        </td>
                        <td class="px-6 py-4">
                           $99
                        </td>
                        <td class="px-6 py-4">
                           <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                  </tr>
                  <tr class="bg-white dark:bg-gray-800">
                     <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                     </th>
                     <td class="px-6 py-4">
                        Black
                     </td>
                     <td class="px-6 py-4">
                        Accessories
                     </td>
                     <td class="px-6 py-4">
                        $99
                     </td>
                     <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                     </td>
               </tr>
               <tr class="bg-white dark:bg-gray-800">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     Magic Mouse 2
                  </th>
                  <td class="px-6 py-4">
                     Black
                  </td>
                  <td class="px-6 py-4">
                     Accessories
                  </td>
                  <td class="px-6 py-4">
                     $99
                  </td>
                  <td class="px-6 py-4">
                     <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  </td>
            </tr>
               </tbody>
            </table>
         </div>
       </div>

       <!-- Login modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
   <div class="relative w-full h-full max-w-md md:h-auto">
       <!-- Modal content -->
       <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
           <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
               <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               <span class="sr-only">Close modal</span>
           </button>
           <div class="px-6 py-6 lg:px-8">
               <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
               <form class="space-y-6" action="#">
                   <div>
                       <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                       <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                   </div>
                   <div>
                       <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                       <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                   </div>
                   <div class="flex justify-between">
                       <div class="flex items-start">
                           <div class="flex items-center h-5">
                               <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                           </div>
                           <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                       </div>
                       <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                   </div>
                   <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                   <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                       Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div> 





