<footer class="footer">
    <div class="container-fluid">

        <div class="copyright float-right">
            All Right Reserved By<a href="#"> Ipaayos mo Developers </a> &copy; 2022 

        </div>
    </div>
</footer>
</div>
</div>

<!--   Core JS Files   -->
<script src="<?php echo base_url('/asset2/js/core/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('/asset2/js/core/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('/asset2/js/core/bootstrap-material-design.min.js'); ?>"></script>
<script src="<?php echo base_url('/asset2/js/plugins/perfect-scrollbar.jquery.min.js'); ?>"></script>
<!-- Plugin for the momentJs  -->
<script src="<?php echo base_url('/asset2/js/plugins/moment.min.js'); ?>"></script>
<!--  Plugin for Sweet Alert -->
<script src="<?php echo base_url('/asset2/js/plugins/sweetalert2.js'); ?>"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url('/asset2/js/plugins/jquery.validate.min.js'); ?>"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo base_url('/asset2/js/plugins/jquery.bootstrap-wizard.js'); ?>"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo base_url('/asset2/js/plugins/bootstrap-selectpicker.js'); ?>"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?php echo base_url('/asset2/js/plugins/bootstrap-datetimepicker.min.js'); ?>"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="<?php echo base_url('/asset2/js/plugins/jquery.dataTables.min.js'); ?>"></script>
<!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?php echo base_url('/asset2/js/plugins/bootstrap-tagsinput.js'); ?>"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url('/asset2/js/plugins/jasny-bootstrap.min.js'); ?>"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?php echo base_url('/asset2/js/plugins/fullcalendar.min.js'); ?>"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="<?php echo base_url('/asset2/js/plugins/jquery-jvectormap.js'); ?>"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url('/asset2/js/plugins/nouislider.min.js'); ?>"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="<?php echo base_url('/asset2/js/plugins/arrive.min.js'); ?>"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->

<!--  Notifications Plugin    -->
<script src="<?php echo base_url('/asset2/js/plugins/bootstrap-notify.js'); ?>"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url('/asset2/js/material-dashboard.js?v=2.1.2'); ?>" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('/asset2/demo/demo.js'); ?>"></script>


<!-- old-->

<script src="<?php echo base_url('assets/node_modules/chart.js/dist/Chart.min.js'); ?>"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable();
        $('.res_table').DataTable();

        jQuery('#allusers').dataTable({
        });

        jQuery('#notification_table1').dataTable({
            "lengthMenu": [[10, 50, 100, -1], [10, 50, 100, "All"]],
        });
    });

    $(document).ready(function () {
        $("#catCommission").click(function () {
            $("#extra").hide();
        });
        $("#flatCommission").click(function () {
            $("#extra").show();
        });
    });
</script>

<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
    $(document).ready(function () {
        var id;
        $(document).on('click', '.active_rating', function () {
            jQuery(this).parent().addClass('tets');

            var rating_id = $('.tets').find('input[type=text]').val();
            //=$(".yourClass : input").val();     
            //console.log(rating_id);
            var label_string = $(this).text().trim();
            if (label_string == "Approve")
            {
                id = 0;
                $(this).toggleClass("btn-danger btn-success");
                $(this).text("Pending");
            } else if (label_string == "Pending")
            {
                id = 1;
                $(this).toggleClass("btn-danger btn-success");
                $(this).text("Approve");
            }
            var id_String = 'id=' + id;

            $.ajax({
                type: "POST",
                url: base_url + 'Admin/change_status_rating',

                data: {
                    id: id,
                    rating_id: rating_id
                },
                cache: false,
                success: function (html)
                {
                    // console.log(html);
                }
            });
            jQuery(this).parent().removeClass('tets');
            //return false;  
        });
    });

    $(document).ready(function () {
        var id;
        $(document).on('click', '.active_user', function () {
            jQuery(this).parent().addClass('tets');

            var user_id = $('.tets').find('input[type=text]').val();
            //=$(".yourClass : input").val();     
            //console.log(rating_id);
            var label_string = $(this).text().trim();
            if (label_string == "Active")
            {
                id = 0;
                $(this).toggleClass("btn-danger btn-success");
                $(this).text("Deactive");
            } else if (label_string == "Deactive")
            {
                id = 1;
                $(this).toggleClass("btn-danger btn-success");
                $(this).text("Active");
            }
            var id_String = 'id=' + id;

            $.ajax({
                type: "POST",
                url: base_url + 'Admin/change_status_artist',

                data: {
                    id: id,
                    user_id: user_id
                },
                cache: false,
                success: function (html)
                {
                    // console.log(html);
                }
            });
            jQuery(this).parent().removeClass('tets');
            //return false;  
        });
    });

    $(document).ready(function () {
        var id;
        $(document).on('click', '.active_category', function () {
            jQuery(this).parent().addClass('tets');

            var user_id = $('.tets').find('input[type=text]').val();
            //=$(".yourClass : input").val();     
            //console.log(rating_id);
            var label_string = $(this).text().trim();
            if (label_string == "Active")
            {
                id = 0;
                $(this).toggleClass("btn-danger btn-success");
                $(this).text("Deactive");
            } else if (label_string == "Deactive")
            {
                id = 1;
                $(this).toggleClass("btn-danger btn-success");
                $(this).text("Active");
            }
            var id_String = 'id=' + id;

            $.ajax({
                type: "POST",
                url: base_url + 'Admin/change_status_category',

                data: {
                    id: id,
                    user_id: user_id
                },
                cache: false,
                success: function (html)
                {
                    // console.log(html);
                }
            });
            jQuery(this).parent().removeClass('tets');
            //return false;  
        });

        $(document).on('click', '.active_subcategory', function () {
            jQuery(this).parent().addClass('tets');

            var user_id = $('.tets').find('input[type=text]').val();
            //=$(".yourClass : input").val();     
            //console.log(rating_id);
            var label_string = $(this).text().trim();
            if (label_string == "Active")
            {
                id = 0;
                $(this).toggleClass("btn-danger btn-success");
                $(this).text("Deactive");
            } else if (label_string == "Deactive")
            {
                id = 1;
                $(this).toggleClass("btn-danger btn-success");
                $(this).text("Active");
            }
            var id_String = 'id=' + id;

            $.ajax({
                type: "POST",
                url: base_url + 'Admin/change_status_subcategory',

                data: {
                    id: id,
                    user_id: user_id
                },
                cache: false,
                success: function (html)
                {
                    // console.log(html);
                }
            });
            jQuery(this).parent().removeClass('tets');
            //return false;  
        });
    });

    $(document).ready(function () {
        //called when key is down
        $(".num_only").bind("keydown", function (event) {
            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
                    event.keyCode == 190 || event.keyCode == 110 ||
                    // Allow: Ctrl+A
                            (event.keyCode == 65 && event.ctrlKey === true) ||
                            // Allow: Ctrl+C
                                    (event.keyCode == 67 && event.ctrlKey === true) ||
                                    // Allow: Ctrl+V
                                            (event.keyCode == 86 && event.ctrlKey === true) ||
                                            // Allow: home, end, left, right
                                                    (event.keyCode >= 35 && event.keyCode <= 39)) {
                                        // let it happen, don't do anything
                                        return;
                                    } else {
                                        // Ensure that it is a number and stop the keypress
                                        if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
                                            event.preventDefault();
                                        }
                                    }
                                });
                    });
            $('#numberbox').keyup(function () {
                if ($(this).val() > 99) {
                    alert("No numbers above 99. Please use less then 100");
                    $(this).val('99');
                }
            });
</script>

<script>
            jQuery('.delete').click(function (event) {
                if (!confirm('Really Delete?')) {
                    event.preventDefault();
                }
            })
</script>

<!--old js-->

</body>

</html>