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
            var formula = toFixed( (peso) / (altura*2), 1);
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
});
function toFixed(num, fixed) {
    var re = new RegExp('^-?\\d+(?:\.\\d{0,' + (fixed || -1) + '})?');
    return num.toString().match(re)[0];
}