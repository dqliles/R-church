<!doctype html>
<html lang="en-US">
<head>
  
</head>

<body>
	<form class="form-horizontal" action="email_script.php" method="POST" >
    	<div class="form-group">
    		<label for="email" class="col-sm-2 control-label">E-mail</label>
    		<div class="col-sm-4">
    			<input type="email" class="form-control" id="email" name="email" size="30" placeholder="E-mail Address" required autofocus>
    		</div>
    	</div>
    	
    	<div class="form-group">
    		<label for="name" class="col-sm-2 control-label">Name</label>
    		<div class="col-sm-4">
    			<input type="text" class="form-control" id="name" name="name"  size="30" placeholder="Name" required>
    		</div>
    	</div>
    	
    	<div class="form-group">
    		<label for="name" class="col-sm-2 control-label">Message</label>
    		<div class="col-sm-6">
    			<textarea id="message" name="message" class="form-control" placeholder="Your Message" rows="5" required></textarea>
    		</div>
    	</div>
    
    	<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-6">
    			<button type="submit" class="btn btn-primary">Send Message</button>
    		</div>
    	</div>
    </form>
</body>
</html>