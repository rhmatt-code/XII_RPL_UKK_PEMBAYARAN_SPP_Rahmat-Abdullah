@extends('layouts.datatable')

@extends('layouts.navbar')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        
            <button id="triggerElement" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hide alert</button>

            <div id="targetElement" class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">Data sudah ada</span> Silahkan di cek kembali.
            </div>
          </div>
        
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            <h5 class="font-bold">Class Data</h5>
            <a href="#" data-modal-target="add-student" data-modal-toggle="add-student"><p class="text-right font-semibold mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Add data Class</p></a>
        </caption>
        <div class="relative overflow-x-auto h-auto w-auto ">
            <table class="w-full table-auto text-sm text-left text-gray-500 dark:text-gray-400" id="table">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID Kelas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Kelas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kompetensi Keahlian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Edit
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelas as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$data->id_kelas}}
                        </th>
                        <td class="px-6 py-4">
                            {{$data->nama_kelas}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->kompetensi_keahlian}}
                        </td>
                        <td class="px-6 py-4 text-left">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Student --}}
<div id="add-student" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="add-student">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="text-center mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Kelas</h3>
                <form class="space-y-6" action="{{route('addclass')}}" method="POST">
                    @csrf
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div>
                        <label for="nama_kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kelas</label>
                        <input type="text" name="nama_kelas" id="nama_kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="10" required>
                    </div>
                    <div>
                        <label for="kompetensi_keahlian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kompetensi Keahlian</label>
                        <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" placeholder="Rekayasa Perangkat Lunak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </div>
                </div>   
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Student</button>
                
            </div>
        </div>
    </div>
</div> 

<script>
    
</script>