$(document).ready(function ()
{
    $("span.bttnn1").on("click", function () {
        $('.insideoculto').toggle();
    });
});
$('span.bttnn').on('click', function() {
   $('span.bttnn').toggleClass('active');
   }); 