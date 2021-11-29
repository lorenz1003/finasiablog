@extends('layouts.app_details')


@section('content')
<!-- Required form plugin -->
<link
  href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css"
  rel="stylesheet"
/>
<script>
    const checked = '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
      </svg>'
    const wrong = '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
      </svg>'

</script>
{{--  Image Preview  --}}
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<style>
    /* CHECKBOX TOGGLE SWITCH */
    /* @apply rules for documentation, these do not work as inline style */
    .toggle-checkbox:checked {
      @apply: right-0 border-green-400;
      right: 0;
      border-color: #68d391;
    }
    .toggle-checkbox:checked + .toggle-label {
      @apply: bg-green-400;
      background-color: #68d391;
    }
  </style>
<form
    action="/details"
    method="POST"
    enctype="multipart">
    @csrf

<div class="container pt-12 mt-5 text-left border-8 rounded-md shadow-md pl-52" >
    <label class="block">
        <span class="text-lg font-bold uppercase ml-14 ">Details</span>
      </label>

      <label class="block">
    <span class="font-bold text-gray-700">Name</span>
    <input class="block w-3/5 mt-1/5 form-input " placeholder="Name.." />
  </label>

  <div class="mt-4">
    <span class="font-bold text-gray-700">City</span>
    <input class="block w-3/5 mt-1 form-input" placeholder="City.." />
  </div>

  <label class="block mt-4">
    <span class="font-bold text-gray-700">Address</span>
    <textarea
    class="block w-3/5 mt-1 form-textarea"
    rows="3"
    placeholder="Address.."></textarea>
  </label>

  <label class="block">
    <span class="font-bold text-gray-700">Type</span>
    <select class="block w-3/5 mt-1 form-select">
        @foreach ($Type as $type)
    <option>{{ $type->type_name }}</option>
    <optionCommercial</option>
    @endforeach
  </select>
 </label>

 <div
  class="relative inline-block w-10 mt-3 mr-2 align-middle transition duration-200 ease-in select-none "
 >
<span class="font-bold text-gray-700">Publish</span>
  <input
    type="checkbox"
    name="toggle"
    id="toggle"
    class="absolute block w-6 h-6 bg-white border-4 rounded-full appearance-none cursor-pointer toggle-checkbox"
    value="0"
  />
  <label
    for="toggle"
    class="block h-6 overflow-hidden bg-gray-300 rounded-full cursor-pointer toggle-label"
    value="1"
  ></label>
</div>




  <label class="block mt-5 mb-3">
    <span class="text-lg font-bold text-gray-700 uppercase">About Property</span>
  </label>

  <label class="block">
    <span class="font-bold text-gray-700">Title</span>
    <input class="block w-3/5 mt-1 form-input" placeholder="Title.." />
  </label>

  <label class="block">
    <span class="font-bold text-gray-700">Description</span>
    <textarea
    class="block w-3/5 mt-1 form-textarea"
    rows="3"
    placeholder="Descrption.."></textarea>
  </label>

  <label class="block">
    <span class="font-bold text-gray-700">Google Map</span>
    <input class="block w-3/5 mt-1 form-input" placeholder="Google Map.." />
  </label>

  {{--  <span class="font-bold text-gray-700">Image</span>
  <div x-data="showImage()" class="items-center block mt-1 mb-5 ">
    <div class="bg-white rounded-lg shadow-xl md:w-9/12 lg:w-1/2">
        <div class="m-4">
            <label class="inline-block mb-2 text-gray-500">Upload
                Image(jpg,png)</label>
            <div class="flex items-center justify-center w-full">
                <label
                    class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                    <div class="relative flex flex-col items-center justify-center pt-7">
                        <img id="preview" class="absolute inset-0 w-full h-32">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                            Select a photo</p>
                    </div>
                    <input type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                </label>
            </div>
        </div>
</div>

</div>  --}}
<div>

</div>



<br><br><br>
<div class="mb-2 ml-96">
    <a class="inline-flex items-center h-10 px-5 m-2 text-sm text-black transition-colors duration-150 bg-transparent rounded-lg hover:no-underline focus:shadow-outline hover:bg-purple-700" href="../floors">Cancel</a>
    <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
    Save Changes
  </button></div>
</div>
<br><br><br><br><br><br>
<script>
    function showImage() {
        return {
            showPreview(event) {
                if (event.target.files.length > 0) {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("preview");
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
        }
    }
</script>





</form>

@endsection
