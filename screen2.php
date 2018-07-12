<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Screen 2</title>

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="custom.js" type="text/javascript"></script>
</head>

<body>
<section>
		<div id="screen2-container" class="row">
        <div class="col-md-10 col-sm-10 con-border">
            <div class="row">
                <div class="col-sm-10">
                    <div id="option-title">
                        <h3>Options</h3>
                        <hr  class="option-line"/>
                    </div>
                    <div class="row screen2-options">
                        <div class="col-sm-10">
                            <label ><input type="checkbox" style="margin-right: 10px;" />Send Paper invoice (upto 2 pages)</label>
                        </div>
                        <div class="col-sm-2"><p>$5</p></div>
                    </div>
                    
                    <div class="row screen2-options">
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                	<label ><input type="checkbox" style="margin-right: 10px;" />Send Friendly Reminder</label>
                                </div><br />
                                <div class="col-md-4 col-sm-8">
                                    <select class="custom-select mb-2 mr-2">
                                        <option value="A">Before</option>
                                        <option value="B">After</option>
                                     </select>
                                 </div>
                                 <div class="col-md-8 col-sm-8">
                                 	<input class="form-control" type="text" placeholder="Days of Due Date" name="due-days" /><br />
                                    <p><small class="form-text text-muted">(included free sample)</small>  <input class="btn btn-primary" type="submit" value="View Sample" name="view-sample" /></p>
                                 </div>
                             </div>
                         </div>
                        <div class="col-sm-2"><p>-</p></div>
                    </div>
                    <div class="row screen2-options">
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                	<label ><input type="checkbox" style="margin-right: 10px;" />Send Late Payment Notice</label>
                                </div><br />
                                <div class="col-md-4 col-sm-8">
                                    <select class="custom-select mb-2 mr-2">
                                        <option value="A">Before</option>
                                        <option value="B">After</option>
                                     </select>
                                 </div>
                                 <div class="col-md-8 col-sm-8">
                                 	<input class="form-control" type="text" placeholder="Days of Due Date" name="due-days" style="margin-bottom: 10px;"/><br />
                                    <p><input class="btn btn-primary" type="submit" value="View Sample" name="view-sample" /></p>
                                 </div>
                             </div>
                         </div>
                        <div class="col-sm-2"><p>$5</p></div>
                    </div>
                    <div class="row screen2-options">
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                	<label ><input type="checkbox" style="margin-right: 10px;" />Send Request for Immediate Payment</label>
                                </div><br />
                                <div class="col-md-4 col-sm-8">
                                    <select class="custom-select mb-2 mr-2">
                                        <option value="A">Before</option>
                                        <option value="B">After</option>
                                     </select>
                                 </div>
                                 <div class="col-md-8 col-sm-8">
                                 	<input class="form-control" type="text" placeholder="Days of Due Date" name="due-days" style="margin-bottom: 10px;" /><br />
                                    <p><input class="btn btn-primary" type="submit" value="View Sample" name="view-sample" /></p>
                                 </div>
                             </div>
                         </div>
                        <div class="col-sm-2"><p>$5</p></div>
                    </div>
                    <div id="pay-now-con">
                    	<input class="btn btn-primary" type="submit" value="Pay Now $5" name="pay-now" />
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>