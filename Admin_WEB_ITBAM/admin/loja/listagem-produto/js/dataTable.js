var TableManageResponsive = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableResponsive();
        }
    };
}();

var handleDataTableResponsive = function() {
	"use strict";

    if ($('#data-table').length !== 0) {
        $('#data-table').DataTable({
            responsive: true,
						"language": {
		          "search": "Procurar:"
		        },
						"order": [[ 0, 'desc' ]],
            ajax: 'routes/data-table.php?type=default',
        });
    }
};

function refreshTable()
{
    var table = $('#data-table').DataTable();
    table.ajax.reload();
}
