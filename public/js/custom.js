$(function() {
    $('.imc-form .borrar input').on('click', function(e){
        e.preventDefault();
        $('#imc_peso').val("");
        $('#imc_altura').val("");

        $('.imc-resultado ul li').css('display','none');
        $('#imc_res').html("");
    });
	$('.imc-form .calcular input').on('click', function(e){
		e.preventDefault();
        if($('input[name="imc-type"]:checked').val() == 'metrico'){
            var peso   = $('#imc_peso').val();
            var altura = $('#imc_altura').val();
            var formula = toFixed( (peso) / (altura*2), 1);
        }else{
            var peso   = $('#imc_peso').val();
            var altura = $('#imc_altura').val();
            altura = altura * 12;
            var formula = toFixed( (peso*703) / (altura*altura), 1);
        }
        var message = "";
        $('.imc-resultado ul li').each(function(i,v){
            var min = parseFloat( $( v ).attr('data-min') );
            var max = parseFloat( $( v ).attr('data-max') );
            if( formula >= min && formula <= max){
                $( v ).css('display','block');
            }else{
                $( v ).css('display','none');
            }
        });
		$('#imc_res').html( formula );
	});
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var f_pos = ($('footer').offset().top)-500;
        
        if(scroll > 55 && scroll < f_pos){
            $('.float_contact').addClass('show');
        }else{
            $('.float_contact').removeClass('show');
        }
    });
	$('#imc_peso,#imc_altura').keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    $('.imc-form .radio_cont').on('click', function(){
        console.log( "CLICKED RADIO" );
        $('#imc_altura').val("");
        $('#imc_peso').val("");
        if($(this).find('input').val() == 'metrico'){
            $('#imc_altura').attr( 'placeholder' , $('#imc_altura').attr('data-metric') );
            $('#imc_peso').attr( 'placeholder' , $('#imc_peso').attr('data-metric') );
        }else{
            $('#imc_altura').attr( 'placeholder' , $('#imc_altura').attr('data-imperial') );
            $('#imc_peso').attr( 'placeholder' , $('#imc_peso').attr('data-imperial') );
        }
    });
    $(".modal_map").on("click", function(e) {
        e.preventDefault();
        var lat = $(this).attr('data-lat');
        var lng = $(this).attr('data-lng');
        if( (lng == undefined) ){ lat = 0; }
        if( (lat == undefined) ){ lng = 0; }
        $('#mapmodal').modal('show');
        var point = new google.maps.LatLng(parseFloat( lat ), parseFloat( lng ) );
        var map = new google.maps.Map( document.querySelector('#mapmodal .maps') , {
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoom: 13,
            center: point
        });
        var marker = new google.maps.Marker({ position: point, map: map, icon: 'http://www.google.com/intl/en_us/mapfiles/ms/icons/red-dot.png' });
        google.maps.event.trigger(map, 'resize');
    });
    $(".modal_image").on("click", function(e) {
        e.preventDefault();
        $('#imagepreview').attr('src', $(this).find('img').attr('src') ); // here asign the image to the modal when the user click the enlarge link
        $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
    });
});
function toFixed(num, fixed) {
    var re = new RegExp('^-?\\d+(?:\.\\d{0,' + (fixed || -1) + '})?');
    return num.toString().match(re)[0];
}