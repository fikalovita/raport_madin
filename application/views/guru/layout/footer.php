 </main>
 <footer class="py-4 bg-light mt-auto">
     <div class="container-fluid px-4">
         <div class="d-flex align-items-center justify-content-between small">
             <div class="text-muted">Copyright &copy; Madin Darussalam <?= date('Y') ?></div>
             <div>
                 <a href="#">Privacy Policy</a> &middot;
                 <a href="#">Terms &amp; Conditions</a>
             </div>
         </div>
     </div>
 </footer>
 </div>
 <script>
     $(document).ready(function() {
         $('#tabel_guru').DataTable();
         $('#tabel-kelas').DataTable();
         $('#tabel_nilai').DataTable();
     });
 </script>
 <script>

 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="<?= base_url('assets/sweetAlert.js') ?>"></script>
 <script src="<?= base_url('assets/form_validation.js') ?>"></script>
 </body>

 </html>