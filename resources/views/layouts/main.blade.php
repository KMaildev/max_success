<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-menu-fixed " dir="ltr"
    data-theme="theme-default" data-assets-path="../../assets/" data-template="horizontal-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Agency Management</title>
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <link rel="canonical" href="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/datatable/css/select.dataTables.min.css') }}">
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script> --}}
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <link rel="stylesheet" href="https://skgroupmm.com/css/table.css" />
    <link rel="stylesheet" href="https://skgroupmm.com/css/scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/datetime/jquery.datetimepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/toastr/toastr.css') }}" />
</head>
<style>
    .tbbg {
        background-color: #296166;
    }
</style>

<body>
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            @include('layouts.includes.top')
            <div class="layout-page">
                <div class="content-wrapper">
                    @include('layouts.includes.menu')
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @include('layouts.includes.alert')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    <script src="{{ asset('assets/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/sweetalert2/sweet-alert.init.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/js/forms-selects.js') }}"></script>

    <script src="{{ asset('assets/datetime/jquery.datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/custom/custom.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/datatable/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/toastr/toastr.js') }}"></script>
    <script src="{{ asset('assets/js/ui-toasts.js') }}"></script>

    @yield('script')
    <script>
        $('.del_confirm').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                text: "Are you sure you want to delete this record?",
                showCancelButton: true,
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false,
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                console.log(willDelete.value);
                if (willDelete.value === true) {
                    form.submit();
                }
            });
        });




        var Days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]; // index => month [0-11]
        $(document).ready(function() {
            var option = '<option value="day">day</option>';
            var selectedDay = "day";
            for (var i = 1; i <= Days[0]; i++) { //add option days
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#day').append(option);
            $('#day').val(selectedDay);

            var option = '<option value="month">month</option>';
            var selectedMon = "month";
            for (var i = 1; i <= 12; i++) {
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#month').append(option);
            $('#month').val(selectedMon);

            var option = '<option value="month">month</option>';
            var selectedMon = "month";
            for (var i = 1; i <= 12; i++) {
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#month2').append(option);
            $('#month2').val(selectedMon);

            var d = new Date();
            var option = '<option value="year">year</option>';
            selectedYear = "year";
            for (var i = 1930; i <= d.getFullYear(); i++) { // years start i
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#year').append(option);
            $('#year').val(selectedYear);
        });

        function isLeapYear(year) {
            year = parseInt(year);
            if (year % 4 != 0) {
                return false;
            } else if (year % 400 == 0) {
                return true;
            } else if (year % 100 == 0) {
                return false;
            } else {
                return true;
            }
        }

        function change_year(select) {
            if (isLeapYear($(select).val())) {
                Days[1] = 29;

            } else {
                Days[1] = 28;
            }
            if ($("#month").val() == 2) {
                var day = $('#day');
                var val = $(day).val();
                $(day).empty();
                var option = '<option value="day">day</option>';
                for (var i = 1; i <= Days[1]; i++) { //add option days
                    option += '<option value="' + i + '">' + i + '</option>';
                }
                $(day).append(option);
                if (val > Days[month]) {
                    val = 1;
                }
                $(day).val(val);
            }
        }

        function change_month(select) {
            var day = $('#day');
            var val = $(day).val();
            $(day).empty();
            var option = '<option value="day">day</option>';
            var month = parseInt($(select).val()) - 1;
            for (var i = 1; i <= Days[month]; i++) { //add option days
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $(day).append(option);
            if (val > Days[month]) {
                val = 1;
            }
            $(day).val(val);

        }
    </script>
</body>

</html>
