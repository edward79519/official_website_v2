$(document).ready(function () {
    $('#nextbtn').on('click', function(){
        var cost = $('#powercost').val();
        $("input[id^='input']").val(cost);
        $("#scndcard").fadeIn("slow");
        $('html,body').animate({scrollTop:$('#scndcard').offset().top -100},0);
    });
    $('#caltotal').on('click', function(){
        var pwsum = 0;
        var grnrate = $("select[name='rate']").val();
        $("input[id^='input']").each(function(){
            var pwcost = parseInt($(this).val());
            pwsum += pwcost;
        });
        carbon = pwsum * grnrate * 0.509 / 1000
        tree = carbon/9.9
        $("#carbon").text(carbon.toFixed(2));
        $("#tree").text(tree.toFixed(2));
        $("#thrdcard").fadeIn("slow");
        $('html,body').animate({scrollTop:$('#thrdcard').offset().top -100},0);
    });
    $('#calreset').on('click', function(){
        $("#scndcard, #thrdcard").fadeOut(0);
        $('html,body').animate({scrollTop:$('#fstcard').offset().top -100},0);
    });
});