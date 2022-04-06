 </main>
 <footer class="py-4 bg-light mt-auto">
     <div class="container-fluid px-4">
         <div class="d-flex align-items-center justify-content-between small">
             <div class="text-muted">Copyright &copy; Madin Darussalam <?= date('Y') ?></div>
             <div>
                 <a href="#">Credits By</a> &middot;
                 <a href="#">FS D-Studio</a>
             </div>
         </div>
     </div>
 </footer>
 </div>
 <script>
     $(document).ready(function() {
         $('#tabel_guru').DataTable();
         $('#tabel-kelas').DataTable();
         $('#tabel_pelajaran').DataTable();
     });
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
 <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="<?= base_url('assets/sweetAlert.js') ?>"></script>
 <script src="<?= base_url('assets/form_validation.js') ?>"></script>
 </body>

 </html>