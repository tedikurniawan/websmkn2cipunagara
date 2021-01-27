            <div class="footer">
                        <div class="container-fluid">
                            <div class="section">
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Website SMKN 2 Cipunagara &copy; 2021</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
</body>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>template/back-end/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>template/back-end/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>template/back-end/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>template/back-end/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url()?>template/back-end/vendor/datatables/jquery.dataTables.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url()?>template/back-end/js/demo/datatables-demo.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
                $(document).ready(function() {
                    $('#dataTables-example').DataTable({
                            responsive: true
                    });
                });
            </script>

    <!-- CKEDITOR -->
    <script src="<?= base_url()?>ckeditor/ckeditor.js"></script>
    <script src="<?= base_url()?>ckeditor/samples/js/sample.js"></script>
            <script>
                initSample();
            </script>
</html>