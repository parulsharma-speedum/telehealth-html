
$(document).ready(function() {
    $("#apm-doctorselection button").click(function(){
        var selectedDoctor;
        $.each($(".apm-selectdoc option:selected"), function(){            
            selectedDoctor=$(this).val();
        });
        $("#apm-selected").append("<a href='javascript:void(0);' class='fa-xs mb-2 mr-2 btn-pill btn btn-sm badge-outline-primary'>"+selectedDoctor+"<i class='fa fa-times ml-1'></i></a>");
        $("#apm-selected i").click(function(){
        $(this).parents('a').hide();
      });
    });
    $(".filtered-pills i").click(function(){
      $(this).parents('a').hide();
    });
    $(".card-aform #btn-1").click(function() { 
      $(".card-aform #page-2").addClass("active");
      $(".card-aform #page-1").removeClass("active");
      $("#btn-2").addClass("show");
      $("#btn-1").removeClass("show");
    });
    $(".card-aform #btn-2").click(function() { 
      $(".card-aform #page-3").addClass("active");
      $(".card-aform #page-2").removeClass("active");
      $("#btn-3").addClass("show");
      $("#btn-4").addClass("show");
      $("#btn-2").removeClass("show");
    });

});

function checkAll(bx) {
  var cbs = document.getElementsByTagName('input');
  for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
      cbs[i].checked = bx.checked;
    }
  }
}

// $(document).ready(function() {
// $(window).scroll(function() {
//    var st = $(this).scrollTop(); 
//    if( st >= 100 ) {
//    $(".pbanner-capsule").addClass("active"); 
//    $(".pbanner-static").removeClass("active"); 
//    }
//   }); 
//  }); 