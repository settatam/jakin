/* file:           actions.js
 * version:        1.0
 * last changed:   11.01.2014
 * description:    In this file you will find all template actions and controllers
*/
$(document).ready(function(){        
    
    $.mpb("show",{value: [0,50],speed: 5});
    
    navigation_state = $(".page-navigation").hasClass('page-navigation-closed');
    
    $(".page-head-elements .dropdown").on("click",function(event){
        var popup = $(this).next(".popup");

        if(!popup.hasClass('open')){
            popup.addClass('open');
            list_height();
            $(".scroll").mCustomScrollbar("update");                        
        }else{
            popup.removeClass('open');
        }        
    });
    
    /* remove content from ui spinner buttons */
    $(".ui-spinner").find('span').html('');
    /* icons */
    
    /* table checkall */
    $("table .checkall").on("click", function(){
        var state = $(this).is(":checked") ? true : false;
        var tbody = $(this).parents("table").find("tbody");
        var index = $(this).parent("th").index();
        
        tbody.find("tr").each(function(){
            $(this).find("td:eq("+index+") input:checkbox").prop("checked",state);
        }); 
    });
    /* eof table checkall */ 
    
    /* page toolbar tabs */
    $(".page-toolbar-tabs a").on("click",function(){
        var pli = $(this).parent("li");
        var act = $($(this).attr("href"));
        
        $(".page-toolbar-tabs li,.page-toolbar-tab").removeClass("active");
        pli.addClass("active");
        act.addClass("active");
        $(".page-content").mCustomScrollbar("update");
    });
    /* eof page toolbar tabs */
    
    $(".page-head .search").on("click",function(){        
        $(this).find("input").focus();        
    });
    
    // navigation sublevels
    $(".navigation > li").each(function(){
        if($(this).children("ul").length > 0){
            $(this).addClass("openable");
        }
    });
    
    $(".navigation li > a").on("click",function(){
        var pli = $(this).parent("li");
        var sub = pli.children("ul");        
        if(sub.length > 0){
            sub.is(":visible") ? sub.slideUp(200,function(){
                pli.removeClass("open");
                $(".page-navigation").mCustomScrollbar("update");
            }) : sub.slideDown(200,function(){
                pli.addClass("open");                
                $(".page-navigation").mCustomScrollbar("update");
            });
            
        }        
    });
    
    // eof navigation sublevels
    
    /* input file */
    $(".file .btn,.file input:text").click(function(){                
        var block = $(this).parents('.file');
        block.find('input:file').click();
        block.find('input:file').change(function(){
            block.find('input:text').val(block.find('input:file').val());
        });
    });
    /* eof input file */
    
    // List items control show
        // on item click
        $(".list .list-item .list-item-content,.list .list-item .list-item-trigger-external").on("click",function(){        
            list_item_controls($(this).parents(".list-item"),0);
        });        
        // on trigger click
        $(".list .list-item .list-item-trigger").on("click",function(){
            list_item_controls($(this).parents(".list-item"),1);
        });        
    // eof list items control show
    
    // Toogle navigation controller
    $(".page-navigation-toggle").on("click",function(){

        //Get width of navigation block
        var navigation_width = $(".page-navigation").width();
        //Check layout mode
        if(!$(".page-container").hasClass('page-layout-mobile')){
            //If it's not a mobile version
            if($(".page-navigation").hasClass("page-navigation-closed")){
                $(".page-content,.page-head").animate({'padding-left': navigation_width},300,function(){
                   $(this).removeAttr("style");
                });                                
                $(".page-navigation").animate({left: 0},300,function(){
                    $(this).removeClass("page-navigation-closed");
                });
            }else{        
                var speed = navigation_state ? 0 : 300;
                $(".page-content,.page-head").animate({"padding-left": 0},speed);                
                $(".page-navigation").animate({left: -navigation_width},speed,function(){
                    $(this).addClass("page-navigation-closed");
                });
            } 
        }else{  
           //If using mobile version
            if($(".page-navigation").hasClass("page-navigation-opened")){
                $(".page-container").animate({left: 0},300,function(){
                   $(this).removeAttr("style");
                });
                $(".page-navigation").removeClass("page-navigation-opened");
            }else{        
                $(".page-container").css({"position":"absolute","width":$(".page-container").width()}).animate({left: navigation_width},300);
                $(".page-navigation").addClass("page-navigation-opened");                
            }                        
        }
                
        list_height();
        
        return false;
        //End of navigation controller        
    });
    
    // Toggle sidebar controller
    $(".page-sidebar-toggle").on("click",function(){        
        if($(".page-sidebar").hasClass("page-sidebar-opened")){
            //If sidebar opened - close
            page_sidebar('close');
        }else{        
            //If sidebar closed - open
            page_sidebar('open');
        }        
        return false;        
    });
    //End of sidebar controller
    
    /* block controls */
    $(".block-remove").on("click",function(){
        block_remove($(this).parents(".block"));
    });

    $(".block-toggle").on("click",function(){
        block_toggle($(this).parents(".block"));
    });

    $(".block-refresh").on("click",function(){
        var block = $(this).parents(".block");
        block_refresh(block);

        setTimeout(function(){
            block_refresh(block);
        },2000);
    });        
    /* eof block controls */
    

    // Onload page functions
    
    page_layout();
    list_controls_wrapper();
    list_height();
    
    $.mpb("update",{value: 100, speed: 5, complete: function(){            
        $(".mpb").fadeOut(200,function(){
            $(this).remove();
        });
    }});

});

$(document).mouseup(function(e){
    var container = $(".popup");
    if (!container.is(e.target) && container.has(e.target).length === 0)        
        container.removeClass('open');        
});

$(window).resize(function(){
    // Onresize page functions    
    page_layout();
    list_height();
});

function page_layout(){
    
    if($(window).width() < 769){
        $(".page-container").addClass("page-layout-mobile");
        $(".page-navigation").addClass('page-navigation-closed');        
    }else{
        $(".page-container").removeClass("page-layout-mobile");                
        $(".page-navigation").removeClass('page-navigation-closed');        
        $(".page-container").removeAttr("style");                
        
        page_sidebar('close');
        
        if(navigation_state)
            $(".page-navigation-toggle").trigger("click");                
    }
    
    if($(".content-wide-control").length > 0)
        $(".content-wide-control").height($(".page-content").height()-$(".page-toolbar").height());
    
    $(".page-navigation, .page-sidebar").height($(window).height());    
    $(".page-navigation, .page-sidebar").mCustomScrollbar("update");    
}

function list_item_controls(item,hasTrigger){    
    var content     = item.find(".list-item-content");
    var controls    = item.find(".list-item-controls");
    var trigger     = item.find(".list-item-trigger");
    
    if(trigger.length > 0 && hasTrigger == 0) return false;
    
    if(!item.hasClass("item-state-active")){
        if(controls.length > 0){

            content.css({position: "absolute"}).animate({left: "-50%"},300);
            controls.animate({right: "0%"},300);
            
            item.addClass("item-state-active");            
        }
    }else{            
        content.animate({left: "0%"},300,function(){
            $(this).removeAttr("style");
        });
        controls.animate({right: "-50%"},300,function(){
            item.removeClass("item-state-active");
        });       
    }
}

function list_height(){
    $(".list .list-item").each(function(){
        $(this).height($(this).find(".list-item-content").height()+10);
    });    
}

function block_remove(block){
    block.animate({'opacity':0},200,function(){
        $(this).remove();
        $(".page-content").mCustomScrollbar("update");
    });
}
function block_toggle(block){    
    if(!block.hasClass("block-toggled")){
        block.children("div:not(.block-head)").slideUp(200,function(){
            block.addClass("block-toggled");
            block.find(".fa-chevron-down").removeClass("fa-chevron-down").addClass("fa-chevron-up");
            $(".page-content").mCustomScrollbar("update");
        });
        
    }else{        
        block.children("div:not(.block-head)").slideDown(200,function(){
            block.removeClass("block-toggled");
            block.find(".fa-chevron-up").removeClass("fa-chevron-up").addClass("fa-chevron-down");
            $(".page-content").mCustomScrollbar("update");
        });
    }   
}
function block_refresh(block){        
    if(!block.hasClass("block-refreshing")){
        block.append('<div class="block-refresh-layer"><i class="fa fa-spinner fa-spin"></i></div>');
        block.find(".block-refresh-layer").width(block.width()).height(block.height());
        block.addClass("block-refreshing");
    }else{
        block.find(".block-refresh-layer").remove();
        block.removeClass("block-refreshing");
    }    
}

function page_sidebar(state){    
    // Get width of sidebar block    
    var sidebar_width = $(".page-sidebar").width();
    
    //Check state
    if(state == "close"){              
        if(!$(".page-sidebar").hasClass("page-sidebar-opened")) return false;
        
        $(".page-container").animate({right: 0},300);
        $(".page-sidebar").animate({right: -sidebar_width},300,function(){
            $(this).removeClass("page-sidebar-opened");
            page_layout_repair();
        });               
    }else{                
        $(".page-container").css({"position":"absolute","width":$(".page-container").width()}).animate({right: sidebar_width},300);        
        $(".page-sidebar").animate({right: 0},300,function(){
            $(this).addClass("page-sidebar-opened");
        });        
    }    
}

function page_layout_repair(){
    if(!$(".page-sidebar").hasClass("page-sidebar-opened")){
        $(".page-container").removeAttr("style");
    }
}

function list_controls_wrapper(){    
    $(".list .list-item .list-item-controls, .list .list-item .list-item-right").each(function(){
       $(this).wrapInner("<div/>");
    });
}