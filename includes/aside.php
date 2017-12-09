<?php
/** DETAIL POST **/


/** TAMPIL COMMENT **/
$comment = mysqli_query($conn,"SELECT * FROM comment WHERE STATUS = '1' ORDER BY id DESC limit 4");
?>
<aside class="col-md-4">
    <div class="panel panel-default">
    	<div class="panel-heading">
    		<h3 class="panel-title">Komentar Terbaru</h3>
    	</div>
    	<div class="panel-body latest-comments">
    		<ul>
            <?php if(mysqli_num_rows($comment)){?>
                <?php while($row_comment = mysqli_fetch_array($comment)){?>
                  <li class="list-group-item">
                    <strong><?php echo $row_comment["name"]?></strong>: <?php echo $row_comment["reply"]?>
                  </li>
                <?php } ?>
            <?php } ?>
            </ul>
    	</div>
    </div>
</aside>

