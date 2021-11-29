@extends('layouts.app_details')


@section('content')
protected $redirectTo = 'logout';

<div class="content-center pb-5 pl-5 ml-18 container-xl">

    <span class="mt-5 text-2xl font-bold tracking-wider text-gray-700">BLOG TABLE</span>
        <div class="flex flex-col mt-3 text-center w-5/5">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div
                  class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg"
                >
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th
                          scope="col"
                          class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase "
                        >
                          Title
                        </th>
                        <th
                          scope="col"
                          class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase "
                        >
                          Name
                        </th>
                        <th
                          scope="col"
                          class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase "
                        >
                          Description
                        </th>
                        <th
                          scope="col"
                          class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase "
                        >
                          Date Created
                        </th>
                        <th
                          scope="col"
                          class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase "
                        >
                          Image
                        </th>
                        <th
                          scope="col"
                          class="px-6 py-3 text-xs font-bold tracking-wider text-left text-gray-500 uppercase">
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($posts as $post)

                        <tr>
                          <td>{{ $post->title }}</td>
                          <td>{{ $post->name }}</td>
                          <td>{{ $post->description }}</td>
                          <td>{{ $post->created_at->todatestring() }}</td>
                          <td><img class="w-20 transform motion-safe:hover:scale-110" src="{{ asset('images/'. $post->image_path) }}" alt=""></td>
                          <td>
                               <span style="align-items: center; display:flex">
                            <a
                            href="/dashboard/{{ $post->slug }}/edit"
                            class="inline-block pb-1 ml-3 italic text-gray-700 border-b-2 i hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                              </svg>
                          </a>
                          <form
                        action="/dashboard/{{ $post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="pr-3 ml-3"
                            type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 hover:text-gray-700" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                              </svg>
                        </button>
                    </form>
                </span>
                          </td>

                        </tr>
                        @endforeach

                      <!-- More people... -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



        {{--  Table Cards  --}}
<br><br><br>
{{--  {{--
        <div class="row">
            <div class="col-12">
              <div class="card" style="width: 1115px">
                <div class="card-header">
                  <h3 class="card-title text-bold">Card/Building Table</h3>

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">


                      <div class="input-group-append">

                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body " style="position:right: 0px;">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Date Created</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($posts as $post)
                        <tr>
                          <td>{{ $post->id }}</td>
                          <td>{{ $post->name }}</td>
                          <td>{{ $post->title }}</td>
                          <td>{{ $post->created_at }}</td>
                          <td>{{ $post->description }}</td>
                          <td>{{ $post->image_path }}</td>

                        </tr>
                        @endforeach


                    </tbody>
                    <tfoot>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Date Created</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>







    </div>
--}}





@endsection
