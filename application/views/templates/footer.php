<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyleft &copy; Created By Hilman-12184783 <?= date('Y')?></div>
                            <div>
                                <a href="#"><i class="fab fa-facebook-f fa-fw"></i>Facebook</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
</div> 
<a class="scroll-to-top rounded" href="#page-top"> 
    <i class="fas fa-angle-up"></i></a>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 

<script src="<?= base_url(); ?>assets/user/js/bootstrap.js"></script> 
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script> 
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 

<!-- Core plugin JavaScript--> 
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script> 

<!-- Custom scripts for all pages--> 
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script> 
<script> $('.alert').alert().delay(3000).slideUp('slow'); </script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src=" <?= base_url('assets/') ?>demo/datatables-demo.js"></script>
        <script>$(document).ready(function(){
            $('#table1').DataTable()
        }
    )</script> 
    <script src="<?- base_url();?>assets/js/sweetalert2.all.min.js">
        
    </script>
<script>
    const tombol = document.querySelector('#tombol');
    tombol.addEventListener('click', function(){
      swal({
        title: '<?= $judul ?>',
        text: 'Data Berhasil Ditamabah'
        type: 'success'

      });
    });
</script>
</body> 
</html>