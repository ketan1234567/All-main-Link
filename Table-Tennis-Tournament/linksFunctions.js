//JSON Serialize
(function ($) {
    $.fn.serializeFormJSON = function () {

        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            }
            else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
})(jQuery);


	// Tree Plantation Volunteer Start

	$('#carrom_tournament').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
	$('#submit').prop('disabled', false);
		
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : "api.php",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Thank You!", "Best wishes for the carrom tournament!", "success");
                    $("#carrom_tournament")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
					$("#carrom_tournament")[0].reset();
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
				swal("Error", textStatus, errorThrown);
                
            }
        });
        e.preventDefault(); //STOP default action
    });
	
		$('#tennis_tournament').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
	$('#submit').prop('disabled', false);
		
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : "api.php",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Thank You!", "Best wishes for the Tennis tournament !", "success");
                    $("#tennis_tournament")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
					$("#tennis_tournament")[0].reset();
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
				swal("Error", textStatus, errorThrown);
                
            }
        });
        e.preventDefault(); //STOP default action
    });
	
	
	// Tree Plantation Volunteer End