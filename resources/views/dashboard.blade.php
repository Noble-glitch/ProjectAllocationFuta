@extends('layout.app')

@section('content')
<x:notify::notify />
<!-- Main content header -->
          <div
            class="flex flex-col items-start justify-between pb-6 space-y-4 border-b lg:items-center lg:space-y-0 lg:flex-row"
          >
            <h1 class="text-2xl font-semibold whitespace-nowrap">Dashboard</h1>

          </div>

          <!-- Start Content -->
            <div class="grid grid-cols-1 gap-5 mt-6 sm:grid-cols-2 lg:grid-cols-4">
              <!-- <template x-for="i in 4" :key="i"> -->
                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:bg-red-100">
                  <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                      <span class="text-gray-400">Registered Students</span>
                      <span class="text-lg font-semibold">8,221</span>
                    </div>
                    <div class="p-10 bg-gray-200 rounded-md"></div>
                  </div>
                  <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">85%</span>
                    <span>02-05-2024</span>
                  </div>
                </div>
                </a>

                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:bg-red-100">
                  <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                      <span class="text-gray-400">Available Examiners</span>
                      <span class="text-lg font-semibold">2,121</span>
                    </div>
                    <div class="p-10 bg-gray-200 rounded-md"></div>
                  </div>
                  <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">92%</span>
                    <span>02-05-2024</span>
                  </div>
                </div>
                </a>

                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:bg-red-100">
                  <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                      <span class="text-gray-400">Total Students</span>
                      <span class="text-lg font-semibold">9,221</span>
                    </div>
                    <div class="p-10 bg-gray-200 rounded-md"></div>
                  </div>
                  <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">100%</span>
                    <span>02-05-2024</span>
                  </div>
                </div>
                </a>
                


                <a href="#" class="text-indigo-600 hover:text-indigo-900">
                <div class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg hover:bg-red-100">
                  <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                      <span class="text-gray-400">Total Examiners</span>
                      <span class="text-lg font-semibold">2,221</span>
                    </div>
                    <div class="p-10 bg-gray-200 rounded-md"></div>
                  </div>
                  <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">100%</span>
                    <span>02-05-2024</span>
                  </div>
                </div>
                </a>
                
              <!-- </template> -->
            </div>

            <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->
            <h3 class="mt-6 text-xl">ADMIN</h3>
            <div class="flex flex-col mt-6">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <div class="overflow-hidden border-b border-gray-200 rounded-md shadow-md">
                    <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                          >
                            Name
                          </th>
                          <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                          >
                            Title
                          </th>
                          <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                          >
                            Status
                          </th>
                          <th
                            scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase"
                          >
                            Role
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        <template x-for="i in 10" :key="i">
                          <tr class="transition-all hover:bg-gray-100 hover:shadow-lg">
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                  <img
                                    class="w-10 h-10 rounded-full"
                                    src="https://avatars0.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                    alt=""
                                  />
                                </div>
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">Ahmed Kamel</div>
                                  <div class="text-sm text-gray-500">ahmed.kamel@example.com</div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                              <div class="text-sm text-gray-500">Optimization</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <span
                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full"
                              >
                                Active
                              </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">Admin</td>
                            <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                              <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                          </tr>
                        </template>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection