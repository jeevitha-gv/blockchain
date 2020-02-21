$(document).ready(function () {
    debugger;
    $(".datepickerClass").each(function() {
        $(this).datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            changeMonth: true,
            changeYear: true,
            yearRange: "2017:2099"  
        });
    });
       
    
    //setTimeout(tableInit, 2000);
    var userCredentials = {
        'userId' : loggedInUser,
        'userRole' : loggedInUserRole
    }
    
    $.ajax({
        dataType: "json",
        type: "POST",
        url: "/freshgrc/php/risk/riskCreateList.php",
        data: userCredentials,
        success: success
    });
});

var table;

function tableInit() {
    table = $('#modaldetails').DataTable({
        select: {
            style: 'single',
            blurable: true
        },
            "searching":true,

            buttons: [
                { extend: 'print', className: 'btn dark btn-outline',text: '<span class="glyphicon glyphicon-print" data-toggle="tooltip" title="Print"></span>' },
                { extend: 'copy', className: 'btn red btn-outline' ,text: '<span class="glyphicon glyphicon-copy" data-toggle="tooltip" title="Copy"></span>'},
                { extend: 'pdf', className: 'btn green btn-outline' ,text: '<span class="glyphicon glyphicon-file" data-toggle="tooltip" title="PDF"></span>'},
                { extend: 'csv', className: 'btn purple btn-outline ' ,text: '<img src="/freshgrc/assets/images/csv.png" alt=csv width="20" height="20" data-toggle="tooltip" title="CSV"/>'},
                { extend: 'colvis', className: 'btn dark btn-outline', text: '<span class="glyphicon glyphicon-th-list" data-toggle="tooltip" title="Columns"></span>'}
            ],
            "pageLength": 20,

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        columnDefs: [ {
            targets: [0],
            visible: false
        } ],
        "ordering": false

    });

    table.on( 'order.dt search.dt', function () {
        table.column(1, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

}

function success(data) {
    buildHtmlTable(data);
    tableInit();
}

function buildHtmlTable(data) {
    var columns = addAllColumnHeaders(data);
    for (var i = 0; i < data.length; i++) {
        debugger
        var row$ = $('<tr/>');
        for (var colIndex = 0; colIndex < columns.length; colIndex++) {
            debugger
            var cellValue = data[i][columns[colIndex]];
            var auditstatus = data[i].status;
            if (colIndex == 6 && "approved" == auditstatus){
                cellValue="Published";
                row$.append($('<td class="btn"  style="width:114px; height:50% ; background-color:#5cb85c; color:#fff; text-align:center;margin: 10px;"/>').html(cellValue));   
            }
            else if (colIndex == 6 && "performed" == auditstatus){
                cellValue="Response Planned";
                row$.append($('<td class="btn" style="width:114px; height:50% ; background-color:#32c5d2; color:#fff; margin: 10px;"/>').html(cellValue));   
            }
            else if (colIndex == 6 && "published" == auditstatus){
                cellValue="Published";
              row$.append($('<td class="btn" style="width:114px; height:50% ; background-color:#F1C40F; color:#fff; margin: 10px;"/>').html(cellValue));   
            }
            else if (colIndex == 6 && "prepared" == auditstatus){
                cellValue="Checklist Assigned";
                row$.append($('<td  class="btn" style="width:114px; height:50% ; background-color: #00a8ff; color:#fff;margin: 10px;"/>').html(cellValue));   
            }
            else if (colIndex == 6 && "create" == auditstatus){
                cellValue="Audit Launched";
                row$.append($('<td class="btn" style="width:114px; height:50% ; background-color:#00FFFF; color:#fff; margin: 10px;"/>"').html(cellValue));   
            }
            else if (colIndex == 6 && "returned" == auditstatus){
                cellValue="Follow up planned";
                row$.append($('<td class="btn" style="width:114px; height:50% ; background-color:red; color:#fff; margin: 10px;"/>"').html(cellValue));   
            }
            else
            {
            if(colIndex == 1){
                row$.append($('<td/>').html(""));
            }
            if (cellValue == null) {
                cellValue = "";
            }

            row$.append($('<td/>').html(cellValue));
        }

        $("#modaldetails").append(row$);
    }
}
}

function addAllColumnHeaders(data) {
    var columnSet = [];
    var headerTr$ = $('<tr/>');

    for (var i = 0; i < data.length; i++) {
        var rowHash = data[i];
        for (var key in rowHash) {
            if ($.inArray(key, columnSet) == -1) {
                columnSet.push(key);
                headerTr$.append($('<th/>').html(key));
            }
        }
    }
    return columnSet;
}

function createRisk(){
    var selectedData = table.rows('.selected').data();
    window.location="/freshgrc/view/risk/riskIncidentPlan.php?incidentId=" + selectedData[0][0];
}