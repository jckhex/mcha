<!DOCTYPE html>
<!-- saved from url=(0051)http://bolindia.biz/userpanel/direct_level_tree.php -->
<html lang="en" class="no-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



<title>
Paylife.in</title>
<link rel="shortcut icon" href="http://bolindia.biz/images/favicon.png">
<style type="text/css">

.td_box {
 
font-size:13px;
border: 1px solid #dddddd;
 
}

.td_box .tdhead {
 
background-color: #000; padding-top:5px; color:#FFF3DC;font-weight:bold;height:40px;border-bottom:3px solid #dddddd; border-left:1px solid #dddddd; padding-left:3px; 
 
}

.td_box tr:nth-child(2n+1) {background-color:#FFF3DC;border-bottom:1px solid #dddddd;height:35px;padding-top:5px;  }
.td_box tr:nth-child(2n) {border-bottom:1px solid #dddddd;height:35px;padding-top:5px;  }
  
/*.td_box tr:hover {  background:#f2f2f2;height:30px; }*/
.td_box thead tr{	color: #333;height:30px;	border: 0px solid #e0e0e0; border-left:1px solid #dddddd; }
.td_box thead th, .td_box th{	background-color: #000; padding-top:5px; color:#fff;font-weight:bold;height:40px;border-bottom:3px solid #dddddd; border-left:1px solid #dddddd; padding-left:3px;  }
.td_box tbody tr td{	border: 0px solid #e0e0e0;height:30px;padding-top:5px; font-weight:bold; font-size:14px; border-left:1px solid #dddddd; padding-left:3px;  }

.title{ font-size: 20px;  font-style: none;font-weight: bold;color:#999;  text-decoration: none; height: 25px; background-image: url(../images/page.png); background-repeat:repeat-x; }
.subtitle{ font-size:14px; font-weight:bold; color:#999999; }
.error {  font-size: 14px;	text-transform: none;	color: #FF0000;}

a.info{   position:relative;  z-index:24; background-color:#f2f2f2;  color:#000;  text-decoration:none}
a.info:hover{z-index:25; background-color:#FEE2AB}
a.info span{display: none}
a.info:hover span{   display:block;   position:absolute;   top:2em; left:-10em; width:45em;   border:1px solid #0cf;  background-color:#FEE2AB; color:#000;    text-align: left}
	
	


</style>
<!-- Begin Page Progress Bar Files -->
<script type="text/javascript" src="./Bolindia.biz_files/pace.min.js.download"></script>
<link href="./Bolindia.biz_files/pace-theme-minimal.css" rel="stylesheet">


<!-- // Page Progress Bar Files -->
<!-- Core CSS - Include with every page -->
<link href="./Bolindia.biz_files/bootstrap.min.css" rel="stylesheet">
<link href="./Bolindia.biz_files/font-awesome.css" rel="stylesheet">
<!-- Bootstrap Tour CSS - Include in Dashboard|Fleet Management|Page Tour Page -->
<link href="./Bolindia.biz_files/bootstrap-tour.min.css" rel="stylesheet">
<!-- Page-Level Plugin CSS - Dashboard -->
<link href="./Bolindia.biz_files/morris-0.4.3.min.css" rel="stylesheet">
<link href="./Bolindia.biz_files/timeline.css" rel="stylesheet">
<link href="./Bolindia.biz_files/bootstrap-switch.css" rel="stylesheet">
<!-- Date Range Picker Stylesheet -->
<link href="./Bolindia.biz_files/daterangepicker-bs3.css" rel="stylesheet">
<!-- <link rel="stylesheet/css" href="assets/css/plugins/cupertino/jquery-ui.min.css" /> -->
<link href="./Bolindia.biz_files/fullcalendar.css" rel="stylesheet">
<link href="./Bolindia.biz_files/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<!-- Add custom CSS here -->
<script type="text/javascript">
        less = {
            env: "production", // or "production / development"
        };
    </script>
<link href="./Bolindia.biz_files/style_default.css" rel="stylesheet" id="style_color">
<!-- Style LESS -->
<link href="http://bolindia.biz/~bolindiabiz/userpanel/assets/css/Animate.less.css" rel="stylesheet/less">

	
<script language="javascript">
		
		// remote scripting library
		// (c) copyright 2005 modernmethod, inc
		var sajax_debug_mode = false;
		var sajax_request_type = "GET";
		var sajax_target_id = "";
		var sajax_failure_redirect = "";
		
		function sajax_debug(text) {
			if (sajax_debug_mode)
				alert(text);
		}
		
 		function sajax_init_object() {
 			sajax_debug("sajax_init_object() called..")
 			
 			var A;
 			
 			var msxmlhttp = new Array(
				'Msxml2.XMLHTTP.5.0',
				'Msxml2.XMLHTTP.4.0',
				'Msxml2.XMLHTTP.3.0',
				'Msxml2.XMLHTTP',
				'Microsoft.XMLHTTP');
			for (var i = 0; i < msxmlhttp.length; i++) {
				try {
					A = new ActiveXObject(msxmlhttp[i]);
				} catch (e) {
					A = null;
				}
			}
 			
			if(!A && typeof XMLHttpRequest != "undefined")
				A = new XMLHttpRequest();
			if (!A)
				sajax_debug("Could not create connection object.");
			return A;
		}
		
		var sajax_requests = new Array();
		
		function sajax_cancel() {
			for (var i = 0; i < sajax_requests.length; i++) 
				sajax_requests[i].abort();
		}
		
		function sajax_do_call(func_name, args) {
			var i, x, n;
			var uri;
			var post_data;
			var target_id;
			
			sajax_debug("in sajax_do_call().." + sajax_request_type + "/" + sajax_target_id);
			target_id = sajax_target_id;
			if (typeof(sajax_request_type) == "undefined" || sajax_request_type == "") 
				sajax_request_type = "GET";
			
			uri = "/userpanel/direct_level_tree.php";
			if (sajax_request_type == "GET") {
			
				if (uri.indexOf("?") == -1) 
					uri += "?rs=" + escape(func_name);
				else
					uri += "&rs=" + escape(func_name);
				uri += "&rst=" + escape(sajax_target_id);
				uri += "&rsrnd=" + new Date().getTime();
				
				for (i = 0; i < args.length-1; i++) 
					uri += "&rsargs[]=" + escape(args[i]);

				post_data = null;
			} 
			else if (sajax_request_type == "POST") {
				post_data = "rs=" + escape(func_name);
				post_data += "&rst=" + escape(sajax_target_id);
				post_data += "&rsrnd=" + new Date().getTime();
				
				for (i = 0; i < args.length-1; i++) 
					post_data = post_data + "&rsargs[]=" + escape(args[i]);
			}
			else {
				alert("Illegal request type: " + sajax_request_type);
			}
			
			x = sajax_init_object();
			if (x == null) {
				if (sajax_failure_redirect != "") {
					location.href = sajax_failure_redirect;
					return false;
				} else {
					sajax_debug("NULL sajax object for user agent:\n" + navigator.userAgent);
					return false;
				}
			} else {
				x.open(sajax_request_type, uri, true);
				// window.open(uri);
				
				sajax_requests[sajax_requests.length] = x;
				
				if (sajax_request_type == "POST") {
					x.setRequestHeader("Method", "POST " + uri + " HTTP/1.1");
					x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				}
			
				x.onreadystatechange = function() {
					if (x.readyState != 4) 
						return;

					sajax_debug("received " + x.responseText);
				
					var status;
					var data;
					var txt = x.responseText.replace(/^\s*|\s*$/g,"");
					status = txt.charAt(0);
					data = txt.substring(2);

					if (status == "") {
						// let's just assume this is a pre-response bailout and let it slide for now
					} else if (status == "-") 
						alert("Error: " + data);
					else {
						if (target_id != "") 
							document.getElementById(target_id).innerHTML = eval(data);
						else {
							try {
								var callback;
								var extra_data = false;
								if (typeof args[args.length-1] == "object") {
									callback = args[args.length-1].callback;
									extra_data = args[args.length-1].extra_data;
								} else {
									callback = args[args.length-1];
								}
								callback(eval(data), extra_data);
							} catch (e) {
								sajax_debug("Caught error " + e + ": Could not eval " + data );
							}
						}
					}
				}
			}
			
			sajax_debug(func_name + " uri = " + uri + "/post = " + post_data);
			x.send(post_data);
			sajax_debug(func_name + " waiting..");
			delete x;
			return true;
		}
		
				
		// wrapper for get_downline_details		
		function x_get_downline_details() {
			sajax_do_call("get_downline_details",
				x_get_downline_details.arguments);
		}
		
		 
 //------check username availability code start------------------------------------------------
function do_get_downline_details(reg_id) {
	document.getElementById(reg_id).innerHTML = "Loading...";
	document.form1.current_id.value=userid;
	//document.getElementById('loading').innerHTML = "Loading...";
 	//var username	= document.registration.user_username.value;
   	x_get_downline_details('downline_details', reg_id, do_get_downline_details_cb);
 
 }
function do_get_downline_details_cb(z) {
	//alert(z);
  	//document.getElementById('loading').innerHTML = "";
	//document.getElementById('loading').innerHTML = z;
	userid = document.form1.current_id.value;
	document.getElementById(reg_id).innerHTML = z;
   }
  //------check username availability code END------------------------------------------------
</script>
<script language="JavaScript" type="text/javascript" src="./Bolindia.biz_files/general.js.download"></script>
 
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><style id="holderjs-style" type="text/css">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style><script type="text/javascript" charset="UTF-8" src="./Bolindia.biz_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./Bolindia.biz_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./Bolindia.biz_files/infowindow.js.download"></script><script type="text/javascript" charset="UTF-8" src="./Bolindia.biz_files/stats.js.download"></script></head>
