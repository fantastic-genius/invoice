<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Invoice</title>

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Baloo Tammudu' rel='stylesheet'>
<link rel="stylesheet" href="style.css" type="text/css" />


<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="custom.js" type="text/javascript"></script>
</head>

<body>
	
	<div class="container-fluid row">
    <div id="side-one" class="col-md-9">
    <div class="logo-stick position-one" >
                        <button type="button" id="sidebarCollapse" class="btn navbar-btn logo-menu"></button>
             </div>
	<div class="wrapper"> 	 
		<div id="content" class="container-fluid" >
        	 
				
            <!--nav class="navbar navbar-default">
                <div class="container-fluid">

                     <div class="nav navbar-brand" >
                        <button type="button" id="sidebarCollapse" class="btn navbar-btn logo-menu"></button>
                    </div> 
                    
                   
                </div>
            </nav-->		
        	
        	<div class="row">
                <div class="col-md-4">
                    <div class="logo-container">
                    	<label for="logo-id">
                        	<div class="span-con"><br /><span>+ Add Logo</span></div>
                        </label>
                    	<input id="logo-id" type="file" name="logo" >
                    </div>
                </div>
                <div id="user-details" class="col-md-8 form-group">
                        <input class="form-control" type="text" placeholder="Your Name" name="name" /><br />
                        <input class="form-control" type="text" placeholder="Your Adress" name="address" /><br />
                        <input class="form-control" type="text" placeholder="City ZIP code" name="city-zip" /><br />
                        <input class="form-control" type="text" placeholder="State" name="state" />
                </div>
            </div>
           
            
            <div class="box-container">
            	<h3>Invoice</h3>
            </div>
            <div id="invoice-section">
                <h3 style="margin-bottom: 0px;">Bill To:</h3>
                <div style="margin-top:0px; border:1px solid; text-align:left; width: 65px;" ></div>
            
            	<div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 form-group client-details">
                        <input class="form-control" type="text" placeholder="Client Name" name="client-name" /><br />
                        <input class="form-control" type="text" placeholder="Address" name="client-address" /><br />
                        <input class="form-control" type="text" placeholder="City Zip code" name="client-city-zip" /><br />
                        <input class="form-control" type="text" placeholder="State" name="client-state" /><br />
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="client-invoice form-group">
                        <label>Invoice Number</label>
                        <input class="form-control" type="number" placeholder="Invoice Number" name="invoice-number" /><br />
                        <label>Invoice Date</label>
                        <input class="form-control" type="date" value="2017-08-27" name="invoice-date" /><br />
                        <label>Due Date</label>
                        <input class="form-control" type="date" value="2017-08-27" name="due-date" /><br />
                        <label>Purchase order</label>
                        <input class="form-control" type="text" placeholder="Purchase order" name="purchase-order" /><br />
                        <label>Due Amount</label>
                        <input class="form-control" type="number" placeholder="$250" name="due-amount" /><br />
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="item-table">
            	<div class="row highlighted">
                	<div class="col-md-12 col-sm-12">
                        <div id="item-header" class="form-group row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p class="form-control-plaintext">Item</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6">
                                <p class="form-control-plaintext">Quantity</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6">
                                <p class="form-control-plaintext">Rate</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6">
                                <p class="form-control-plaintext">Amount</p>
                            </div>                   
                        </div>
                        <div id="item-group">
                            <div id="item-box" class="form-group row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input class="form-control" type="text" placeholder="Item" name="item" />
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-6">
                                    <input class="form-control" type="number" placeholder="Quantity" name="quantity" />
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-6">
                                    <input class="form-control" type="number" placeholder="Rate" name="rate" />
                                </div>
                                <div class="col-lg-1 col-md-5 col-sm-5">                               
                                    <p class="form-control-plaintext"><div id="alt-amount" class="form-control-plaintext">Amount:</div> $50</p>
                                </div>
                            </div>
                        </div>
                        
                        <button id="add-item" type="submit" class="btn btn-primary" name="add-item" >Add Item</button>
                        
                        <div class="row">
                            <div class="col-sm-6 client-invoice2">
                                <div class="row">
                                    <div class="col-sm-4" >Subtotal</div>
                                    <div class="col-sm-8 total-val">$0.00</div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Discount</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" placeholder="20%" name="discount" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Tax</label>
                                    <div class="col-sm-8">
                                        <input  class="form-control" type="number" placeholder="%" name="tax" />
                                    </div><br />
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Shipping</label>
                                    <div class="col-sm-8">
                                        <input  class="form-control" type="number" placeholder="$500" name="shipping" />
                                    </div><br />
                                </div>
                                <div class="row">
                                    <div class="col-sm-4" >Total</div>
                                    <div class="col-sm-8 total-val">$0.00</div>
                                </div>
                            </div>
                        </div>
                	</div>
                </div>
            </div>
            
            <div id="notes-container" class="form-group row">
                <label class="col-sm-1 col-form-label">Notes</label>
                <div class="col-sm-11">
                <textarea class="form-control" name="notes" ></textarea>
                </div>
                
            </div>
            <div id="terms-container" class="form-group row">
                <label class="col-sm-1 col-form-label">Terms</label>
                <div class="col-sm-11">
                <textarea  class="form-control" name="terms" ></textarea>
                </div>
                
            </div>                   
    	</div>
    </div> 
    </div>
    
    <!-- DISPLAY PANEL START -->
    <div id="side-two" class="col-md-3">
        <nav id="sidebar">
            <div id="display-panel">
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
        </nav>
        </div>
        <!-- DISPLAY PANEL END -->	
</body>
</html>