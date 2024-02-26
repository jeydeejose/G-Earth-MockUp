<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>

<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>


    <script>
        new DataTable('#drTable', {      
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                    }
            },
            ajax: 'table/dr.txt',
            columnDefs: [
                {
                    data: null,
                    defaultContent: '<button class="btn btn-primary btn-sm"><i class="fas fa-fw fa-eye"></i></button> <button class="btn btn-primary btn-sm"><i class="fas fa-fw fa-pen"></i></button> <a href="print.php" target="_blank"><button class="btn btn-primary btn-sm" id="printdr"><i class="fas fa-fw fa-print"></i></button></a>',
                    targets: -1
                }
            ],
            search: {
            return: true
            }
        });

        new DataTable('#colTable', {
            ajax: 'table/colFile.txt',
            columnDefs: [
                {
                    data: null,
                    defaultContent: '<button class="btn btn-primary btn-sm"><i class="fas fa-fw fa-pen"></i></button></button>',
                    targets: -1
                }
            ],
            search: {
            return: true
            }
        });

        new DataTable('#changeReqTable', {
            ajax: 'table/changeReqFile.txt',
            columnDefs: [
                {
                    data: null,
                    defaultContent: '<button class="btn btn-primary btn-sm"><i class="fas fa-fw fa-check"></i></button> <button class="btn btn-danger btn-sm"><i class="fas fa-fw fa-times"></i></button>',
                    targets: -1
                }
            ],
            search: {
            return: true
            }
        });
        
        new DataTable('#customerTable', {
            ajax: 'table/customer.txt',
            columnDefs: [
                {
                    data: null,
                    defaultContent: '<button class="btn btn-primary btn-sm"><i class="fas fa-fw fa-pen"></i></button></button>',
                    targets: -1
                }
            ],
            search: {
            return: true
            }
        });
        
        new DataTable('#productTable', {
            ajax: 'table/product.txt',
            columnDefs: [
                {
                    data: null,
                    defaultContent: '<button class="btn btn-primary btn-sm"><i class="fas fa-fw fa-pen"></i></button></button>',
                    targets: -1
                }
            ],
            search: {
            return: true
            }
        });
        
        new DataTable('#accountTable', {
            ajax: 'table/account.txt',
            columnDefs: [
                {
                    data: null,
                    defaultContent: '<button class="btn btn-primary btn-sm"><i class="fas fa-fw fa-pen"></i></button></button>',
                    targets: -1
                }
            ],
            search: {
            return: true
            }
        });
      
        table.on('click', 'button', function (e) {
            let data = table.row(e.target.closest('tr')).data();
            alert(data[0]);
        });
    </script>
