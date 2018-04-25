<html>
<head>
  <title>Acme Consulting - Contact Us</title>
  <link rel="stylesheet" href="style.css">
 
 
  <!-- Here is the Ringba tag and JavaScript callback. Put this in the <head> HTML tag -->
 
  <script>
 
    // This function sets the variable "window.pnumber" to use
    // anywhere on the page with a function like document.write(window.pnumber)
 
    function GetNumber(number, tagId, firstTime)
    {
	if(firstTime)
        window.pnumber = number;
    }
 
 
    (function(e,d) {
 
        // Make sure to replace ringba_com_tag="REPLACE_ME" with your Campaign ID.
        // You can find this by clicking <> next to your "Call Tracking Tag" 
        // inside your campaign's settings.
 
        var ringba_com_tag="JS3283164fac93433daaae14471c124fa02"; 
        var _sc = d.getElementsByTagName('script'), _s = _sc[_sc.length - 1];
 
        
        // The numberClass setting tells Ringba which HTML tags to insert
        // your phone number into. You can change this to anything, but only
        // edit what is inside the quotes. 
 
        e._rgba = e._rgba || { q: [] }; e._rgba.q.push({ tag: ringba_com_tag, cb: GetNumber, numberClass: "phNumber", render: false, script: _s });
 
        if (!(e._rgba.loading = !!e._rgba.loading)) {
            var sc = d.createElement('script'); sc.type = 'text/javascript'; sc.async = true;
            sc.src = '//js.callcdn.com/js_v2/min/ringba.com.js';
            var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sc, s);
            e._rgba.loading = true;
        }
    })(window,document);
  </script>
 
  <script> 
 
    // The "window.pnumber" will show up in the alert as your Ringba phone number.
 
    alert("Email support is currently down, please call us instead at: " + window.pnumber + ". We apologize for any inconvenience this may cause.");
  </script>
 
</head>
<body>
  <div class="body">
    <p>
      Thank you for contacting Acme Consulting, we'd love to hear from you. Please send us an email or call us toll free anytime and one of our happy team members will help you in any way possible.
    </p>
  </div>
 
  <div class="email">
    Email Address: support@acmeconsulting.com
  </div>
 
  <div class="phone">
    Phone Number: <span class="phNumber"></span>
  </div>
</body>
</html>