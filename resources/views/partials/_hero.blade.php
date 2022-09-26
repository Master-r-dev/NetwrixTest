<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<div id="loading">
  <img id="loading-image" src="{{asset('/images/loader.gif')}}" alt="Loading..." />
</div>

<div id="bg-image">
<section id="start-sect" >  
  <div class="z-10">
    <h1 id="nw-h1"><span id="weird_break">Netwrix </span> Partner Locator</h1>
    <p id="nw-p">
      Hundreds of Netwrix partners <span id="weird_break">around </span>the world are standing by to help you. <br>  
      With our Partner Locator you can easily find the list of authorized <span id="weird_break">partners </span>in your area.
    </p>
    @include('partials._search')
    <div id="nw-options">      
      <select id="type" name="Type"  class="nw-option" >
        <option class="select_n"  value="">Type</option>
        @unless(count($statuses) == 0)

        @foreach($statuses as $status)
        <option class=" select_o text-black" value="{{$status->status}}">{{$status->status}}</option>
        @endforeach
    
        @else
        <option class=" select_o text-black" value="ERR_connection">Database is not connected.</option>
        @endunless
      </select>
      <select id="country" name="Country" class="nw-option">
        <option class="select_n"  value="">Country</option>
        
          @unless(count($countries) == 0)

        @foreach($countries as $country)
        <option class=" select_o text-black" data="{{$country->country_id}}" value="{{$country->short_name}}">{{$country->name}}</option>
        @endforeach
    
        @else
        <option class=" select_o text-black" value="ERR_connection">Database is not connected.</option>
        @endunless
        
      </select>
      <select id="state" name="State" disabled="disabled"class="nw-option">
        <option class="select_n"  value="">State</option>        
        @unless(count($states) == 0)

        @foreach($states as $state)
        <option class=" select_o text-black" data="{{$state->country_id}}" value="{{$state->short_name}}">{{$state->name}}</option>
        @endforeach

        @else
        <option class=" select_o text-black" value="ERR_connection">Database is not connected.</option>
        @endunless
      </select>
    </div>
  </div>
</section>
</div>
 