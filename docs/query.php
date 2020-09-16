<html>
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script>
function urlBuilder(swyftUrl) {
     //swyftUrl = swyftUrl.match(/(?<=sys:swyft&track:).*(?=&org)/); 
      //just use raw for now, we don't have proper QR codes.
     return "https://script.google.com/macros/s/AKfycbwLjD2nxs62zkaLQz7PV51TrriftHY_U3uM99WUJei4uHoDx2AV/exec?track="+swyftUrl+"&mode=QUERY";
    }
	
	window.onload = function () {
	 var s = document.createElement("script");
            s.type = "text/javascript";
            s.src = urlBuilder(swyftUrl);
            $("head").append(s);
	
	}
</script>
</html>