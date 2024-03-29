<!-- head -->
<?php $this->load->view('admin/admin/head',$this->data); ?>
<div class="line"></div>
<div class="wrapper">
	<?php $this->load->view('admin/message', $this->data); ?>
	<div class="widget">
		<div class="title">
			<h6>Danh sách admin</h6>
		 	<div class="num f12">Tổng số: <b><?= $total ?></b></div>
		</div>
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable withCheck" id="checkAll">
			<thead>
				<tr>
					<td style="width:80px;">Mã số</td>
					<td>Họ và tên</td>
					<td>Username</td>
					<td style="width:100px;">Hành động</td>
				</tr>
			</thead>
 			
			<tbody>
				<?php foreach ($list as $row): ?>			
				<tr>
						<td class="textC"><?= $row->id ?></td>
						<td><span title="<?= $row->hoten ?>" class="tipS"><?= $row->hoten ?></span></td>
						<td><span title="<?= $row->username ?>" class="tipS"><?= $row->username ?></span></td>
						<td class="option">
							 <a href="<?= admin_url('admin/edit/'.$row->id) ?>" title="Chỉnh sửa" class="tipS ">
							<img src="<?= public_url('admin') ?>/images/icons/color/edit.png" />
							</a>
							<a href="<?= admin_url('admin/delete/'.$row->id) ?>" title="Xóa" class="tipS verify_action" >
							    <img src="<?= public_url('admin') ?>/images/icons/color/delete.png" />
							</a>
						</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>	
	</div>
</div>
<div class="clear mt30"></div>