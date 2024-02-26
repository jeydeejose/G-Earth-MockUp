<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script>
        new DataTable('#drTable', {
            ajax: 'table/dr.txt'
        });

        new DataTable('#colTable', {
            ajax: 'table/colFile.txt'
        });

        new DataTable('#changeReqTable', {
            ajax: 'table/changeReqFile.txt'
        });
        
        new DataTable('#customerTable', {
            ajax: 'table/customer.txt'
        });
        
        new DataTable('#productTable', {
            ajax: 'table/product.txt'
        });
        
        new DataTable('#accountTable', {
            ajax: 'table/account.txt'
        });
    </script>

