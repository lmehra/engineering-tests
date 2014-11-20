$(document).ready(function(){

    $('.datepicker').datepicker();

    $('.timepicker').timepicker();

});

$(document).on("click",".alert",function(){
    $(this).slideUp('slow');
});

$(document).on("click",".take_offer",function(){
    var ele = $("input[name='offer_id']"),
        offer_id = $(this).data('offer');

    ele.val(offer_id);
});