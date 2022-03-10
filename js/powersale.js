var mon_const = {
    'T': {
        '1': 1.85,
        '2': 1,
        '3': 2.38,
        '4': 2.32,
        '5': 3.35,
        '6': 3.14,
        '7': 3.82,
        '8': 4.11,
        '9': 4.16,
        '10': 4.09,
        '11': 2.84,
        '12': 2.53,
    },
    'C': {
        '1': 10.01,
        '2': 8.26,
        '3': 10.91,
        '4': 10.57,
        '5': 11.67,
        '6': 11.34,
        '7': 12.03,
        '8': 11.92,
        '9': 11.48,
        '10': 11.78,
        '11': 10.96,
        '12': 11.06,
    },
    'K': {
        '1': 1.82,
        '2': 1.14,
        '3': 2.26,
        '4': 2.22,
        '5': 3.33,
        '6': 3.49,
        '7': 4.02,
        '8': 4.25,
        '9': 4.31,
        '10': 3.82,
        '11': 2.72,
        '12': 2.23,
    },
};

$(document).ready(function () {
    $('#nextbtn').on('click', function(){
        var form = $(this).closest('.needs-validation');
        var cost = $('#powercost').val();
        var usrtype = $('#usrtype').val();
        var calmon = $('#calmon').val();
        var type_const = mon_const[usrtype];
        var rate = cost / type_const[calmon];
        // $("input[id^='input']").val(cost * mon_const[calmon]);
        form.addClass('was-validated');

        if (form[0].checkValidity() === true) {
            console.log( form.serialize() );
            $("input[id^='input']").each(function(index){
                $(this).val(Math.round(type_const[index + 1] * rate ));
            });
            $("#scndcard").fadeIn("slow");
            $('html,body').animate({scrollTop:$('#scndcard').offset().top -100},0);
        }
    });
    $('#caltotal').on('click', function(){
        var pwsum = 0;
        var grnrate = $("select[name='rate']").val();
        var form_fst =  $("#fstform");
        var form = $(this).closest('.needs-validation');
        form.addClass('was-validated');

        if (form[0].checkValidity() === true && form_fst[0].checkValidity() === true) {
            console.log( $('#fstform, #scndform').serialize() );
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
            $.ajax({
                type: "POST",
                url: "test_ajax.php",
                data: $('#fstform, #scndform').serializeArray(),
                
                success: function(data) {
                    $("#res_status").text(data.MSG);
                    console.log(data.MSG);
                },
                error:  function(jqXHR) {
                    $("#rex_status").text("Error! status:" + jqXHR.status);
                    console.log("Error! status:" + jqXHR.status)
                }
            })
        }
    });
    $('#calreset').on('click', function(){
        $("#scndcard, #thrdcard").fadeOut(0);
        $('html,body').animate({scrollTop:$('#fstcard').offset().top -100},0);
    });
    
    
    $("button[data-toggle='collapse']").on('click',function(){
        if ($(this).hasClass("collapsed")){
            $(this).find("i").removeClass("bi-chevron-down");
            $(this).find("i").addClass("bi-chevron-up");            
        }else{
            $(this).find("i").removeClass("bi-chevron-up");
            $(this).find("i").addClass("bi-chevron-down");
        }
    });
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})