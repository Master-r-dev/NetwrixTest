<x-layout>
  @include('partials._hero')
  <div id="main_div_c" class="lg:grid  gap-4 space-y-4 md:space-y-0 mx-4">

    @unless(count($partners) == 0)

    @foreach($partners as $partner)
    <x-partner-card :partner="$partner" />
    @endforeach

    @else
    <h1 class="text-black" value="ERR_connection" >Database is not connected.Set it up and refresh</h1>
    @endunless
    <h1 id="no-results" class="text-center bold " ></h1>
  </div>
  <script>
    $(window).on('load',function() {
      $('#loading').hide();
    });
    $(function(){
     $("#type").select2();
     $("#country").select2();
     $("#state").select2();
     $("#country").change(function () {
          var val = $(this).val();
          $("#state").val(null);
          $('#state option:eq(0)').prop('selected', true).trigger('change.select2')
          if (val == "US") {//226
              $("#state").prop('disabled', false);              
              $(`#state option[data='226']`).prop('disabled', false);
              $(`#state option[data='38']`).prop('disabled', true);
              $(`#state option[data='98']`).prop('disabled', true);
          } else if (val == "IN") {//98
              $("#state").prop('disabled', false);
              $(`#state option[data='98']`).prop('disabled', false);
              $(`#state option[data='226']`).prop('disabled', true);
              $(`#state option[data='38']`).prop('disabled', true);
          } else if (val == "CA") {//38
              $("#state").prop('disabled', false);
              $(`#state option[data='38']`).prop('disabled', false);
              $(`#state option[data='226']`).prop('disabled', true);
              $(`#state option[data='98']`).prop('disabled', true);
          } else  {
              $("#state").prop('disabled', 'disabled');
              $(`#state option[data='226']`).prop('disabled', false);
              $(`#state option[data='98']`).prop('disabled', false);
              $(`#state option[data='38']`).prop('disabled', false);
          }
      });
      $(`.select_n`).prop('disabled', true);
      $('#search_f').on('submit',function(){return false;});
      
      $("#country").change(function() {
        select();
      });
      $("#type").change(function() {
        select();
      });      
      $("#state").change(function() {
        select();
      });
      $("#search_f #search_b").on('click',function() {
        select();
      });
      select = function() {
        var type = $("#type").val();
        var country = $("#country").val();        
        var state = $("#state").val();
        var search = $("#search_q").val();
        search = search ? search.toLowerCase() : 0;
        type  = type  ? type.toLowerCase() : 0;
        country = country ? country.toLowerCase() : 0;
        state = state ? state.toLowerCase() : 0;
        console.log(search,type,country,state);
        $(".p_content").hide();
        var boxes = $(".p_content").filter(function() {
          partner=$(this).children().first();
          return (!country || partner.attr("data-c").toLowerCase().indexOf(country) >= 0) &&            
            (!state || partner.attr("data-s").toLowerCase().indexOf(state) >= 0) &&
            (!type || partner.attr("data-type").toLowerCase().indexOf(type) >= 0 ) &&
            (!search || partner.attr("data-t").toLowerCase().indexOf(search) >= 0 || partner.attr("data-a").toLowerCase().indexOf(search) >= 0 )
        });
        console.log(boxes);
        boxes.fadeIn();//fadeIn()
        if (boxes.length == 0){
          $(`#no-results`).text('Your search parameters did not match any partners. Please try different search.')
        }
        else{
          $(`#no-results`).text('');
        }
      }      
    }); 
    
   </script>
</x-layout>
