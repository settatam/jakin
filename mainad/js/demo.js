/* file:           demo.js
 * version:        1.0
 * last changed:   11.01.2014
 * description:    This file can be removed before you use template in production. 
 *                 It contains with elements used only for demo preview, and you doesnt need to include 
 *                 it in your project, couse this features is individual.
*/

$(document).ready(function(){
    
    $.get("assets/ajax-sidebar.html", function(data){
        $(".page-sidebar").html(data);
        $(".page-sidebar").mCustomScrollbar({autoHideScrollbar: true, scrollInertia: 20, advanced: {autoScrollOnFocus: false}})
    });
        
    /* daterangepicker */       
    if($("#reportrange").length > 0){   
        $("#reportrange").daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                'Last 7 Days': [moment().subtract('days', 6), moment()],
                'Last 30 Days': [moment().subtract('days', 29), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            startDate: moment().subtract('days', 29),
            endDate: moment()},
            function(start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );
        $("#reportrange span").html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    }
    /* eof daterangepicker */
    
    /* Nestable */
    if($("#nestable").length > 0){
        
        var mNestable = function () {
                    
            var updNestableOutput = function(e){

                var list   = e.length ? e : $(e.target),
                    output = list.data('output');
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize')));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
                $(".page-content").mCustomScrollbar("update");            
            };
            
            return {
                show: function(){                    
                    $("#nestable").nestable({group: 1}).on("change", updNestableOutput);        
                    $("#nestable2").nestable({group: 1}).on("change", updNestableOutput);

                    updNestableOutput($('#nestable').data('output', $('#nestable-output')));
                    updNestableOutput($('#nestable2').data('output', $('#nestable2-output')));
                    
                    $('#nestable_actions').on('click', function (e) {
                        var target = $(e.target),
                            action = target.data('action');
                            
                        if(action === 'expand-all') $('.dd').nestable('expandAll');                        
                        if(action === 'collapse-all') $('.dd').nestable('collapseAll');
                        
                        $(".page-content").mCustomScrollbar("update");
                    });
                    
                }
            }
        
        }();
        
        mNestable.show();
        
    };
    /* EOF Nestable */    
    
    
    
    /* form wizard */
    if($("#form-wizard").length > 0){
        $("#form-wizard").bootstrapWizard({"tabClass": "form-wizard-levels"});
    }
    /* Wizard validation */
    if($("#form-wizard2").length > 0){

        var $validator = $("#wizard-validate").validate({
		  rules: {
		    login: {
                            required: true,
                            minlength: 2,
                            maxlength: 8
                    },
                    password: {
                            required: true,
                            minlength: 5,
                            maxlength: 10
                    },
                    repassword: {
                            required: true,
                            minlength: 5,
                            maxlength: 10,
                            equalTo: "#password"
                    },
                    email: {
                            required: true,
                            email: true
                    },
                    name: {
                            required: true,
                            maxlength: 10
                    },
                    about: {
                            required: true
                    }
		  }
		});
 
	  	$('#form-wizard2').bootstrapWizard({
	  		'tabClass': 'form-wizard-levels',
	  		'onNext': function(tab, navigation, index) {                            
	  			var $valid = $("#wizard-validate").valid();
	  			if(!$valid) {
	  				$validator.focusInvalid();
	  				return false;
	  			}
                                var $total = navigation.find('li').length;
                                var $current = index+1;
                                if($current >= $total) {                                    
                                    $('#wizard-validate').find('.pager .next').hide();
                                    $('#wizard-validate').find('.pager .finish').show();                                    
                                }else{
                                    $('#wizard-validate').find('.pager .next').show();
                                    $('#wizard-validate').find('.pager .finish').hide();
                                }
	  		},
                        onTabClick: function(tab, navigation, index) {return false;}
	  	});	

    }        
    /* eof wizard validation */
    /* eof form wizard */
    
    
    /* jQuery */        
        /* slider (DEMO) */  
        if($("#slider_sample_1").length > 0){
            
            $("#slider_sample_1").slider({value: 10});
            
            $("#slider_sample_2").slider({range: true,min: 0,max: 1000,values: [ 200, 800 ],
                slide: function(event, ui) {
                    $("#slider_range_2").html(ui.values[ 0 ] + " - " + ui.values[ 1 ]);
                }
            });            
            $("#slider_range_2").html( $("#slider_sample_2").slider("values",0) + " - " + $("#slider_sample_2").slider( "values", 1 ));
            
            $("#slider_sample_3").slider({min: 0,max: 1000, value: 200, step: 100, range: "min",
                slide: function(event, ui) {
                    $("#slider_range_3").html(ui.value);
                }
            });            
            $("#slider_range_3").html( $("#slider_sample_3").slider("value"));
            
            $("#slider_sample_4").slider({orientation: "vertical",range: "min",min: 0,max: 100,value: 60,
                slide: function(event, ui) {
                    $("#slider_range_4").html(ui.value);
                }
            });
            $("#slider_range_4" ).html($("#slider_sample_4").slider( "value" ));
            
            $("#slider_sample_5").slider({orientation: "vertical",range: true, values: [ 20, 80 ], min: 0, max: 100,
                slide: function(event, ui) {
                    $("#slider_range_5").html(ui.values[0]+"-"+ui.values[1]);
                }
            });
            $("#slider_range_5" ).html($("#slider_sample_5").slider("values", 0)+"-"+$("#slider_sample_5").slider("values", 1));
        }            
        /* eof slider */
        
    /* eof jQuery */
});
