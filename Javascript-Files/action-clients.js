$(document).ready(function(){
    
    $("#tbody .t-body .last-Action a").each(function(index , i) {

        $(this).on("click", function(e){

            e.preventDefault();

            var boolKey = $(this).data('module');

            $(boolKey).removeClass('remove-Delete');

            var  retindex = index;

            let Id = "T" + retindex;

             $(this).parent().parent().attr("id", Id);

          let UserName =  document.querySelector(`#tbody > #${Id} > td.Username-Edit-Module`);
          let FullName =  document.querySelector(`#tbody > #${Id} > td.FullName-Edit-Module`);
          let Status =  document.querySelector(`#tbody > #${Id} > td.Status-Edit-Status`);
          let Created =  document.querySelector(`#tbody > #${Id} > td.Date-Created`);
          let Purchases =  document.querySelector(`#tbody > #${Id} > td.HA-U-Purchase`);

         // Form
          $('#Edit-Username').val(UserName.innerHTML);
          $('#Edit-FullName').val(FullName.innerHTML);
          $("#Status").val(Status.innerHTML);


         //   View Show
         $("#view-Details-show-name").html(UserName.innerHTML);
         $("#view-Details-show-FullName").html(FullName.innerHTML);
         $("#view-Details-show-Status").html(Status.innerHTML);
         $("#view-Details-show-Date-Created").html(Created.innerHTML);
         $("#view-Details-show-Purchases").html(Purchases.innerHTML);
         document.querySelector("#view-Details-show-IMG").setAttribute("src", document.querySelector(`#tbody > #${Id} > td.IMG-DATABASE > img`).getAttribute("src"));
        });

    });

});