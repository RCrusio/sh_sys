$(document).ready(function(){
    $("#search_input").on("keyup",function(){
      var value = $(this).val().toLowerCase();
      $("#table_body tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });