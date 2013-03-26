<div class="tab-pane active" id="tab1">
						<p>统计：</p>
						<table class="table table-striped table-condensed ">
							<thead>
								<tr>
									<td>id</td>
									<td>type</td>
									<td>title</td>
									<td>管理</td>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($users as $user) {
									$uid=$user->uid;
									$delete_url=$this->createUrl('/admin/user/delete',array('uid'=>$uid));
									$update_url=$this->createUrl('/admin/user/update',array('uid'=>$uid));
									echo <<<EOD
										<tr>
											<td>$uid</td>
											<td>$user[username]</a></td>
											<td>$user[email]</a></td>
											<td> 
											<a href="$delete_url">删除</a></a> 
												<span class="divider">/</span> 
												<a href="$update_url">修改</a> 
											</td>
										</tr>
EOD;
								}
								?>
								
							</tbody>
						</table>
						<!-- <div class="pagination ">
							<ul>
								<li><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
							</ul>
						</div> -->
						<?php  
							// $this->widget('CLinkPager',array(
							// 'pages'=>$pages,
							// 'firstPageLabel' => '首页',
							// 'lastPageLabel' => '末页',
							// 'nextPageLabel' => '下一页',
							// 'prevPageLabel' => '上一页',
							// 'header' => '',
							// 'footer' => '',
							// )); 
						?>
					</div>
