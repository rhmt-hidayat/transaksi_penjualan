<div class="footer">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> <a href="https://rhmt-hidayat.github.io/web_portofolio/" target="_blank">Rahmat Hidayat</a> &copy; 2025
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
	<script src="<?php echo base_url().'assets/js/myscript.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery-3.1.1.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/popper.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/plugins/metisMenu/jquery.metisMenu.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/plugins/slimscroll/jquery.slimscroll.min.js'; ?>"></script>

    <script src="<?php echo base_url().'assets/js/plugins/dataTables/datatables.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/plugins/dataTables/dataTables.bootstrap4.min.js'; ?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url().'assets/js/inspinia.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/plugins/pace/pace.min.js'; ?>"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

</body>

</html>
