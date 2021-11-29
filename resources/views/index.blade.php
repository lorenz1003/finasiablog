@extends('layouts.app')


@section('content')
    <div class="background-image grid grid-cols-1 m-auto" style="background-image: url('https://i.ibb.co/hW8N3xb/header-banner.png');background-position: center center;background-repeat: no-repeat;    background-attachment: fixed;
    background-size: cover;
    height: 600px;
    ">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-left">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Let us show a <br> perspective of
                     <br>possibilities.
                </h1>
                <p class="sm:text-white text-xl">
                    You can count on FinAsia Land Development and Construction <br>
                     Corp. To not only meet, but exceed all your needs and requests.

                </p>
                {{--  <a href="/blog" class="text-center bg-blue-500 text-white-700 py-2 px-4 font-bold text-xl uppercase rounded-3xl" >
                    Read More
                </a>  --}}
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 w-25 mx-20 ml-20 pl-15 py-15 border-b border-gray-200">
        <div class="">
        <p>
            PROPERTY LISTINGS
        </p>
        <br>
        <h1 class="text-5xl font-bold">
            Run your <br>
            bussiness in style.
        </h1>
        </div>

        <div class="mt-8">
            <p class="text-gray-500 text-lg" style="line-height:2">
                FinAsia Land Development & Construction Corporation is composed of individuals who have vast experience in retail planning and lease marketing, catering to huge clients in the country such as Ayala Land and SM Malls.
            </p>
        </div>
    </div>


  {{-- <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="https://www.finasialand.net/uploads/properties/Ayala30thCorporateBuildingFinasia-Main-08-21-10-57-57.jpg" class="card-img-top" alt="...">
                    </div>
                      <div class="card-body">
                      <h5 class="card-title">Ayala 30th Corporate Center</h5>
                      <p class="card-text">Office <br> Pasig City</p>
                      <a href="#" class="btn btn-primary">Inquire Now</a>
                    </div>
                  </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="https://www.finasialand.net/uploads/properties/citadines-Building-Finasia-Main-08-21-11-20-29.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Citadanes Millenium Ortigas</h5>
                      <p class="card-text">Office <br> Pasig City</p>
                      <a href="#" class="btn btn-primary">Inquire Now</a>
                    </div>
                  </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;">
                    <div class="inner">
                        <img src="https://www.finasialand.net/uploads/properties/vertiv-Building-Finasia-1-09-06-10-01-38.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Robinsons Cybergate Plaza</h5>
                      <p class="card-text">Office <br> Mandaluyong City</p>
                      <a href="#" class="btn btn-primary">Inquire Now</a>
                    </div>
                  </div>
            </div>
        </div>

    </div> --}}

 <!-- This is an example component -->
 <div class="sm:grid grid-cols-3 gap-10 w-25 mx-auto ml-20 py-15 border-b border-gray-200 ">
    <div id="whoobe-3fery" class="w-full md:w-64 ml-15 justify-center items-center bg-gray-700 text-white shadow-lg rounded-lg flex flex-col">
        <img src="https://www.finasialand.net/uploads/properties/Ayala30thCorporateBuildingFinasia-Main-08-21-10-57-57.jpg" alt="img" title="img" class="w-full h-auto object-cover rounded-t-lg" id="whoobe-ixxe5">
            <div id="whoobe-1okdg" class="w-full p-4 justify-start flex flex-col">
                <h4 class="border-b-2 text-xl font-bold" id="whoobe-3mr7n">Ayala 30th Corporate Center</h4>
                <div class="my-4" id="whoobe-950fw">
                    <div class="mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" style="display:inline-block;" />

                          </svg>
                          <span class="text-lg">
                              Office
                          </span>
                        </div>
                    <br>
                    <br>
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6  inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" style="display:inline-block" />
                      </svg>

                        <p class="" style="display: inline-block;">
                            Pasig City
                        </p>

                </div>
                </div>
                <button value="button" class="my-4 px-4 py-2 text-white hover:bg-blue-700 rounded-3xl bg-white text-gray-700  hover:shadow hover:bg-blue-700 hover:text-white" id="whoobe-jkkr2">Inquire Now</button>
            </div>
    </div>
   </div>

   <div class="text-left bg-gray-800 text-white grid grid-cols-2 gap-20 mx-auto py-15 ">
    <div class="cols ml-20 pl-13">
        <p>Our Services</p>
        <h1 class="text-5xl font-bold">
            We provide end‑to‑end solutions.
        </h1>
    </div>

    <div class="cols float-right pt-5">
        <p class="text-2xl">
            We offer the highest quality of service to <br> ensure that you and your business is at <br> the top of the game
        </p>
    </div>

    <div class="ml-20 pl-13">
        <img src="https://www.finasialand.net/assets/img/icons/property_management.svg" class="pb-6 mb-3" alt="">
        <strong>
            <span class="text-2xl">Property Management</span>
        </strong>

            <p class="mt-5 pt-5 text-xl" style="line-height: 1.5">
                FinAsia Land Development and Construction Crop. is committed to getting the job done, especially when it comes to this service. You can count on us to be professional, timely, efficient and make sure you’re satisfied every step of the way.
            </p>
    </div>

    <div>
        <img src="https://www.finasialand.net/assets/img/icons/seat_leasing_management.svg"
        class="pb-6 mb-6" alt="">
        <strong>
            <span class="text-2xl mt-3">Seat Leasing Management
            </span>
        </strong>
        <p class="mt-5 pt-5 text-xl" style="line-height: 1.5">
            We have the experience and skills necessary to tackle <br>
            just about every type of job that comes our way. With <br>
            FinAsia Land Development and Construction Corp., clients <br>
            know exactly what to expect - professionalism, efficiency and exceptional results.
        </p>
    </div>

    <div>
        <img src="https://www.finasialand.net/assets/img/icons/safety_and_security.svg"
        class="ml-20 pl-13 pb-6 mb-6" alt="">
        <strong>
            <span class="text-2xl ml-13 pl-20">
                Safety and Security
            </span>
        </strong>
        <p class="mt-5 pt-5 text-xl ml-20 pl-13" style="line-height: 1.5">
            FinAsia Land Development and Construction Crop. is committed to getting the job done, especially when it comes to this service. You can count on us to be professional, timely, efficient and make sure you’re satisfied every step of the way.
        </p>
    </div>

    <div>
        <img src="https://www.finasialand.net/assets/img/icons/retail_planning.svg"
        class="pb-5 mb-5" alt="">
        <strong>
            <span class="text-2xl">
                Retail Planning & Services
            </span>
        </strong>
        <p class="mt-5 pt-5 text-xl" style="line-height: 1.5">
            FinAsia Land Development and Construction Corp. helps<br>
            you to provide a schedule workflows, manage costs, <br>
            resources and successfully handle your retail plan on time <br>
            and within budget. We maximize your company’s profits, <br>
            a solid grasp of both the retail industry and mathematical <br>
            business statistics is absolutely vital for success
        </p>
    </div>
</div>





    <div class="text-center py-15">
        <span class="uppercase text-xl text-gray-800 font-extrabold">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Post
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
        </p>
    </div>

    @php
    use Illuminate\Support\Facades\DB;
    $post = DB::table('posts')->orderBy('updated_at','DESC')->first();
    @endphp
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    {{ $post->name }}
                </span>

                <h3 class="text-xl font-bold py-10">
                    {{--  Desc  --}}
                    <p>
                        {{ $post->description }}
                    </p>
                </h3>
                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More In Here
                </a>
            </div>
        </div>
        {{--  Image  --}}


        <img src="{{ asset('images/'. $post->image_path) }}" alt="">
    </div>

@endsection
