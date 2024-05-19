$(window).on('load', function() {
    setTimeout(() => { 
    // console.log('sip')
    
    $('#logo').addClass('muncul')
    
    
}, 2200);

$('.form').each(function(i) {
    setTimeout(() => {
        $('.form').eq(i).addClass('atas')
    }, 300 * (i+1));
});
});