@extends('layouts.app_details')


@section('content')

<div class="content-center pb-5 pl-5 mt-6 ml-18 container-xl">
    <span class="mt-2 mb-6 text-2xl font-bold tracking-wider text-gray-700 uppercase">Floors TABLE</span>
    <a href="floors/create_floors" class="float-right px-4 py-1 font-bold text-white uppercase bg-blue-500 rounded hover:bg-blue-700">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
          </svg>
        </span>
        Add Floors
    </a>
<br>
<br>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                      Property
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                      Floors
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                      Floor Area(sqm)
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                      Seats
                    </th>
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Status
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Action
                      </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr class="text-center">
                    <td class="px-6 py-4 text-center whitespace-nowrap">
                      <div class="flex text-center">
                        <div class="flex-shrink-0 w-10 h-10 mt-1 text-center">
                            Ayala 30th Corporate Center
                        </div>
                       </div>
                    </td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">
                      <div class="text-sm text-center ">21st Floor</div>
                    </td>
                    <td class="px-6 py-4 text-center whitespace-nowrap">
                     2583.00
                    </td>
                    <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                      520
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                            Active
                          </span>
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                      </td>
                  </tr>

                  <!-- More people... -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
