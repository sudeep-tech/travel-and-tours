  </div>
</main>
<div class="ttr-overlay"></div>
<!-- External JavaScripts -->
<script src="{{asset('vendor/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/counter/waypoints-min.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/counter/counterup.min.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/masonry/masonry.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/masonry/filter.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/scroll/scrollbar.min.js')}}"></script>
<script src="{{asset('vendor/assets/js/functions.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/chart/chart.min.js')}}"></script>
<script src="{{asset('vendor/assets/js/admin.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/calendar/moment.min.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/calendar/fullcalendar.js')}}"></script>
<!-- <script src="{{asset('vendor/assets/vendors/switcher/switcher.js')}}"></script> -->
<script>
  $(document).ready(function() {
    $('input[type="checkbox"]').on('change', function() {
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
});
    function readUrl(input, id){
					if(input.files && input.files[0]){
						var reader=new FileReader();
						reader.onload=function(e){
							$('#'+id).removeAttr('hidden');
							$('#'+id).attr('src',e.target.result);
						};
						reader.readAsDataURL(input.files[0]);
					}
				}
        $('#hotel_detail_select').on('change', function(){
    var hotel_details_id = $(this).val();
          var url='{{route("ajax-room-type")}}?hotel_details_id='+hotel_details_id;
         
    $.ajax({
        url: url,
        type: 'get',
        success: function(room_type){
            if(typeof(room_type) != 'object'){
                room_type = $.parseJSON(room_type);
            }
            $.each(room_type.data, function(index, value){
                        alert(value.room_type);
                    });
            if(room_type.status){
                if(room_type.data != ""){
                    
                    // $('#parent_cat_div').removeClass('col-sm-9').addClass('col-sm-5');
                    // $('#child_cat_div').removeClass('hidden');
                    var html = '<option value="" disabled selected>--Select Room Type--</option>';

                    $.each(room_type.data, function(index, value){
                        html += "<option value='"+value.id+"'>"+value.room_type+"</option>";
                    });
                    $('#room_type_select').html(html);

                } else {
                    // $('#parent_cat_div').removeClass('col-sm-5').addClass('col-sm-9');
                    // $('#child_cat_div').addClass('hidden');
                    var html = '<option value="" disabled selected>--Select Room Type--</option>';
                    $('#room_type_select').html(html);    
                }
            }
        }
    });
});

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2019-03-12',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-03-01'
        },
        {
          title: 'Long Event',
          start: '2019-03-07',
          end: '2019-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-03-11',
          end: '2019-03-13'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T10:30:00',
          end: '2019-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-03-28'
        }
      ]
    });

  });

  
</script>
</body>
</html>