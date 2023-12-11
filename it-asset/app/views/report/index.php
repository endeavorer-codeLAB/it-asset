<?php $no=0; ?>
<div class="row">
	<div id="msg-alert">
		<?php
			Flasher::msgInfo();
		?>
	</div>	
	<div class="col-md-12">
		<a href="<?= BASEURL; ?>/report/index" class="btn btn-primary mb-3">Create New User</a>
	</div>
	<div class="col-xs-12">		
		<br>
		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th width="50px;">No.</th>
						<th width="120px;">Username</th>
						<th>Email</th>
						<th>Name</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($data['rdata'] as $rdata) :?>
						<td><?= $rdata['assetNum'];?></td>
					<?php endforeach; ?>				
				</tbody>
			</table>
		</div>
	</div>
</div>