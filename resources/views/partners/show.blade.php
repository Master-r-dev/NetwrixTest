<x-layout>
  <div id="loading">
    <img id="loading-image" src="{{asset('/images/loader.gif')}}" alt="Loading..." />
  </div>
  <div id="show_partn" class="m-auto ">
    <x-card class="p-10 ">
      <div class="flex flex-col items-center justify-center text-center">
        <img id="img-nw-p2"
          src="{{$partner->logo ? $partner->logo : asset('/images/netwrix_p.png')}}" alt="" />
        <h3 class="text-2xl font-bold mb-2">
          {{$partner->company}}
        </h3>
        <div class="text-xl  mb-4">{{$partner->status}}</div>
        <div class="p_address">
          <i class="fa-solid fa-location-dot"></i> {{$partner->address}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div> 
          <div class="text-lg space-y-6"> 
            <a href="tel:{{$partner->phone}}"
              class="block bg-black text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                class="fa-solid fa-phone"></i>
              Phone </a>
            <a href="{{$partner->website}}" target="_blank"
              class="block bg-black text-white py-2 rounded-xl hover:opacity-80 p-6" ><i class="fa-solid fa-globe" ></i>
              Website </a>
          </div>
        </div>
      </div>
    </x-card>
  </div>
  <script>
    window.addEventListener('load', (e) => {
      document.getElementById("loading").style.display = "none";
    });
  </script>
</x-layout>