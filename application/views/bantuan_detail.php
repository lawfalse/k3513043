
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




<h2 align='center'>Detail</h2>
<?php
	echo form_open('bantuan/input')
?></br>
<table class="table table-striped">
<tr>

<td>Nama Lengkap</td><td> : </td>
	<td><?php
		echo $data->nama;
	?></td>
</tr>
<tr>
<td>Jenis Kelamin</td><td> : </td> <td>
	<?php
		if ($data->jenis_kelamin=='L')
		{
		   echo "laki-laki";
		}
		else
		{
		   echo "Perempuan";
		}
	?></td>
</tr>
<tr>
<td>Tempat Lahir </td><td> : </td> 
	<td><?php
		echo $data->tempat_lahir;
	?></td>
</tr>
<tr>
<td>Tanggal Lahir </td><td> : </td> 
	<td><?php
		echo $data->tanggal_lahir;
	?></td>
</tr>
<td>Agama</td><td> : </td>
	<td>
	<?php
	   echo $data->agama;
	?>
	</td>
</tr>
<td>Pendidikan Terakhir</td><td> : </td>
	<td>
	<?php
	   echo $data->pendidikan_terakhir;
	?>
	</td>
	</td>
</tr>
<tr>
<td>Jenis Pekerjaan</td><td> : </td>
	<td>
	<?php
	   echo $data->jenis_pekerjaan;
	?>
	</td>
</tr>
<tr>
<td>Status Perkawinan</td><td> : </td>
	<td>
	<?php
	   echo $data->status_perkawinan;
	?>
	</td>
</tr>
<tr>
<td>Hubungan Keluarga</td><td> : </td>
	<td>
	<?php
	   echo $data->status_hub_keluarga;
	?>
	</td>
</tr>
<tr>
<td>Kewarganegaraan</td><td> : </td>
	<td>
	<?php
	   echo $data->kewarganegaraan;
	?>
	</td>
</tr>
<tr>
<td>Alamat</td><td> : </td>
	<td>
	<?php
	   echo $data->alamat;
	?>
	</td>
</tr>
<tr>
<td>Kode Pos</td><td> : </td>
	<td>
	<?php
	   echo $data->kode_pos;
	?>
	</td>
</tr>
<tr>
<td>Provinsi</td><td> : </td>
	<td>
	<?php
	   echo $data->provinsi;
	?>
	</td>
</tr>
<tr>
<td>Bantuan yang Diambil</td><td>: </td>
	<td>
		<?php 
		     echo "Bantuan Indonesia Sejahtera";
		?>
	</td>
</tr>


<?php
	echo form_close()
?>
</tr>
</table>

</div>
