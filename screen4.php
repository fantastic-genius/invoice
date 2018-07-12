<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Screen 4</title>

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Baloo Tammudu' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet'>
<link rel="stylesheet" href="style.css" type="text/css" />


<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="custom.js" type="text/javascript"></script>

</head>

<body>
<section>
	<div id="screen4-container" class="row">
        <div class="col-md-9 col-sm-12 con-border">
        	<div id="invoice-status" class="col-sm-12">
            	<div class="row">
                    <div class="col-sm-3">INVOICE NUMBER:</div>
                    <div class="col-sm-9">1 STANS</div>
                    <div class="col-sm-12">
                        <p><strong>VERIFIED   <i class="fa fa-arrow-right" aria-hidden="true"></i>   PRINTED   <i class="fa fa-arrow-right" aria-hidden="true"></i>   SHIPPED   <i class="fa fa-arrow-right" aria-hidden="true"></i>   DELIVERED</strong></p>
                    </div>
                    <div class="col-sm-12">
                    	<input class="btn btn-primary" type="submit" value="Mark Invoice as Paid" name="mark" />
                        <small class="form-text text-muted">* Required for Reminder Mail</small>
                    </div>
                </div>
                <div class="line-separator"></div>
                <div id="invoice-summary" class="row">
                	<div class="col-sm-12">
                    	<h3>Invoice Summary</h3>
                        <div class="col-sm-10">
                        	<p>This Your Invoice Summary</p>
                        </div>
                    
                    </div>
                	
                
                </div>
            </div>
        </div>
        
        <!-- DISPLAY PANEL START -->
        <div id="screen4-display-panel" class="col-md-3 col-sm-12 con-border">
        	<div id="logo-box"></div>
            <div>
                <p><a href="#">Help</a></p>
                <p><a href="#">About</a></p>
       		</div>
            
            <div id="send" class="form-group">
                <input class="form-control" type="email" placeholder="Your E-mail" name="name" /><br />
                <input class="form-control btn btn-primary" type="submit" value="Send Invoice" name="send-invoice" />
            </div>
            
            <div id="invoice-option">
            	<h3>Invoice Options</h3>
                <div class="invoice-line"></div>
            </div>
            
            <div id="discount" class="row">
            	<div class="col-lg-4 col-md-12 col-sm-12">Discount</div>
                <div class="col-lg-8 col-md-12 col-sm-12 form-check">
                	<label class="form-check-label">
                		<input class="form-check-input" type="radio" name="discount-option" value="flat" checked="checked"/> Flat
                    </label><br />
                    <label class="form-check-label">
                		<input class="form-check-input" type="radio" name="discount-option" value="percent"/> Percentage
                    </label>
                    
                </div>
            
            </div>
            
            <div class="row">
            	<div class="col-sm-4">Tax</div>
                <div class="col-sm-8 form-check">
                    <label class="switch">
                      <input type="checkbox" checked="checked">
                      <span class="slider round"></span>
                    </label>
            	</div>
            </div>
            
            <div class="row">
            	<div class="col-sm-4">Shipping</div>
                <div class="col-sm-8 form-check">
                    <label class="switch">
                      <input type="checkbox" checked="checked">
                      <span class="slider round"></span>
                    </label>
            	</div>
            </div>
            
            <div id="template">
            	<label class="mr-2">Template</label>
                <select class="custom-select mb-2 mr-2">
                	<option hidden="true">Select a template</option>
                    <option value="A">A</option>
                	<option value="B">B</option>
                </select>
            
            </div>
            
            <div>
                <p><a href="#">Previous Invoices</a></p>
       		</div>
        </div>
        <!-- DISPLAY PANEL END -->
    </div>
</section>
</body>
</html>