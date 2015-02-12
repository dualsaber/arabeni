/*jshint -W117 */
$(document).ready(function() {
    
    

    $('#content').load('liste.php');
    
    $('ul#nav li a').click(function() {
        var page = $(this).attr('href');
        $('#content').load(page + '.php');
        return false;
        });


});


