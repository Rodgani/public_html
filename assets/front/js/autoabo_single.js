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
              selected_duration = selected_duration.replace('onth','');
              var current_price = prices[selected_duration + selected_km];

              if (current_price === 0) {
                  window.location.href = location.protocol + '//' + location.host + location.pathname;
                  return;
              }

              var km850  = prices[selected_duration+'850km']; 
              var km1250 = prices[selected_duration+'1250km']; 
              var km1850 = prices[selected_duration+'1850km'];
              var km3250 = prices[selected_duration+'3250km'];

              var month3  = prices['3m' +selected_km]; 
              var month6 =  prices['6m'+selected_km]; 
              var month12 = prices['12m'+selected_km];
              var month24 = prices['24m'+selected_km];
              var month36 = prices['36m'+selected_km];

              if (month3 === 0) {
                  $('#3month').hide();
              } else {
                  $('#3month').show();
              }
              if (month6 === 0) {
                  $('#6month').hide();
              } else {
                  $('#6month').show();
              }
              if (month12 === 0) {
                  $('#12month').hide();
              } else {
                  $('#12month').show();
              }
              if (month24 === 0) {
                  $('#24month').hide();
              } else {
                  $('#24month').show();
              }
              if (month36 === 0) {
                  $('#36month').hide();
              } else {
                  $('#36month').show();
              }

            $('#3month').prepend('<span class="' + (current_price > month3 ? 'text-success' : 'text-muted') + ' float-right small price_diff">'+ (month3 - current_price) +' CHF</span>');

            $('#6month').prepend('<span class="' + (current_price > month6 ? 'text-success' : 'text-muted') + ' float-right small price_diff">'+ (month6 - current_price) +' CHF</span>');

            $('#12month').prepend('<span class="' + (current_price > month12 ? 'text-success' : 'text-muted') + ' float-right small price_diff">'+ (month12 - current_price) +' CHF</span>');

            $('#24month').prepend('<span class="' + (current_price > month24 ? 'text-success' : 'text-muted') + ' float-right small price_diff">'+ (month24 - current_price) +' CHF</span>');

            $('#36month').prepend('<span class="' + (current_price > month36 ? 'text-success' : 'text-muted') + ' float-right small price_diff">'+ (month36 - current_price) +' CHF</span>');

            const km850Diff = km850 === 0 ? 0 : km850 - current_price;
            $('#850km').prepend('<span class="' + (0 > km850Diff ? 'text-success' : 'text-muted') + ' float-right small price_diff">'+ km850Diff +' CHF</span>');

            const km1250Diff = km1250 === 0 ? 0 : km1250 - current_price;
            $('#1250km').prepend('<span class="' + (0 > km1250Diff ? 'text-success' : 'text-muted') + ' float-right small price_diff">'+ km1250Diff +' CHF</span>');

            const km1850Diff = km1850 === 0 ? 0 : km1850 - current_price;
            $('#1850km').prepend('<span class="' + (0 > km1850Diff ? 'text-success' : 'text-muted') + ' float-right small price_diff">'+ km1850Diff +' CHF</span>');

            const km3250Diff = km3250 === 0 ? 0 : km3250 - current_price;
            $('#3250km').prepend('<span class="' + (0 > km3250Diff ? 'text-success' : 'text-muted') + ' float-right small price_diff">'+ km3250Diff +' CHF</span>');


            $('#total_price').html('<strong>'+current_price+' CHF</strong>');

        }

        $('#send_request').on('click',function(e){
           var selected_duration =  $('#selected_duration_value').val();;
              var selected_km   = $('#selected_km_value').val();
              var selected_vehicle   = $('#selected_vehicle').val();
            e.preventDefault();
            window.location.href = base_url + 'abonnieren/autoabo/'+ selected_vehicle +'/'+ selected_km +'/'+ selected_duration;
        })




      });
