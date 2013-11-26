</div>
		<?php ?>
		<script type="text/javascript">
			//mark active menu
			$(document).ready(function() {;
        
				$(".<?php echo $this->router->fetch_class().'_'. $this->router->fetch_method();?>").parent().addClass("active");
				$(".<?php echo $this->router->fetch_class();?>").parent().addClass("active");
			});
			$("[data-toggle]").click(function(event) {
			    /* Act on the event */
			    var ulNameToShow = $(this).attr("data-toggle");
			    $("[data-name='"+ulNameToShow+"']").toggle("fast");
			});

			//set jquery validation default
			jQuery.validator.setDefaults({
				
		        //show only on click submit
		        onfocusout: false,
		        onkeyup: false,
	   			onclick: false,
		        //All error labels are displayed inside an unordered list with the ID "validationSummary"
	            //Additonal container for error messages. The elements given as the "errorContainer" are all shown and hidden when errors occur.
	            errorContainer: "#summary-validation",
	 			DisplayType : "SummaryList",
	            //A custom message display handler. Gets the map of errors as the first argument and and array of errors as the second, 
	            //called in the context of the validator object.
	            showErrors: function (errorMap, errorList) {
	                $('.errorList').hide();
	                $('.inlineMessage').hide();
	                $('#summary-validation').hide();
	                var messages = "";
	                
	                if(errorList.length > 0){
	                	
	                	$.each(errorList, function (index, value) {
		                    var id = $(value.element).attr('id');
		                    //messages += "<a title='click to view field' href='javascript:$("+id+").focus();'><span>" + (index + 1) + value.message + "</span></a>";
		                    messages += "<a title='click to view field' href='javascript:$("+id+").focus();'><span>" + value.message + "</span></a>";
		                });
		                messages = "<div class='alert alert-danger'>" + messages + "</div>";
	                }
	                switch (jQuery.validator.defaults.DisplayType) {
	                    case "Popup":
	 						alert('Be sure to include jquery ui css');
	                        //Showing validation summary in Popup window
	                        $('#summary-validation').html(messages);
	                        $('#summary-validation').dialog();
	                        break;
	                    case "SummaryList":
	 
	                        //Showing validation summary in list of the same page
	                        $('#summary-validation').html(messages);
	                        $('#summary-validation').show();
	                        break;
	                    case "Inline":
	 						
	                        //Showing validation in inline format
	                        $.each(errorList, function (index, item) {
	                            $(item.element).after("<div style='font-weight:bold'>" + item.message)+"</div> ";
	                            //$(item.element).next('div').show();
	                        });
	                        break;
	                    default :
	                    //alert(messages);//class="alert alert-danger"
	                        //Showing validation summary in list of the same page
	                        $('#summary-validation').html(messages);
	                        $('#summary-validation').show();
	                        break;
	                }
	            },
	 
	            //If all validations are successfully validate then execute submitHandler function
	            submitHandler: function () {
	                $('#summary-validation').empty();
	                $('#dialog-validation').empty();
	                
	            }
			});
		</script>
		<div id="footer">
			<?php 
				// echo $this->Html->link(
				// 	$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				// 	'http://www.cakephp.org/',
				// 	array('target' => '_blank', 'escape' => false)
				// );
					
			?>
		</div>
	</div>
	
</body>
</html>