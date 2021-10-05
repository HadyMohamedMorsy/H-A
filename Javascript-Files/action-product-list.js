$(document).ready(function(){
    
    $(".t-body .last-Action a").each(function(index , i) {

        $(this).on("click", function(e){



            e.preventDefault();


                var boolKey = $(this).data('module');

                $(boolKey).removeClass('remove-Delete');
    
                var  retindex = index;
    
                let Id = "T" + retindex;
    
                 $(this).parent().parent().attr("id", Id);
    
              let UserName =  document.querySelector(`#tbody > #${Id} > td.Username-Edit-Module`);
              let Category =  document.querySelector(`#tbody > #${Id} > td.HA-C-L-Category-Name`);
              let Qty =  document.querySelector(`#tbody > #${Id} > td.HA-P-Qty`);
              let Price =  document.querySelector(`#tbody > #${Id} > td.HA-P-Price`);
              let Status =  document.querySelector(`#tbody > #${Id} > td.HA-P-Status`);
    
             // Form
              $('#Edit-Username').val(UserName.innerHTML);
              $('#Catagroy-Name').val(Category.innerHTML);
              $("#Status").val(Status.innerHTML);
    
    
             //   View Show
             $("#view-Details-show-name").html(UserName.innerHTML);
             $("#view-Details-show-Catagroy").html(Category.innerHTML);
             $("#view-Details-show-Qty").html(Qty.innerHTML);
             $("#view-Details-show-Date-Price").html(Price.innerHTML);
             $("#view-Details-show-Status").html(Status.innerHTML);
             document.querySelector("#view-Details-show-IMG").setAttribute("src", document.querySelector(`#tbody > #${Id} > td.IMG-DATABASE > img`).getAttribute("src"));


        });

    });

});