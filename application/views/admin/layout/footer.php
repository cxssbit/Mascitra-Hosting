        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?=base_url('assets/admin/js/main.js')?>"></script>

    <script src="<?=base_url('assets/admin/js/lib/data-table/datatables.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/js/lib/data-table/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/js/init/datatables-init.js')?>"></script>
    <script src="<?=base_url('assets/js/standalone/selectize.js')?>"></script>

    <script src="<?=base_url('assets/ckeditor/ckeditor.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap-notify.js')?>"></script>

    <script src="<?=base_url('assets/js/myjs.js')?>"></script>

    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    <?php $this->form_validation->set_error_delimiters('<script>notify("', '")</script>');?>
    <?=validation_errors()?>
    <?php if (!empty($this->session->flashdata('info'))) {
      echo "<script>notify('".$this->session->flashdata('info')."')</script>";
    }?>
<script type="text/javascript">
$('#multiple').selectize({
    persist: false,
    createOnBlur: true,
    create: true
});
</script>
</body>
</html>