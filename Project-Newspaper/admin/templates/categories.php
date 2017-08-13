<?php 
	if($user){
		if($data_user['position'] == 0){
			echo "<div class = 'alert alert-danger'> ban ko co du quyen vao trang nay.</div>";
		} else if($data_user['position'] == 1){
			echo "<h3>Chuyen muc</h3>";

			if(isset($_GET['ac'])){
				$ac = trim(addslashes(htmlspecialchars($_GET['ac'])));
			} else {
				$ac = '';
			}

			if(isset($_GET['id'])){
				$id = trim(addslashes(htmlspecialchars($_GET['id'])));
			} else {
				$id = '';
			}			
			
			if($ac != '')	{
				if($ac == 'add'){
					echo                 
					'
                    <a href="' . $_DOMAIN . 'categories" class="btn btn-default">
                        <span class="glyphicon glyphicon-arrow-left"></span> Trở về
                    </a> 
                	';

					echo
					'   
					    <p class="form-add-cate">
					        <form method="POST" id="formAddCate" onsubmit="return false;">
					            <div class="form-group">
					                <label>Tên chuyên mục</label>
					                <input type="text" class="form-control title" id="label_add_cate">
					            </div>
					            <div class="form-group">
					                <label>URL chuyên mục</label>
					                <input type="text" class="form-control slug" placeholder="Nhấp vào để tự tạo" id="url_add_cate">
					            </div>
					            <div class="form-group">
					                <label>Loại chuyên mục</label>
					                <div class="radio">
					                    <label>
					                        <input type="radio" name="type_add_cate" value="1" checked class="type-add-cate-1"> Lớn
					                    </label>
					                </div>
					                <div class="radio">
					                    <label>
					                        <input type="radio" name="type_add_cate" value="2" class="type-add-cate-2"> Vừa
					                    </label>
					                </div>
					                <div class="radio">
					                    <label>
					                        <input type="radio" name="type_add_cate" value="3" class="type-add-cate-3"> Nhỏ
					                    </label>
					                </div>
					            </div>
					            <div class="form-group hidden parent-add-cate">
					                <label>Parent chuyên mục</label>
					                <select id="parent_add_cate" class="form-control">
					                </select>
					            </div>
					            <div class="form-group">
					                <label>Sort chuyên mục</label>
					                <input type="text" class="form-control" id="sort_add_cate">
					            </div>
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary">Tạo</button>
					            </div>
					            <div class="alert alert-danger hidden"></div>
					        </form>
					    </p>
					';   

				} else if ($ac == 'edit'){
					$sql_check_id_cate = "SELECT * id_cate FROM categories WHERE id_cate = '$id'";

					if($db->num_rows($sql_check_id_cate)){
						echo
	                    '
	                        <a href="' . $_DOMAIN . 'categories" class="btn btn-default">
	                            <span class="glyphicon glyphicon-arrow-left"></span> Trở về
	                        </a>
	                        <a class="btn btn-danger" id="del_cate" data-id="' . $id . '">
	                            <span class="glyphicon glyphicon-trash"></span> Xoá
	                        </a> 
	                    '; 						
					} else {
	                    echo
	                    '
	                        <div class="alert alert-danger">ID chuyên mục đã bị xoá hoặc không tồn tại.</div>
	                    ';						
					}
				}
			} else {
	            echo
	            '
	                <a href="' . $_DOMAIN . 'categories/add" class="btn btn-default">
	                    <span class="glyphicon glyphicon-plus"></span> Thêm
	                </a> 
	                <a href="' . $_DOMAIN . 'categories" class="btn btn-default">
	                    <span class="glyphicon glyphicon-repeat"></span> Reload
	                </a> 
	                <a class="btn btn-danger" id="del_cate_list">
	                    <span class="glyphicon glyphicon-trash"></span> Xoá
	                </a> 
	            ';					
			}
		}
	} else {
		new Redirect($_DOMAIN);
	}
 ?>


















