@extends('layouts.master')

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
               <svg class="flex-shrink h-8 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
               <h5 class="text-2xl h-8 font-bold tracking-tight text-gray-900 dark:text-white">Man</h5>
            </div>
            <p class="text-center font-normal text-gray-700 dark:text-gray-400">100</p>
         </a>
         <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex mb-4 justify-center">
               <svg class="flex-shrink h-8 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
               <h5 class="text-2xl h-8 font-bold tracking-tight text-gray-900 dark:text-white">Women</h5>
            </div>
            <p class="text-center font-normal text-gray-700 dark:text-gray-400">100</p>
         </a>
         <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex mb-4 justify-center">
               <svg class="flex-shrink h-8 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
               <h5 class="text-2xl h-8 font-bold tracking-tight text-gray-900 dark:text-white">Worker</h5>
            </div>
            <p class="text-center font-normal text-gray-700 dark:text-gray-400">100</p>
         </a>
       </div>
       <div class="flex-auto rounded bg-gray-50 dark:bg-gray-800">      
         <div class="relative overflow-auto shadow-md sm:rounded-lg">
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
