
                <li><?php echo anchor('/bantuan/','Home') ?></li>
				<li class="active"> <?php echo anchor('/bantuan/input','Input Penerima') ?></li>
                <li> <?php echo anchor('/bantuan/cetak_semua','List Penerima') ?></li>
                <li><?php echo anchor('/bantuan/About','About') ?></li>
                
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div >




<h2 align='center'>Input Data</h2>
<?php
	echo form_open('bantuan/input')
?></br>
<table class="table table-striped">
<tr>

<td>Nama Lengkap</td><td> : </td>
	<td><?php
		echo form_input('nama')
	?></td>
</tr>
<tr>
<td>Jenis Kelamin</td><td> : </td> <td>
	<?php
		echo form_radio('jenis_kelamin','L')
	?> Laki-laki</td>
</tr>
<tr><td></td><td></td>
	<td>
	<?php
		echo form_radio('jenis_kelamin','P')
	?> Perempuan</td>
</tr>
<tr>
<td>Tempat Lahir </td><td> : </td> 
	<td><?php
		echo form_input('tempat_lahir')
	?></td>
</tr>
<tr>
<td>Tanggal Lahir (yyyy-mm-dd)</td><td> : </td> 
	<td><?php
		echo form_input('tanggal_lahir')
	?></td>
</tr>
<td>Agama</td><td> : </td>
	<td>
	
	
	
	
	<select name="agama">
					
				   <option value="ISLAM">ISLAM</option>
				   <option value="KATOLIK">KATOLIK</option>
				   <option value="KRISTEN">KRISTEN</option>
				   <option value="BUDHA">BUDHA</option>
				   <option value="HINDU">HINDU</option>
				   
	</td>
</tr>
<td>Pendidikan Terakhir</td><td> : </td>
	<td>
		

	<select name="pendidikan_terakhir">
					<option value="TS">TIDAK SEKOLAH</option>
				   <option value="SD">SD</option>
				   <option value="SMP">SMP</option>
				   <option value="SMA">SMA</option>
				   <option value="D3">D3</option>
				   <option value="S1">S1</option>
				   <option value="S2">S2</option>
				   <option value="S3">S3</option>
				   
	</td>
	</td>
</tr>
<tr>
<td>Jenis Pekerjaan</td><td> : </td>
	<td>
	<select name="jenis_pekerjaan">
					<option value="PNS">PNS</option>
				   <option value="SWASTA">SWASTA</option>
				   <option value="WIRA USAHA">WIRA USAHA</option>
				   <option value="TNI/POLRI">TNI/POLRI</option>
				   <option value="PELAJAR">PELAJAR</option>
				   <option value="BURUH">BURUH</option>
				   <option value="IBU RUMAH TANGGA">IBU RUMAH TANGGA</option>
				   <option value="LAINNYA">LAINNYA</option>
				   
	
	</td>
</tr>
<tr>
<td>Status Perkawinan</td><td> : </td>
	<td>
	
	<select name="status_perkawinan">
					<option value="KAWIN">KAWIN</option>
				   <option value="BELUM KAWIN"> BELUM KAWIN</option>
	</td>
</tr>
<tr>
<td>Hubungan Keluarga</td><td> : </td>
	<td>
	<select name="status_hub_keluarga">
					<option value="AYAH">AYAH</option>
				   <option value="IBU">IBU</option>
					<option value="ANAK">ANAK</option>
					<option value="SAUDARA">SAUDARA</option>
					<option value="KERABAT">KERABAT</option>
				  
	</td>
</tr>
<tr>
<td>Kewarganegaraan</td><td> : </td>
	<td><?php
		echo form_input('kewarganegaraan')
	?></td>
</tr>
<tr>
<td>Alamat</td><td> : </td>
	<td><?php
		echo form_textarea('alamat')
	?></td>
</tr>
<tr>
<td>Kode Pos</td><td> : </td>
	<td><?php
		echo form_input('kode_pos')
	?></td>
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
	echo form_dropdown('provinsi', $data_pro);
	?>
	</td>
</tr>
<tr>
<td>Bantuan yang Diambil</td><td>: </td>
	<td>
		<?php echo form_checkbox('BIS[]', 'Bantuan Langsung Tunai') ?> Bantuan Langsung Tunai 
	</td>
</tr>
<tr>
<td></td><td></td>
	<td>
		<?php echo form_checkbox('BIS[]', 'Bantuan Indonesia Sejahtera') ?> Bantuan Indonesia Sejahtera 
	</td>
</tr>
<tr>
<td></td><td></td><td style="text-align:right;">
<?php
	echo form_submit('tombol','Input!')
?></td>
</tr>
<?php
	echo form_close()
?>
</tr>
</table>
<?php
	if(!$tombol){}else
	{
	}
?>
</div>
