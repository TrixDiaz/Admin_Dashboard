<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var date = new Date()
var timedate=date.getMonth() + 1 + "/" + date.getDate() + "/" + date.getFullYear(); 
timedate = timedate + " - " +  date.getHours( )+ ":" +  date.getMinutes() + ":" +  date.getSeconds();
document.getElementById('currentTimeDate').innerHTML = timedate;
display_c();
 }
</script>