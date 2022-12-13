<html>
<head>
<title> Cara Membuat Visitor Counter Website di PHP</title>
</head>
<body>
<FONT FACE="Comic Sans MS" size='6' color='brown'>Cara Membuat Visitor Counter Website di PHP</font></br></br></br>
<?php
$filename = 'counter.txt';
 
function counter(){		
	global $filename;	
 
	if(file_exists($filename)){		
		$value = file_get_contents($filename);	
	}else{		
		$value = 0;		
	}
 
	file_put_contents($filename, ++$value);		
}
 
counter();	
 
echo 'Total pengunjung: '.file_get_contents($filename);	
?></br></br>
<FONT FACE="Comic Sans MS" size='4' color='black'>Pengunjung Anda akan bertambah 1, ketika Anda me-refresh halaman.</font>


<div class="container">
  <h1>FormSubmit Demo</h1>
  <form target="_blank" action="https://formsubmit.co/adi@kawankoding.com" method="POST">
    <div class="form-group">
      <div class="form-row">
        <div class="col">
          <input type="text" name="name" class="form-control" placeholder="Full Name" required>
        </div>
        <div class="col">
          <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>
      </div>
    </div>
    <div class="form-group">
      <textarea placeholder="Your Message" class="form-control" name="message" rows="10" required></textarea>
    </div>
    <button type="submit" class="btn btn-lg btn-dark btn-block">Submit Form</button>
  </form>
</div>

</body>
</html>