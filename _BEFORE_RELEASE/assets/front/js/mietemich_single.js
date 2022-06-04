// $("$400km")
// $("#500km")
// $("#3hour")


 $(document).ready(function(){
        generate_price();
        $('#km li').on('click',function(){
          var selected_km  = $(this).prop('id');
          $('#selected_km_value ').val(selected_km);
          generate_price();
        });
        $('#duration li').on('click',function(){
          var selected_duration = $(this).prop('id');
          $('#selected_duration_value').val(selected_duration);
          generate_price();

        });

        function generate_price(){
          $('.price_diff').remove();
          var selected_duration =  $('#selected_duration_value').val();
          var selected_km   = $('#selected_km_value').val();
           selected_duration = selected_duration.replace('our','');

           if(selected_duration == "3h"){
             $("#400km").hide();
             $("#500km").hide();
           }else{
             $("#400km").show();
             $("#500km").show();
           }

           if(selected_km == '400km' || selected_km == '500km'){
            $("#3hour").hide();
           }else{
            $("#3hour").show();
           }









          var current_price = prices[selected_duration + selected_km];


  var km100  = prices[selected_duration+'100km']; 
  var km200  = prices[selected_duration+'200km']; 
  var km300  = prices[selected_duration+'300km'];
  var km400  = prices[selected_duration+'400km'];
  var km500  = prices[selected_duration+'500km'];
  
  var hour3  = prices['3h' +selected_km]; 
  var hour6  =  prices['6h'+selected_km]; 
  var hour9 = prices['9h'+selected_km];
  var hour12 = prices['12h'+selected_km];
  var hour24 = prices['24h'+selected_km];
  var hour48 = prices['48h'+selected_km];


if(current_price > hour3 ){
   $('#3hour').prepend('<span class="text-success float-right small price_diff">'+ ( hour3 - current_price) +' CHF</span>');

}else{
   $('#3hour').prepend('<span class="text-muted float-right small price_diff">'+ (hour3 - current_price) +' CHF</span>');
}
if(current_price > hour6 ){
   $('#6hour').prepend('<span class="text-success float-right small price_diff">'+ ( hour6 - current_price) +' CHF</span>');

}else{
   $('#6hour').prepend('<span class="text-muted float-right small price_diff">'+ (hour6 - current_price) +' CHF</span>');
}
if(current_price > hour9 ){
   $('#9hour').prepend('<span class="text-success float-right small price_diff">'+ ( hour9 - current_price) +' CHF</span>');

}else{
   $('#9hour').prepend('<span class="text-muted float-right small price_diff">'+ (hour9 - current_price) +' CHF</span>');
}
if(current_price > hour12 ){
   $('#12hour').prepend('<span class="text-success float-right small price_diff">'+ ( hour12 - current_price) +' CHF</span>');

}else{
   $('#12hour').prepend('<span class="text-muted float-right small price_diff">'+ (hour12 - current_price) +' CHF</span>');
}
if(current_price > hour24 ){
   $('#24hour').prepend('<span class="text-success float-right small price_diff">'+ ( hour24 - current_price) +' CHF</span>');

}else{
   $('#24hour').prepend('<span class="text-muted float-right small price_diff">'+ (hour24 - current_price) +' CHF</span>');
}
if(current_price > hour48 ){
   $('#48hour').prepend('<span class="text-success float-right small price_diff">'+ ( hour48 - current_price) +' CHF</span>');

}else{
   $('#48hour').prepend('<span class="text-muted float-right small price_diff">'+ (hour48 - current_price) +' CHF</span>');
}




if(current_price > km100 ){
   $('#100km').prepend('<span class="text-success float-right small price_diff">'+ ( km100 - current_price) +' CHF</span>');

}else{
   $('#100km').prepend('<span class="text-muted float-right small price_diff">'+ (km100 - current_price) +' CHF</span>');
}

if(current_price > km200 ){
   $('#200km').prepend('<span class="text-success float-right small price_diff">'+ (km200 - current_price) +' CHF</span>');

}else{
   $('#200km').prepend('<span class="text-muted float-right small price_diff">'+ (km200 - current_price) +' CHF</span>');
}

if(current_price > km300 ){
   $('#300km').prepend('<span class="text-success float-right small price_diff">'+ (km300 - current_price) +' CHF</span>');

}else{
   $('#300km').prepend('<span class="text-muted float-right small price_diff">'+ (km300 - current_price) +' CHF</span>');
}
if(current_price > km400 ){
   $('#400km').prepend('<span class="text-success float-right small price_diff">'+ (km400 - current_price) +' CHF</span>');
}else{
   $('#400km').prepend('<span class="text-muted float-right small price_diff">'+ (km400 - current_price) +' CHF</span>');
}
if(current_price > km500 ){
   $('#500km').prepend('<span class="text-success float-right small price_diff">'+ (km500 - current_price) +' CHF</span>');
}else{
   $('#500km').prepend('<span class="text-muted float-right small price_diff">'+ (km500 - current_price) +' CHF</span>');
}


$('#total_price').html('<strong>'+current_price+' CHF</strong>');


          // '<span class="text-success float-right small price_diff">-246 CHF</span>';
          // selected_km;
        }


                $('#send_request').on('click',function(e){
           var selected_duration =  $('#selected_duration_value').val();;
              var selected_km   = $('#selected_km_value').val();
              var selected_vehicle   = $('#selected_vehicle').val();
           selected_duration = selected_duration.replace('our','');
              
            e.preventDefault();
            window.location.replace(base_url + 'zu-vermieten-bekommen/miete-mich-taeglich/'+ selected_vehicle +'/'+ selected_km +'/'+ selected_duration);
        })




        // $('.selected_duration')
        // $('.selected_km')
      });