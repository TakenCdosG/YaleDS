/*!
 * JS Scripts
 */
// Placeholder
jQuery(function(){

      //Shortcode Popover
     jQuery("a[rel=popover]").popover()
      .click(function(e) {
        e.preventDefault()
      });

      //Shortcode Tooltip
      jQuery("a[rel=tooltip]").tooltip();

      //Data Tooltip
      jQuery("[data-toggle='tooltip']").tooltip();


       jQuery('.blue').hoverZoom({
                overlayColor: '#3498db',
                zoom: 0
            });
            
            jQuery('.green').hoverZoom({
                overlayColor: '#1abc9c',
                zoom: 0
            });
            
            jQuery('.pink').hoverZoom({
                overlayColor: '#bd2e75',
                zoom: 0
            });
            
            jQuery('.black').hoverZoom({
                overlayColor: '#2f2f2f',
                zoom: 0
            });
            
            jQuery('.alizarin').hoverZoom({
                overlayColor: '#e74c3c',
                zoom: 0
            });
    // Adding Bootstrap class for resolutions smaller than 768px
    if(jQuery( window ).width()<768){
            jQuery(".quoinftext").addClass("col-sm-8 col-xs-7");
        }
    else {   jQuery(".quoinftext").removeClass("col-sm-8 col-xs-7");}
    //The resize detecting function to add or remove the bootstrap Class
    jQuery( window ).resize( function() {
        if(jQuery( window ).width()<768){
            jQuery(".quoinftext").addClass("col-sm-8 col-xs-7");
        }
        else {   jQuery(".quoinftext").removeClass("col-sm-8 col-xs-7");}
    });
    if(jQuery( window ).width()<641){
        jQuery(".quoinftext").removeClass("col-xs-7");
        jQuery(".sdbinfo").removeClass("col-xs-5");
    }
    jQuery( window ).resize( function() {
        if(jQuery( window ).width()<641){
            jQuery(".quoinftext").removeClass("col-xs-7");
            jQuery(".sdbinfo").removeClass("col-xs-5");
        }
        else {if(jQuery( window ).width()>641 && jQuery( window ).width()<768)
        {
            jQuery(".quoinftext").addClass("col-xs-7");
            jQuery(".sdbinfo").addClass("col-xs-5");
        }}
    });
    if(jQuery( window ).width()>767){
        jQuery(".footlft").removeClass("col-xs-11 col-xs-offset-1").addClass("col-xs-4");
        jQuery(".footmd").addClass("col-xs-4");
        jQuery(".footrht").addClass("col-xs-4");
    }
    jQuery( window ).resize( function() {
        if(jQuery( window ).width()<768){
            jQuery(".footlft").addClass("col-xs-11 col-xs-offset-1").removeClass("col-xs-4");
        }
        else {if(jQuery( window ).width()>768)
        {
            jQuery(".footlft").removeClass("col-xs-11 col-xs-offset-1").addClass("col-xs-4");
            jQuery(".footmd").addClass("col-xs-4");
            jQuery(".footrht").addClass("col-xs-4");

        }}
    });
    // Transforming TABS into COLLAPSIBLE PANES
    jQuery(document).ready(function() {

        // DEPENDENCY: https://github.com/flatlogic/bootstrap-tabcollapse
        jQuery('#myTab').tabCollapse();

        // initialize tab function
        jQuery('.nav-tabs a').click(function(e) {
            e.preventDefault();
            jQuery(this).tab('show');
        });

    });
});