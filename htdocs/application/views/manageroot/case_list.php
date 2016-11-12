<?php $this->load->view('/manageroot/admin_header'); ?>
<style type="text/css">
    #main_center h1 { display:inline; margin-left:20px; height: 65px; line-height: 65px; text-indent: 15px;  }
    #main_center form { display:inline; margin-left:100px;}
    #main_center .form-control {width:150px;}
    table.table { width: 98%; margin: 0 auto; }
</style>
<div id="main_center">
    <div style="border-bottom: 1px solid #eee;">
        <h1>客户案例列表</h1>
        <form class="form-inline" method="get" action="<?php echo base_url('manageroot/customer_case/case_list'); ?>">
          <select  class="form-control" name="product_id">
            <option value="">请选择所属产品</option>
            <?php if(!empty($product_catgory)): ?>
              <?php foreach($product_catgory as $k => $v): ?>
                <option value="<?php echo $v['product_id']; ?>" <?php if(!empty($product_id) && $product_id == $v['product_id']): ?>selected="selected"<?php endif; ?>><?php echo $v['product_name']; ?></option>
              <?php endforeach; ?>
            <?php endif; ?>
          </select>
          <input class="input-large" type="text" name="keyword" value="<?php if(!empty($keyword)): ?><?php echo $keyword; ?><?php endif; ?>" placeholder="请输入  案例名称 或 案例id" />
          <input class="input-large" type="submit" value="搜索" />
        </form>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>案例编号</th>
            <th>所属产品</th>
            <th>案例名称</th>
            <!-- <th>排序</th> -->
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($list)): ?>
            <?php foreach ($list as $k => $v): ?>
                <tr>
                    <td><?php echo $v['id']; ?></td>
                    <td><?php echo $v['product_name']; ?></td>
                    <td><?php echo $v['case_name']; ?></td>
                    <!-- <td><input class="span1" type="text" value="<?php echo $v['order']; ?>"></td> -->
                    <td>
                        <a href="<?php echo site_url('manageroot/customer_case/case_edit/' . $v['id']); ?>"><i class="icon-pencil"></i> 编辑</a>
                        <a href="<?php echo site_url('manageroot/customer_case/case_delete/' . $v['id']); ?>"><i class="icon-trash"></i> 删除</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>

    </table>
    <?php echo $pages; ?>
</div>
<?php $this->load->view('/manageroot/admin_footer'); ?>