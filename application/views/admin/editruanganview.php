<body style="background-color:rgb(247,247,247) ">
	<div class="col-md-12 col-sm-9 col-xs-12">
		<div class="col-md-12 col-sm-9 col-xs-12">
			<div class="right_col" role="main" style="margin-left:0px!important">
				<div class="page-title">
					<div class="title_right">
						<h3><a href="<?=base_url()?>/Admin/"><i class="fa fa-chevron-left"></i></a> <?=$title?></h3>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
			<div class="col-md-12 col-sm-12 col-xs-12">

				<div class="x_panel">

					<?=form_open('/Admin/do_edit')?>
					<div class="x_content">
						<br>
						<?php foreach($ruangans as $ruangan_item):?>
							<div class="form-horizontal form-label-left">
								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">ID Room</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="nama_ruangan" class="form-control col-md-7 col-xs-12" value="<?=$ruangan_item['nama_ruangan']?>">
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Room</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="ruangan_nama" class="form-control col-md-7 col-xs-12" value="<?=$ruangan_item['ruangan_nama']?>">
									</div>
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Capacity</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="number" min="0" name="kapasitas_ruangan" value="<?=$ruangan_item['kapasitas_ruangan']?>" class="form-control col-md-7 col-xs-12">
									</div>
									<!-- untuk mengambil id -->
									<input type="hidden" name="id" value="<?=$ruangan_item['id_ruangan']?>">
								</div>

								<div class="form-group col-md-12">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<input type="number" min="0" name="showroom" value="<?=$ruangan_item['showroom']?>" class="form-control col-md-7 col-xs-12">
									</div>
									<!-- untuk mengambil id -->
									<input type="hidden" name="id" value="<?=$ruangan_item['id_ruangan']?>">
								</div>
							</div>

						<?php endforeach ?>
						<div class="form-group pull-right">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
					<?=form_close()?>
				</div>				
			</div>
		</div>
	</div>
</div>
</body>