$(document).ready(function() {
    var table = $('#example').DataTable({
        "lengthMenu": [10, 25, 50, 100], // Define the options for results per page
        "pageLength": 10, // Set the default page length
        buttons: [
            // "copy", "csv", "excel",
            {
                extend: "print"
            },
            {
                extend: "csv",
                text: 'CSV',
                className: 'btn-csv'
            },
            {
                extend: 'excel',
                text: 'Excel',
                className: 'btn-excel',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                }

            }
            // {
            //     extend: ""
            // }
        ],
        dom: 'Bfrtip',
        language: {
            paginate: {
                next: '<button class="indicate mx-2">Next</button>',
                previous: '<button class="indicate">Back</button>'
            }
        },
        "bPaginate": true,
        "sPaginationType": "simple",
    });

    
    $('#printButton').on('click', function() {
        // Trigger the print function of DataTables
        table.button( '.buttons-print' ).trigger();
    });
    

    $('#csvButton').on('click', function() {
        table.button('.btn-csv').trigger();
    });

    $('#excelButton').on('click', function() {
        table.button('.btn-excel').trigger();
    });

    // toggle column
    $('.toggle-vis').on('click', function (e) {
        e.preventDefault();
     
        // Get the column API object
        var column = table.column($(this).attr('data-column'));
     
        // Toggle the visibility
        column.visible(!column.visible());

        $(this).find('.iconify').toggle();
    });

    $('.buttons-copy, .buttons-csv, .buttons-print').addClass('d-none');

    // Append buttons container to the designated element
    // table.buttons().container().appendTo($('#buttons'));
});
