<form action="<?php echo base_url().'index.php/welcome/listCost' ?>" method="post">
<h3>Form Test API STARTER RAJAONGKIR / API COST</h3>
origin: <input type="text" name="origin" value="501"> didapatkan dari id provinsi/kabupaten<br>
destination: <input type="text" name="destination" value="114">didapatkan dari id provinsi/kabupaten<br>
weight: <input type="text" name="weight" value="1700"> * Wajib diisi<br>
courier: <input type="text" name="courier" value="jne">* Wajib diisi<br>
<?php 
	echo base_url().'welcome/v_form_cost' 
?>
<br/>
<input type="submit">
</form>