
var total_time=0;
$(document).ready(function(){
setInterval(function () {
total_time += 1
$("#total_time").val("TimeSpent(Sec):"+total_time);
console.log(total_time)
}, 1000);

});
