// JavaScript Document

/*window.onload = function(){
var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);
             
function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el.style.cssText = '-moz-box-sizing:content-box';
    el.style.cssText = 'height:' + el.scrollHeight + 'px';
  },0);
};

}; */

$(document).ready(function(e) {
    var counter = 2;
	var itemsGroup = $("#item-group");
	var addButton = $("#add-item");
	var items = '<div id="item-box"class="form-group row">' +
				'<div class="col-lg-6 col-md-6 col-sm-6">' +
					'<input class="form-control" type="text" placeholder="Item" name="item" />' +
				'</div>' +
				'<div class="col-lg-2 col-md-6 col-sm-6">' +
					'<input class="form-control" type="number" placeholder="Quantity" name="quantity" />' +
				'</div>' +
				'<div class="col-lg-2 col-md-6 col-sm-6">' +
					'<input class="form-control" type="number" placeholder="Rate" name="rate" />' +
				'</div>' +
				'<div class="col-lg-1 col-md-5 col-sm-5">' +
					'<p class="form-control-plaintext"><div id="alt-amount" class="form-control-plaintext">Amount:</div> $50</p>' +
				'</div>' +
				'<div class="col-lg-1 col-md-1 col-sm-1">' +
					'<button type="button" class="close remove" aria-label="Close">' +
  						'<span aria-hidden="true">&times;</span>' +
					'</button>' +
				'</div>' +
				'</div>' ;
	
	
	if(counter > 1){
		addButton.click(function(){
			itemsGroup.append(items);
			$("#remove-item" + counter).css({"margin-top": "10px", "display": "block"});
			 
		});
		counter ++;
	};
	
	
	
	/*var removeItem = $(".remove");	
		$("selector").click(function(){
			var id = $(this).attr('id');
			var split_id = id.split("_");
			var delete_index = split_id[1];
			alert($("selector").index(this) );
			//$(this).parent().parent().parent().remove
		});*/
		
		/*$("#item-group").on("click", "#item-group #item-box", function(){
			$(this).remove("#item-box.active");
		});*/
		
		$(".remove").on("click", "#item-box .remove", function(){
			$("#item-box.active").remove();
		});
});



$(document).ready(function () {
	
				/*function changePosition(){
					if($("#sidebar").is(":visible")){
						$(".logo-stick").css("right", "310px");
					}else{
						$(".logo-stick").css("right", "10px");
					};
					
				};*/
				function  changePosition(){
					if($("#sidebar").is(":visible")){
						$(".logo-stick").removeClass("position-two");
						$(".logo-stick").addClass("position-one");
						
					}else{
						$(".logo-stick").removeClass("position-one");
						$(".logo-stick").addClass("position-two");
					};
					
				};
				
				function expandWidth(){
					if($("#sidebar").is(":visible")){
						$("#side-one").removeClass("col-md-12");
						$("#side-one").addClass("col-md-9");
						
					}else{
						$("#side-one").removeClass("col-md-9");
						$("#side-one").addClass("col-md-12");
					};
					
				};
				
				
				
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
					 changePosition();
					 expandWidth();
                 });
             });