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

const rootVar="https://itbusinessplus.net/PKT/";

//Submit SME_
$('#submitForm').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/sme-ijp-a/31/08/2021",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});


//Submit SME_
$('#submitForm2').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/sme-ijp-b/31/08/2021",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm2")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});

//Submit QA-PKT-15-09-2021
$('#submitForm').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/15/09/2021",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});

//Submit SME-IJP-PKT-22-09-2021
$('#submitForm2292021').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/sme-ijp-pkt/22/09/2021",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm2292021")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});


//Submit Vaccination
$('#submitForm3').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/vaccination",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm3")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});


//Submit Food
$('#submitFormFood').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/food-survey/23/10/2021",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitFormFood")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
}); 

//Submit ondirect Survey
$('#ondirectSurvey').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    
    // let params = new URL(document.location).searchParams;
    // let id = params.get("eid"); 
    // let name = params.get("ename"); 

    // data1.eid = id;
    // data1.ename = name;

    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/ondirect-survey/05/03/2023",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    // $("#ondirectSurvey")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
});
    


//Submit Travel
$('#submitFormTravel').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/travel-survey/25/10/2021",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitFormTravel")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});

//Submit QA IJP
$('#submitForm29102021').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/29/10/2021",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm29102021")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});

//Submit Food
$('#submitFormFFeed').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/food-feedback",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Your Feedback", "success");
                $("#submitFormFFeed")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});

//Submit Food
$('#submitForm01112021').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/mis-pkt/01/11/2021",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                window.location.reload();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});

//Submit QA IJP
$('#submitForm24112021').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/24/11/2021",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm24112021")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});


//Submit QA IJP
$('#submitForm24112021_2').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/24/11/2021/2",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm24112021_2")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});

//Submit QA PKT 01/02/2022

$('#submitForm01022022').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/01/02/2022",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm01022022")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});



//Submit QA PKT 02/02/2022 SET 1

$('#submitForm0202202201').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/02/02/2022_1",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("##submitForm0202202201")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});

//Submit QA PKT 02/02/2022 SET 1

$('#submitForm0202202202').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/02/02/2022_2",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm0202202202")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});
//Submit QA PKT 16/03/2022 SET 1

$('#submitForm1603202201').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/16/03/2022_1",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("##submitForm1603202201")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });

//Submit QA PKT 16/03/2022 SET 2

$('#submitForm1603202202').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/16/03/2022_2",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("##submitForm1603202202")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });
	
//Submit SME IJP PKT 22/03/2022 SET 1

$('#submitForm2203202201').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/22/03/2022_1",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("##submitForm2203202201")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });


//Submit SME IJP PKT 22/03/2022 SET 2

$('#submitForm2203202202').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/22/03/2022_2",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#submitForm2203202202")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });
	
//Submit Vote for your favorites 2022

$('#submitFormvoteforyourfavorites2022').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/26/03/2022_2",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Voting", "success");
                    $("#submitFormvoteforyourfavorites2022")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });	
	
//Submit Vote for your favorites Noida 2022

$('#submitFormvoteforyourfavoritesNoida2022').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/12/04/2022_2",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Voting", "success");
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });	
	
	//Submit PKT-Process-Trainer-IJP-SET1-22-04-2022 SET 1

$('#submitForm220420221').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/22/04/2022_1",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#submitForm2203202202")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });

//Submit QA PKT Women's Day 2022

$('#submitFormwomensday2022').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/womensday/2022",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitFormwomensday2022")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});



//Submit QA PKT Women's Day Attendance 2022

$('#submitFormwomensdayattendance2022').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/womensday/1032022",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#submitFormwomensdayattendance2022")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });



//Submit CDQA-PKT-17-05-2022

$('#CDQA-PKT-17-05-2022').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/cdqa/17052022",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#CDQA-PKT-17-05-2022")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });


//Submit DGE-PKT-17-05-2022

$('#DGE-PKT-17-05-2022').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/dge-ss/17052022",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#DGE-PKT-17-05-2022")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });
	
	
	
//Submit QA PKT SME 23/05/2022 SET 1

$('#sme-1-formsubmit-23052022').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/23/05/2022_1",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#sme-1-formsubmit-23052022")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});


//Submit QA PKT SME 23/05/2022 SET 2

$('#sme-set2-formsubmit-23052022').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/23/05/2022_2",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#sme-set2-formsubmit-23052022")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});




//Submit QA PKT 01/06/2022 Set-1

$('#submitForm01062022-SS-1').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/01/06/2022/1",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm01062022-SS-1")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});



//Submit QA PKT 01/06/2022 Set-2

$('#submitForm01062022-SS-2').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/01/06/2022/2",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm01062022-SS-2")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});








//Submit QA PKT 01/08/2022

$('#submitForm-01082022-SS').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/01/08/2022",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#submitForm-01082022-SS")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});





//Submit SME PKT 04/08/2022

$('#submitForm-04082022-SS').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/04/08/2022",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "All The Best!", "success");
                $("#submitForm-04082022-SS")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});



//Submit SME PKT 30/09/20221

$('#SME-IJP-PKT-30-09-2022').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/smepkt/3009",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "All The Best!", "success");
                $("#SME-IJP-PKT-30-09-2022")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});



//Submit MIS PKT 06/10/20221

$('#MIS-IJP-PKT-06-10-2022').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/mispkt/0610",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "All The Best!", "success");
                $("#MIS-IJP-PKT-06-10-2022")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});

//Submit Process Trainer PKT 31/10/20221

$('#PT-IJP-PKT-31-10-2022').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/ptpkt/3110",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "All The Best!", "success");
                $("#PT-IJP-PKT-31-10-2022")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});




//Submit QA PKT 09/11/2022

$('#QA-IJP-PKT-09-11-2022').submit(function (e) {
e.preventDefault();
e.stopPropagation();
var data1 = $(this).serializeFormJSON();
console.log(data1);
    $.ajax({
    url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/091122",
    type: "POST",
    data : data1,
        success:function(maindta)
        {
            if(maindta=='1')
            {
                swal("Submitted", "Thanks for Attempting Survey", "success");
                $("#QA-IJP-PKT-09-11-2022")[0].reset();
            }
            else
            {
                swal("Error", maindta, "error");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            alert('error');
        }
    });
    e.preventDefault(); //STOP default action
});


//Submit QA PKT 29/11/2022

$('#IJP-SME-VD-29-11-2022').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();

    if ( $.fn.valid !== undefined ) { 
        //$(this).valid() is a function
        if($(this).valid()===true){
            console.log("valid() function  exists.");
        }else{
            swal("Error", "Please fill the form without errors.", "error");
            return;
        }

    }
    else
    {
    //do not exist
    console.log("valid() function not exists.");
    }

    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/sme-pkt/291122",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#IJP-SME-VD-29-11-2022")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });


    //Submit QA PKT 09/11/2022

    $('#QA-IJP-PKT-01-12-2022').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
		$('#submit').prop('disabled', true);
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/sme-pkt/011222",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Submitted", "Thanks for Attempting Survey", "success");
                        $("#QA-IJP-PKT-01-12-2022")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
						$("#QA-IJP-PKT-01-12-2022")[0].reset();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });


        //Submit QA PKT 14/12/2022

    $('#IJP-QC-14-12-2022').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/qa-pkt/14122022",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Submitted", "Thanks for Attempting Survey", "success");
                        $("#IJP-QC-14-12-2022")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });
		
		
		        //Submit am-ops-ijp/06022023

    $('#AM-Operations-06-02-2023').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/am-ops-ijp/06022023",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Submitted", "Thank you for filling out your information! ", "success");
                        $("#AM-Operations-06-02-2023")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });


  //Submit ER-Executive-27-02-2023

    $('#ER-Executive-27-02-2023').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/er-executive-ijp/27022023",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Submitted", "Thank you for filling out your information! ", "success");
                        $("#ER-Executive-27-02-2023")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });
		
		
  //Submit Technical-Support-02-03-2023

    $('#Technical-Support-02-03-2023').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/technical-support-ijp/02032023",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Submitted", "Thank you for filling out your information! ", "success");
                        $("#Technical-Support-02-03-2023")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });


 //OPS IJP-PKT-Tech-Support-9-3-22

    $('#IJP-PKT-Tech-Support-9-3-23').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/ijp-ops-pkt/090323",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Submitted", "Thank you for filling out your information! ", "success");
                        $("#IJP-PKT-Tech-Support-9-3-23")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });




//Submit IJP-Others-PKT-09-03-2023

$('#IJP-Others-PKT-09-03-2023').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/ijp-others-pkt/090323",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#IJP-Others-PKT-09-03-2023")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });





//Submit IJP-QA-PKT-09-03-2023

$('#IJP-QA-PKT-09-03-2023').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/ijp-qa-pkt/090323",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#IJP-QA-PKT-09-03-2023")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });


//Submit IJP-ER-PKT-20-3-23

$('#ER-IJP-PKT-20-3-23').submit(function (e) {
	
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/er-ijp-pkt/20323",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#ER-IJP-PKT-20-3-23")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });


//Submit IJP-ER-PKT-20-3-23

$('#Sample-PKT-21-6-23').submit(function (e) {
	
    e.preventDefault();
    e.stopPropagation();
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/sample-ijp-pkt/21623",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#Sample-PKT-21-6-23")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });






// Code start for Chess Tournament 
    $('#chess-tournament-30-6-23').submit(function (e) {
		 e.preventDefault();
        e.stopPropagation();
        	$('#submit').prop('disabled', true);
			console.log('done');
       
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/chess-tournament/30623",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Thank You!", "Thank You for Registration", "success");
                        $("#chess-tournament-30-6-23")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
						$("#chess-tournament-30-6-23")[0].reset();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });
        
// Code End for Chess Tournament 


//Submit QA-SME-09-07-2023

    $('#QA-SME-09-07-2023').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/qa-sme-ijp/10072023",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Submitted", "Thank you for filling out your information! ", "success");
                        $("#QA-SME-09-07-2023")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });
		
		
		//IJP-SME-13-07-2023

    $('#IJP-SME-13-07-2023').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/sme-ijp/13072023",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Submitted", "Thank you for filling out your information! ", "success");
                        $("#IJP-SME-13-07-2023")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });
		
		//IJP-DM-13-07-2023

    $('#IJP-DM-14-07-2023').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var data1 = $(this).serializeFormJSON();
        console.log(data1);
            $.ajax({
            url : rootVar+"dataApi/public/index.php/api/new/ijp-dm/14072023",
            type: "POST",
            data : data1,
                success:function(maindta)
                {
                    if(maindta=='1')
                    {
                        swal("Submitted", "Thank you for filling out your information! ", "success");
                        $("#IJP-DM-14-07-2023")[0].reset();
                    }
                    else
                    {
                        swal("Error", maindta, "error");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('error');
                }
            });
            e.preventDefault(); //STOP default action
        });
		
		//Submit PKT-SME-Q4-14-07-2023

$('#PKT-SME-Q4-14-07-2023').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();

    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/pkt-sme/140723",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#PKT-SME-Q4-14-07-2023")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });
	
	
	
	
	// Tree Plantation Volunteer Start

	$('#Tree-Plantation-Volunteer-18-07-23').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();
	$('#submit').prop('disabled', true);
	
		
    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/tree-plantation/180723",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Submitting Form", "success");
                   $("#Tree-Plantation-Volunteer-18-07-23")[0].reset();
                }
                else
                {
				
						
                    swal("Error", maindta, "error");
					 $("#Tree-Plantation-Volunteer-18-07-23")[0].reset();
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
				
            }
        });
        e.preventDefault(); //STOP default action
    });
	
	
	// Tree Plantation Volunteer End
	
	
	
	
		//Submit DNC-QA-27-07-2023

$('#DNC-QA-27-07-2023').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();

    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/DNC-QA/270723",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#DNC-QA-27-07-2023")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });
	
	//
	
	
		
		//Submit MIS-QA-02-08-2023

$('#MIS-TL-02-08-2023').submit(function (e) {
    e.preventDefault();
    e.stopPropagation();

    var data1 = $(this).serializeFormJSON();
    console.log(data1);
        $.ajax({
        url : rootVar+"dataApi/public/index.php/api/new/MIS-QA/020823",
        type: "POST",
        data : data1,
            success:function(maindta)
            {
                if(maindta=='1')
                {
                    swal("Submitted", "Thanks for Attempting Survey", "success");
                    $("#MIS-QA-02-08-2023")[0].reset();
                }
                else
                {
                    swal("Error", maindta, "error");
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                alert('error');
            }
        });
        e.preventDefault(); //STOP default action
    });
	
	//