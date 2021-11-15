<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Web Programming Univ. BSI with Bootsrap SB Admin 2 <?= date('Y'); ?></span>
    </div>
  </div>
</footer>
<!-- End of footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button -->
<a href="#page-top" class="scroll-to-top rounded">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal -->
<div class="modal fade" id="#logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <div class="modal-body">Pilih "Logout" di bawah jika kamu yakin sudah selesai.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</buttonc>
          <button class="btn btn-primary" href="<?= base_url('autentifikasi/logout'); ?>"></button>
      </div>
    </div>
  </div>
</div>

<!-- Bootsrap core Javascript -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootsrap/js/bootsrap.bundle.min.js"></script>

<!-- Core plugin JavaScript -->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages -->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script>
$('.custom-file-input').on('change', function() {
  let fileName = $(this).val().split('\\').pop();
  $(this).next('custom-file-input').addClass("selected").html(fileName);
});

$(document).ready(function() {
  $("#table-datatable").dataTable();
});
$('.alert-message').alert().delay(3500).slideUp('slow');
</script>

</body>

</html>