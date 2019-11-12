<?php $this->load->view('admin/noidung/head'); ?>

<div class="line"></div>

<div id="main_tour" class="wrapper">
  <?php $this->load->view('admin/message', $this->data); ?>
  <div class="widget">
  
    <div class="title">
      <span class="titleIcon"><input type="checkbox" name="titleCheck" id="titleCheck"></span>
      <h6>
        Danh sách Tour du lịch    
      </h6>
      <div class="num f12">Số lượng: <b><?php echo $total_rows?></b></div>
    </div>
    
    
    <table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
      
      <thead class="filter"><tr><td colspan="9">
        <form method="get" action="<?php echo admin_url('tour')?>" class="list_filter form">
          <table cellspacing="0" cellpadding="0"><tbody>
          
            <tr>
              <td  class="label"><label for="filter_id" >Mã số</label></td>
              <td class="item"><input type="text" placeholder="ma so" style="width:55px;" id="filter_id" value="<?php echo $this->input->get('id')?>" name="id"></td>
                   
              <td style="width:150px">
              <input type="submit" value="Lọc" class="button blueB">
              <input type="reset" onclick="window.location.href = '<?php echo admin_url('tour')?>'; " value="Reset" class="basic">
              </td>           
            </tr>
          </tbody></table>
        </form>
      </td></tr></thead>
      
      <thead>
        <tr>
          <td style="width:21px;"><img src="<?php echo public_url('admin/images')?>/icons/tableArrows.png"></td>
          <td style="width:30px;">Mã số</td>
          <td>Ảnh Banner</td>
          <td style="">Mô tả</td>
          <td style="">Nội dung</td>
          <td style="width:120px;">Hành động</td>
        </tr>
      </thead>
      
      <tfoot class="auto_check_pages">
        <tr>
          <td colspan="9">
             <div class="list_action itemActions">
                <a url="<?php echo admin_url('tour/delete_all')?>" class="button blueB" id="submit" href="#submit">
                  <span style="color:white;">Xóa hết</span>
                </a>
             </div>
          </td>
        </tr>
      </tfoot>
      
      <tbody class="list_item">
           <?php foreach ($list as $row):?>
          <tr class="row_<?php echo $row->id?>">
          <td><input type="checkbox" value="<?php echo $row->id?>" name="id[]"></td>
          
          <td class="textC"><?php echo $row->id?></td>
          
          <td>
          <div class="image_thumb">
            <img height="50" src="<?php echo base_url('upload/slide/'.$row->image_link)?>">
            <div class="clear"></div>
          </div>
          
          <a target="_blank" title="" class="tipS" href="">
              <b><?php echo $row->ten?></b>
          </a>
          </td>
 
          <td class="textC"><?= $row->tieude ?></td>
          <td class="textC"><?= $row->noidung ?></td>
    
          <td class="option textC">
           <!--  <a title="Xem chi tiết sản phẩm" class="tipS" target="_blank" href="tour/view/9.html">
                <img src="<?php echo public_url('admin/images')?>/icons/color/view.png">
             </a> -->
             
             <a class="tipS" title="Chỉnh sửa" href="<?php echo admin_url('slide/edit/'.$row->id)?>">
              <img src="<?php echo public_url('admin/images')?>/icons/color/edit.png">
            </a>
            
            <a class="tipS verify_action" title="Xóa" href="<?php echo admin_url('slide/del/'.$row->id)?>">
                <img src="<?php echo public_url('admin/images')?>/icons/color/delete.png">
            </a>
          </td>
        </tr>
        <?php endforeach;?>
       </tbody>
      
    </table>
  </div>
  
</div>