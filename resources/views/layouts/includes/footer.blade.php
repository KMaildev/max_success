</div>
</body>

<script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

{{-- DateTimePicker  --}}
<script src="{{ asset('assets/datetime/jquery.datetimepicker.js') }}"></script>

{{-- Datatable  --}}
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.3.2/js/dataTables.fixedHeader.min.js"></script>

{{-- DateTimePicker  --}}
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script src="{{ asset('assets/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/toastr/toastr.js') }}"></script>
<script src="{{ asset('assets/js/ui-toasts.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

@yield('script')

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            fixedHeader: true,
            ordering: true,
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],

            lengthMenu: [
                [50, 100, 200, 300, 400, -1],
                [50, 100, 200, 300, 400, "All"]
            ],
        });
    });

    $(document).ready(function() {
        $('.select2').select2({
            theme: "classic",
        });


        $('.select3').select2({
            theme: "classic",
        });
    });


    function exportExcel(tableExportId, type, fn, dl) {
        var today = new Date();
        var date = today.getFullYear() + '_' + (today.getMonth() + 1) + '_' + today.getDate();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var dateTime = date + '_' + time;

        var tableId = document.getElementById(tableExportId);
        var wb = XLSX.utils.table_to_book(tableId, {
            sheet: "sheet1"
        });
        return dl ?
            XLSX.write(wb, {
                bookType: type,
                bookSST: true,
                type: 'base64'
            }) :
            XLSX.writeFile(wb, fn || (`export_excel_${dateTime}.` + (type || 'xlsx')));
    }
</script>

</html>
