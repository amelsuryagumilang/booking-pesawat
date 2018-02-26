<?php
var_dump($pesawat);
?>
<style type="text/css">
.customer-color{
    width: 30px;
    height: 30px;
    background-color:#4fc1e9;
    cursor:pointer;
    border-radius:5px;
}
.customer-selected{
    background-color:#3ca6cb;
}

.customer-table{
    margin: auto;
}
.customer-table > tbody > tr > td > span{
    font-weight: 550;
}

.customer-table > tbody > tr > td > input{
    padding: 9px;
    text-align: center;
    width: 46px;
    height: 30px;
}
.customer-table > tbody > tr > td {
    padding: 10px;
}
/* seat */
.seat{
    width: 310px;
    margin: auto;
    background-color: #f2f2f2;
    padding: 5px;
    overflow: hidden;
    border-radius:7px;
}
.seat-id{
    height: 46px;
    width: 46px;
    margin:2px;
    background-color: #bfbfbf;
    float: left;
    cursor: pointer;
    border-radius:7px;
}
.seat-id:hover{
    /* background-color:#cecece; */
}
.seat-id > p{
    text-align: center;
    padding-top: 12px;
    color:white;
}
.seat-notavailabe{
    background-color: #f25d52;
    /* cursor:disabl */
}
.seat-selected{
    background-color: #52f298;
}
</style>
<?php 
echo $sementara['nama'][0];
?>
<form action="<?php echo base_url() ?>booking/proccess" method="POST">
<?php
for ($i=1; $i <=$sementara['ppl'][0]; $i++) {
?>
<div class="customer-name">
		<!-- <input type="hidden" name='key' value=""> -->
		<table class="customer-table">
				<tr>
					<td>
						<div onclick="pget(this.id)" id="p<?php echo $i ?>" class="customer-color id-p<?php echo $i ?>"></div>
					</td>
					<td>
						<span>
							Penumpang <?php echo $i; ?>
						</span>
					</td>
					<td>
						<input name="seat[]" class="form-control" id="i<?php echo $i ?>" type="text">
					</td>
				</tr>
		</table>
	</div>
<?php } ?>
	<div class="seat">
	<?php foreach($pesawat as $row) {?>
		<?php for ($i = 1; $i <= $row['jml']; $i++) { ?>
	
			<?php if (count($row['jml']) !== 0) : ?>
				<?php if (in_array($i, $row['jml'])) : ?>
					<div id="<?php echo $i ?>" class="seat-id seat-notavailabe">
						<p><?php echo $i ?></p>
					</div>

				<?php else : ?>
					<div onclick="sget(this.id)" id="<?php echo $i ?>" class="seat-id">
						<p><?php echo $i ?></p>
					</div>
				<?php endif; ?>
			<?php else : ?>
				<div onclick="sget(this.id)" id="<?php echo $i ?>" class="seat-id">
					<p><?php echo $i ?></p>
				</div>
			<?php endif; ?>

			<?php } ?>
			<?php } ?>



	</div>