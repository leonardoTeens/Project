$(document) .ready(function(){

$( "#select_sort" ).click(function() {
  $( "#sorting_list" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});

});