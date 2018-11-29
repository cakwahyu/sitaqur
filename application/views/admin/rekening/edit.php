		<?php $rek = $query_rekening->row(); ?>
		<?php echo $__sidebar; ?>

	    <!-- Page Content  -->
	    <div id="content">

	        <?php echo $__header; ?>

	        <div class="card">
	        	<div class="card-body">
			    	<div class="row">
			    		<div class="col-12">
			    		  	<h4 class="text-primary"><b><i class="icon icon-pencil"> </i> EDIT REKENING</b></h4>
			    		</div>
			    	</div>
			    	<div class="row">
						<div class="col-md-6">
							<form action="<?php echo base_url() ?>admin/rekening__up" method="POST">
								<input type="hidden" value="<?php echo $rek->REKENING_ID; ?>" name="ID">
								<fieldset class="form-group">
									<label>Nama BANK</label><span class="required">*</span>
									<input type="text" class="form-control" placeholder="Enter NIM" name="NAMA" value="<?php echo $rek->REKENING_NAMA; ?>" required="">
								</fieldset>
								<fieldset class="form-group">
									<label>NO</label><span class="required">*</span>
									<input type="text" class="form-control" placeholder="Enter nama" name="NO" value="<?php echo $rek->REKENING_NO; ?>" required="">
								</fieldset>
								<fieldset class="form-group">
									<label>AN</label><span class="required">*</span>
									<input type="text" class="form-control" placeholder="Enter nama" name="AN" value="<?php echo $rek->REKENING_AN; ?>" required="">
								</fieldset>
								<button type="submit" class="btn btn-primary">Simpan</button>
								<a href="<?php echo base_url() ?>admin/rekening" class="btn btn-light">Kembali</a>
							</form>
						</div>
						<div class="col-md-6">
							<p>Perhatian</p>
							<span class="required">*</span> Harus diisi
						</div>
					</div>
				</div>
			</div>
	    </div>
	</div>

	<script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
	</body>
</html>