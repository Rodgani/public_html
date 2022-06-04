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
              var selected_duration =  $('#selected_duration_value').val();;
              var selected_km   = $('#selected_km_value').val();
              selected_duration = selected_duration.replace('onth','');
              var current_price = prices[selected_duration + selected_km];

              var km850  = prices[selected_duration+'850km']; 
              var km1250 = prices[selected_duration+'1250km']; 
              var km1850 = prices[selected_duration+'1850km'];
              var km3250 = prices[selected_duration+'3250km'];

              var month3  = prices['3m' +selected_km]; 
              var month6 =  prices['6m'+selected_km]; 
              var month12 = prices['12m'+selected_km];
              var month24 = prices['24m'+selected_km];
              var month36 = prices['36m'+selected_km];

            if(current_price > month3 ){
               $('#3month').prepend('<span class="text-success float-right small price_diff">'+ ( month3 - current_price) +' CHF</span>');

            }else{
               $('#3month').prepend('<span class="text-muted float-right small price_diff">'+ (month3 - current_price) +' CHF</span>');
            }

            if(current_price > month6 ){
               $('#6month').prepend('<span class="text-success float-right small price_diff">'+ ( month6 - current_price) +' CHF</span>');

            }else{
               $('#6month').prepend('<span class="text-muted float-right small price_diff">'+ (month6 - current_price) +' CHF</span>');
            }

            if(current_price > month12 ){
               $('#12month').prepend('<span class="text-success float-right small price_diff">'+ ( month12 - current_price) +' CHF</span>');

            }else{
               $('#12month').prepend('<span class="text-muted float-right small price_diff">'+ (month12 - current_price) +' CHF</span>');
            }


            if(current_price > month24 ){
               $('#24month').prepend('<span class="text-success float-right small price_diff">'+ ( month24 - current_price) +' CHF</span>');

            }else{
               $('#24month').prepend('<span class="text-muted float-right small price_diff">'+ (month24 - current_price) +' CHF</span>');
            }

            if(current_price > month36 ){
               $('#36month').prepend('<span class="text-success float-right small price_diff">'+ ( month36 - current_price) +' CHF</span>');

            }else{
               $('#36month').prepend('<span class="text-muted float-right small price_diff">'+ (month36 - current_price) +' CHF</span>');
            }
            if(current_price > km850 ){
               $('#850km').prepend('<span class="text-success float-right small price_diff">'+ ( km850 - current_price) +' CHF</span>');

            }else{
               $('#850km').prepend('<span class="text-muted float-right small price_diff">'+ (km850 - current_price) +' CHF</span>');
            }

            if(current_price > km1250 ){
               $('#1250km').prepend('<span class="text-success float-right small price_diff">'+ (km1250 - current_price) +' CHF</span>');

            }else{
               $('#1250km').prepend('<span class="text-muted float-right small price_diff">'+ (km1250 - current_price) +' CHF</span>');
            }

            if(current_price > km1850 ){
               $('#1850km').prepend('<span class="text-success float-right small price_diff">'+ (km1850 - current_price) +' CHF</span>');

            }else{
               $('#1850km').prepend('<span class="text-muted float-right small price_diff">'+ (km1850 - current_price) +' CHF</span>');
            }
            if(current_price > km3250 ){
               $('#3250km').prepend('<span class="text-success float-right small price_diff">'+ (km3250 - current_price) +' CHF</span>');
            }else{
               $('#3250km').prepend('<span class="text-muted float-right small price_diff">'+ (km3250 - current_price) +' CHF</span>');
            }


            $('#total_price').html('<strong>'+current_price+' CHF</strong>');

        }

        $('#send_request').on('click',function(e){
           var selected_duration =  $('#selected_duration_value').val();;
              var selected_km   = $('#selected_km_value').val();
              var selected_vehicle   = $('#selected_vehicle').val();
            e.preventDefault();
            window.location.replace(base_url + 'abonnieren/autoabo/'+ selected_vehicle +'/'+ selected_km +'/'+ selected_duration);
        })




      });