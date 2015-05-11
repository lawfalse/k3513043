
                <li><?php echo anchor('/bantuan/','Home') ?></li>
				<li> <?php echo anchor('/bantuan/input','Input Penerima') ?></li>
                <li  class="active"><?php echo anchor('/bantuan/cetak_semua','List Penerima') ?></li>
                <li><?php echo anchor('/bantuan/About','About') ?></li>
                
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
		 <h2>List Keluarga Penerima Bantuan</h2>
		<p>
			<?php
				echo $table
			?>
		</p>
		</div>
