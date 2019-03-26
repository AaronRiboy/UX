$(document).ready(function(e) {
    $("#status").css('color','#1e7e34');
    $("#status").click(function(){
       var change = $(this).html();
       if(change == "Completed"){
           $(this).html('Cancelled').css('color','#dc3545');
       }
       if(change == "Cancelled"){
            $(this).html('Completed').css('color','#1e7e34');
        }

    })
});
function sortRequestsTable(columnNumber) {
    //sorting requests table using table columns
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("requestsTable");
    switching = true;
    dir = "asc";
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName("TD")[columnNumber];
            y = rows[i + 1].getElementsByTagName("TD")[columnNumber];
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount ++;
        } else {
            if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }
}
