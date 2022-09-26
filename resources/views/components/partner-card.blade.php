@props(['partner'])

<x-card >
  <div class="flex p_content_m1" data-t="{{$partner->company}}" data-a="{{$partner->address}}"  data-type="{{$partner->status}}"
   data-c="{{$partner->countries_covered}}" data-s="{{$partner->states_covered}}" >
    <img class="img-nw-p1"
      src="{{$partner->logo ? $partner->logo : asset('/images/netwrix_p.png')}}" alt="" />
    <div class="p_content_m2">
      <div class="nw_card_c1">
        <br>
        <h3 class="text-2xl font-bold "> 
          <a href="/partners/{{$partner->id}}" target="_blank" class="p_title">{{$partner->company}}</a>
        </h3>
        <br>
        <p class=" p_address" > {{$partner->address}}</p>
      </div> 
      <div class="nw_card_c2">
         <br>
         <a class="web_nw" href="{{$partner->website}}" target="_blank">Website</a>
         <br><br>
         <a href="tel:{{$partner->phone}}">{{$partner->phone}}</a>         
      </div> 
      <div class="nw_card_c3">
        <br>
        <p>{{$partner->status}}</p>
       </div>    
    </div>
  </div>
</x-card>