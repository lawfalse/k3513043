
                <li><?php echo anchor('/bantuan/','Home') ?></li>
				<li> <?php echo anchor('/bantuan/input','Input Penerima') ?></li>
                <li class="active"> <?php echo anchor('/bantuan/cetak_semua','List Penerima') ?></li>
                <li><?php echo anchor('/bantuan/About','About') ?></li>
                
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div >




<h2 align='center'>Edit Data</h2>
<?php
	echo form_open('bantuan/edit/'.$data->id)
?></br>
<table class="table table-striped">
<tr>

<td>Nama Lengkap</td><td> : </td>
	<td>
		<input type="text" name="nama" class="text" value="<?php echo $data->nama; ?>">
	</td>
</tr>
<tr>
<td>Jenis Kelamin</td><td> : </td> <td>
	<input type="radio" name="jenis_kelamin" value="L" <?php if ($data->jenis_kelamin=='L'){echo "checked='checked'";} ?> />Laki-Laki
	</td>
</tr>
<tr><td></td><td></td>
	<td>
	<input type="radio" name="jenis_kelamin" value="P" <?php if ($data->jenis_kelamin=='P'){echo "checked='checked'";} ?> />Perempuan</td>
</tr>
<tr>
<td>Tempat Lahir </td><td> : </td> 
	<td>
	<input type="text" name="tempat_lahir" class="text" value="<?php echo $data->tempat_lahir; ?>">
	</td>
</tr>
<tr>
<td>Tanggal Lahir (yyyy-mm-dd)</td><td> : </td> 
	<td>
	<input type="text" name="tanggal_lahir" class="text" value="<?php echo $data->tanggal_lahir; ?>">
	</td>
</tr>
<td>Agama</td><td> : </td>
	<td>
	<select name="agama">
					
				   <option value="ISLAM" <?php if ($data->agama=='ISLAM'){echo "selected='selected'";} ?>>ISLAM</option>
				   <option value="KATOLIK" <?php if ($data->agama=='KATOLIK'){echo "selected='selected'";} ?>>KATOLIK</option>
				   <option value="KRISTEN" <?php if ($data->agama=='KRISTEN'){echo "selected='selected'";} ?>>KRISTEN</option>
				   <option value="BUDHA" <?php if ($data->agama=='BUDHA'){echo "selected='selected'";} ?>>BUDHA</option>
				   <option value="HINDU" <?php if ($data->agama=='HINDU'){echo "selected='selected'";} ?>>HINDU</option>
				   
	</td>
</tr>
<td>Pendidikan Terakhir</td><td> : </td>
	<td>
		

	<select name="pendidikan_terakhir">
					<option value="TS" <?php if ($data->pendidikan_terakhir=='TS'){echo "selected='selected'";} ?>>TIDAK SEKOLAH</option>
				   <option value="SD" <?php if ($data->pendidikan_terakhir=='SD'){echo "selected='selected'";} ?>>SD</option>
				   <option value="SMP" <?php if ($data->pendidikan_terakhir=='SMP'){echo "selected='selected'";} ?>>SMP</option>
				   <option value="SMA" <?php if ($data->pendidikan_terakhir=='SMA'){echo "selected='selected'";} ?>>SMA</option>
				   <option value="D3" <?php if ($data->pendidikan_terakhir=='D3'){echo "selected='selected'";} ?>>D3</option>
				   <option value="S1" <?php if ($data->pendidikan_terakhir=='S1'){echo "selected='selected'";} ?>>S1</option>
				   <option value="S2" <?php if ($data->pendidikan_terakhir=='S2'){echo "selected='selected'";} ?>>S2</option>
				   <option value="S3" <?php if ($data->pendidikan_terakhir=='S3'){echo "selected='selected'";} ?>>S3</option>
				   
	</td>
	</td>
</tr>
<tr>
<td>Jenis Pekerjaan</td><td> : </td>
	<td>
	<?php
	$data_pek = array(
	'PNS' => 'PNS',
	'SWASTA' => 'SWASTA',
	'WIRAUSAHA' => 'WIRA USAHA',
	'TNI/POLRI' => 'TNI/POLRI',
	'PELAJAR' => 'PELAJAR',
	'BURUH' => 'BURUH',
	'IBU RUMAH TANGGA' => 'IBU RUMAH TANGGA',
	'LAINNYA' => 'LAINNYA'
	);
	echo form_dropdown('jenis_pekerjaan', $data_pek, $data->jenis_pekerjaan);
	?>
	</td>
</tr>
<tr>
<td>Status Perkawinan</td><td> : </td>
	<td>
	
	<select name="status_perkawinan">
					<option value="KAWIN" <?php if ($data->status_perkawinan=='KAWIN'){echo "selected='selected'";} ?>>KAWIN</option>
				   <option value="BELUM KAWIN" <?php if ($data->status_perkawinan=='BELUM KAWIN'){echo "selected='selected'";} ?>> BELUM KAWIN</option>
	</td>
</tr>
<tr>
<td>Hubungan Keluarga</td><td> : </td>
	<td>
	<?php
	$data_hub = array(
	'AYAH' => 'AYAH',
	'IBU' => 'IBU',
	'ANAK' => 'ANAK',
	'SAUDARA' => 'SAUDARA',
	'KERABAT' => 'KERABAT'
	);
	echo form_dropdown('status_hub_keluarga', $data_hub, $data->status_hub_keluarga);
	?>
	
	</td>
</tr>
<tr>
<td>Kewarganegaraan</td><td> : </td>
	<td>
	<input type="text" name="kewarganegaraan" class="text" value="<?php echo $data->kewarganegaraan; ?>">
	</td>
</tr>
<tr>
<td>Alamat</td><td> : </td>
	<td><input type="textarea" name="alamat" class="text" value="<?php echo $data->alamat; ?>"></td>
</tr>
<tr>
<td>Kode Pos</td><td> : </td>
	<td><input type="text" name="kode_pos" class="text" value="<?php echo $data->kode_pos; ?>"></td>
</tr>
<tr>
<td>Provinsi</td><td> : </td>
	<td>
	
	<?php
	$data_pro = array(
	'ACEH' => 'ACEH',
	'BALI' => 'BALI',
	'BANTEN' => 'BANTEN',
	'BENGKULU' => 'BENGKULU',
	'DIY' => 'DIY',
	'GORONTALO' => 'GORONTALO',
	'JAKARTA' => 'JAKARTA',
	'JAMBI' => 'JAMBI',
	'JAWA BARAT' => 'JAWA BARAT',
	'JAWA TENGAH' => 'JAWA TENGAH',
	'JAWA TIMUR' => 'JAWA TIMUR',
	'KALIMANTAN BARAT' => 'KALIMANTAN BARAT',
	'KALIMANTAN SELATAN' => 'KALIMANTAN SELATAN',
	'KALIMANTAN TENGAH' => 'KALIMANTAN TENGAH',
	'KEPULAUAN BANGKA BELITUNG' => 'KEPULAUAN BANGKA BELITUNG',
	'KEPULAUAN RIAU' => 'KEPULAUAN RIAU',
	'LAMPUNG' => 'LAMPUNG',
	'MALUKU' => 'MALUKU',
	'MALUKU UTARA' => 'MALUKU UTARA',
	'NTB' => 'NTB',
	'NTT' => 'NTT',
	'PAPUA' => 'PAPUA',
	'PAPUA BARAT' => 'PAPUA BARAT',
	'RIAU' => 'RIAU',
	'SULAWESI BARAT' => 'SULAWESI BARAT',
	'SULAWESI TENGAH' => 'SULAWESI TENGAH',
	'SULAWESI UTARA' => 'SULAWESI UTARA',
	'SUMATERA BARAT' => 'SUMATERA BARAT',
	'SUMATERA SELATAN' => 'SUMATERA SELATAN',
	'SUMATERA UTARA' => 'SUMATERA UTARA'
	);
	echo form_dropdown('provinsi', $data_pro, $data->provinsi);
	?>
	</td>
</tr>
<tr>
<td>Bantuan yang Diambil</td><td>: </td>
<?php
$abis = explode(',',$data->BIS);
?>	
	<td>
		<input type="checkbox" name="BIS[]" value="Bantuan Langsung Tunai" <?php foreach ($abis as $item) { if ($item=='Bantuan Langsung Tunai') {echo "checked"; }} ?>/> Bantuan Langsung Tunai 
	</td>
</tr>
<tr>
<td></td><td></td>
	<td>
		<input type="checkbox" name="BIS[]" value="Bantuan Indonesia Sejahtera" <?php foreach ($abis as $item) { if ($item=='Bantuan Indonesia Sejahtera') {echo "checked"; }} ?>/> Bantuan Indonesia Sejahtera 
	</td>
</tr>
<tr>
<td></td><td></td><td style="text-align:right;">
<?php
	echo form_submit('tombol','Save')
?></td>
</tr>
<?php
	echo form_close()
?>
</tr>
</table>

</div>
