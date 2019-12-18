 <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by ChoDacSanSach. Designed and Developed by team <a href="https://fpolyhub.com">FpolyHub</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- CK Editor -->
    <script src="../public/admin/assets/ckeditor/ckeditor.js"></script>
     <script>
    CKEDITOR.replace( 'post_content' );
    </script>
    
    <!-- Jquery -->
    <script src="../public/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../public/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../public/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../public/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../public/admin/assets/extra-libs/sparkline/sparkline.js"></script>

    
 <script type="text/javascript">
    function deleteConfirm(){
        var result = confirm("Bạn có chắc chắn xóa mục đã chọn?");
        if (result) {
            return true;
        }else{
            return false;
        }
    }
    $(document).ready(function(){
        $('#select_all').on('click', function(){
            if (this.checked) {
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });
        $('.checkbox').on('click', function(){
            if ($('.checkbox:checked').length == $('.checkbox').length) {
                $('#select_all').prop('checked', true);
            }else{
                $('#select_all').prop('checked', false);
            }
        });
    });
</script>


    <!--Wave Effects -->
    <script src="../public/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../public/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../public/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../public/admin/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../public/admin/assets/libs/flot/excanvas.js"></script>
    <script src="../public/admin/assets/libs/flot/jquery.flot.js"></script>
    <script src="../public/admin/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../public/admin/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../public/admin/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../public/admin/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../public/admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../public/admin/dist/js/pages/chart/chart-page-init.js"></script>

    <script src="../public/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../public/admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../public/admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
</body>

</html>