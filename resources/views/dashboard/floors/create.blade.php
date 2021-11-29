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
        <span class="text-lg font-bold uppercase ml-14 ">Add Floors</span>
      </label>

      <label class="block">
        <span class="font-bold text-gray-700">Property</span>
        <select class="block w-3/5 mt-1 form-select">
            @foreach ($post as $p)
        <option>{{ $p->type_name }}</option>
        @endforeach
      </select>
     </label>

  <div class="mt-4">
    <span class="font-bold text-gray-700">Name</span>
    <input class="block w-3/5 mt-1 form-input" placeholder="Name.." />
  </div>

  <div class="mt-4">
    <span class="font-bold text-gray-700">Floor Area</span>
    <input class="block w-3/5 mt-1 form-input" type="number" value="0" />
  </div>

  <div class="mt-4">
    <span class="font-bold text-gray-700">No. of Seats</span>
    <input class="block w-3/5 mt-1 form-input" type="number" value="0" />
  </div>

 <div
  class="relative inline-block w-10 mt-3 mr-2 align-middle transition duration-200 ease-in select-none "
 >
<span class="font-bold text-gray-700">Status</span>
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

<br><br><br><br><br><br><br><br>
<div class="float-right">
    <a class="inline-flex items-center h-10 px-5 m-2 text-sm text-black transition-colors duration-150 bg-transparent rounded-lg hover:no-underline focus:shadow-outline hover:bg-purple-700" href="../floors">Cancel</a>
    <button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
    Save Changes
  </button></div>
<br><br><br>
<div>

</div>
</div>

<br><br><br><br>


</form>

@endsection
