var Customers_Contribution = ['Select item...', 'Customers Contribution Account', 'Customers O Crown Customers Saving Account', 'Customers Collateral Saving Account'];

var Customer_Credit_and_Loan = ['Select item...', 'Customers Credit and Loan'];

jQuery(window).on('load', function() {
    $("#states").change(function() {
      var states = $(this).val();
      var lgas = eval(states);
      $("#lgas").html("");
      lgas.forEach(function(text){
        $("#lgas").append(`<option value="${text}">${text}</option>`);
      });
    })
  });